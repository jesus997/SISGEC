<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;
use Jess\Messenger\Record;

class Section extends ModelManager {

	static protected $table = "sections";
	static protected $id = "id";

	static function getRecords($section_id) {
		global $db, $helper;
		$data = [];
		$records = $db->query("SELECT * from sections_has_records WHERE section_id='{$section_id}'");
		if(count($records) > 0) {
			foreach($records as $record) {
				$sc = Record::get($record['record_id']);
				$data[$sc->slug] = $sc;
			}
		}
		return $data;
    }
    
    public function addRecord($data) {
        global $db;
        if(count($data) > 0) {
            $result = $db->create("sections_has_records", $data);
            if($result) {
                $arr = static::getByArray($data);
                if(count($arr) > 0) {
                    $arr = $arr[0];
                }
                return static::toObject($arr);
            }
        }
        return false;
    }
}