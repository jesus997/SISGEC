<?php
namespace Jess\Messenger;

/**
* Model Manager
*/
class ModelManager {
    /**
     * Nombre de la tabla asociada a este modelo
     */
    static protected $table;

    /**
     * Nombre del campo primario o id (primary key)
     */
    static protected $id;

    /**
     * Campos de la tabla protegidos (no se retornan)
     */
    static protected $protectedFields = ["password"];

    protected $model_data;

    public function __get($varName){

        if (!array_key_exists($varName,$this->model_data)){
            //this attribute is not defined!
            throw new \Exception("Undefined variable '{$varName}' in ". \get_called_class() ." model.");
        }
        else return $this->model_data[$varName];
  
    }
  
    public function __set($varName,$value){
        $this->model_data[$varName] = $value;
    }
    
    public function __construct($id){
        $this->data = self::get($id);
    }

    static function removeProtectedFields($results) {
        if(count($results) > 0) {
            foreach ($results as $key => $value) {
                if(is_array($value)) {
                    $results[$key] = static::removeProtectedFields($value);
                } else {
                    if(in_array($key, static::$protectedFields)) {
                        unset($results[$key]);
                    }
                }
            }
        }
        return $results;
    }

	static function getAll() {
        global $db;
        $results = $db->query("SELECT * FROM {static::$table}");
        return static::toObject(static::removeProtectedFields($results));
    }

    static function get($key, $value = "undefined") {
        $result = [];
        if($value === "undefined") {
            $result = static::getByID($key);
        } else if(is_array($key)) {
            $result = static::getByArray($key, $value === "undefined" ? "AND" : $value);
        } else {
            $result = static::getByKey($key, $value);
        }
        return static::toObject($result);
    }

    static function getByID($value) {
        global $db;
        $result = $db->query("SELECT * FROM ".static::$table." WHERE ".static::$id."='{$value}'");
        return static::removeProtectedFields($result);
    }

    static function getByArray($arr, $method="AND") {
        global $db;
        $query = "";
        foreach ($key as $k => $v) {
            $query .= "{$k}='{$v}' {$method} ";
        }
        $query = rtrim($query,"{$method} ");
        $result = $db->query("SELECT * FROM ".static::$table." WHERE {$query}");

        return static::removeProtectedFields($result);
    }

    static function getByKey($key, $value) {
        global $db;
        $result = $db->query("SELECT * FROM ".static::$table." WHERE {$key}='{$value}'");
        return static::removeProtectedFields($result);
    }

    static function new($data = []) {
        global $db;
        if(count($data) > 0) {
            $result = $db->create(static::$table, $data);
            if($result) {
                return static::toObject(static::getByArray($data));
            }
        }
        return false;
    }

    static function remove($id = "undefined") {
        global $db;
        if($id !== "undefined") {
            return $db->delete(static::$table, static::$id, $id);
        }
        return false;
    }

    static function edit($id = "undefined", $data = []) {
        global $db;
        if($id !== "undefined") {
            return $db->update(static::$table, static::$id, $id, $data);
        }
        return false;
    }

    /**
     * By Chris Jeffries
     * https://stackoverflow.com/a/47219704
     */
    static function toObject($arr) {
        if(is_array($arr)) {
            if(count($arr) == 1) {
                $arr = $arr[0];
            }
            $innerfunc = function ($a) use ( &$innerfunc ) {
                return (is_array($a)) ? (object) array_map($innerfunc, $a) : $a; 
            };
            return (object) array_map($innerfunc, $arr);
        }
        return self::toObject([$arr]);
    }
}