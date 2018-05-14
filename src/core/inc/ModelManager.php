<?php
namespace Jess\Messenger;

/**
* Model Manager
*/
class ModelManager {
    protected $db, $config, $auth, $helper;
    
    /**
     * Nombre de la tabla asociada a este modelo
     */
    protected $table;

    /**
     * Nombre del campo primario o id (primary key)
     */
    protected $id;

    /**
     * Campos de la tabla protegidos (no se retornan)
     */
    protected $protectedFields = ["password"];

	function __construct() {
        global $db, $config, $auth, $helper;
        $this->config = $config;
        $this->auth = $auth;
        $this->helper = $auth;
        $this->db = $db;
    }
    
    private function removeProtectedFields($results) {
        if(count($results) > 0) {
            foreach ($results as $key => $value) {
                if(is_array($value)) {
                    $results[$key] = $this->removeProtectedFields($value);
                } else {
                    if(in_array($key, $this->protectedFields)) {
                        unset($results[$key]);
                    }
                }
            }
        }
        return $results;
    }

	public function getAll() {
        $results = $this->db->query("SELECT * FROM {$this->table}");
        return $this->toObject($this->removeProtectedFields($results));
    }

    public function get($key, $value = "undefined") {
        $result = [];
        if($value === "undefined") {
            $result = $this->getByID($key);
        } else if(is_array($key)) {
            $result = $this->getByArray($key, $value === "undefined" ? "AND" : $value);
        } else {
            $result = $this->getByKey($key, $value);
        }
        return $this->toObject($this->removeProtectedFields($result));
    }

    public function getByID($value) {
        $result = $this->db->query("SELECT * FROM {$this->table} WHERE {$this->id}='{$value}'");
        return $this->removeProtectedFields($result);
    }

    public function getByArray($arr, $method="AND") {
        $query = "";
        foreach ($key as $k => $v) {
            $query .= "{$k}='{$v}' {$method} ";
        }
        $query = rtrim($query,"{$method} ");
        $result = $this->db->query("SELECT * FROM {$this->table} WHERE {$query}");

        return $this->removeProtectedFields($result);
    }

    public function getByKey($key, $value) {
        $result = $this->db->query("SELECT * FROM {$this->table} WHERE {$key}='{$value}'");
        return $this->removeProtectedFields($result);
    }

    public function new($data = []) {
        if(count($data) > 0) {
            $result = $this->db->create($this->table, $data);
            if($result) {
                return $this->toObject($this->getByArray($data));
            }
        }
        return false;
    }

    public function remove($id = "undefined") {
        if($id !== "undefined") {
            return $this->db->delete($this->table, $this->id, $id);
        }
        return false;
    }

    public function edit($id = "undefined", $data = []) {
        if($id !== "undefined") {
            return $this->db->update($this->table, $this->id, $id, $data);
        }
        return false;
    }

    /**
     * By Chris Jeffries
     * https://stackoverflow.com/a/47219704
     */
    private function toObject($arr) {
        $innerfunc = function ($a) use ( &$innerfunc ) {
           return (is_array($a)) ? (object) array_map($innerfunc, $a) : $a; 
        };
        return (object) array_map($innerfunc, $arr);
    }
}