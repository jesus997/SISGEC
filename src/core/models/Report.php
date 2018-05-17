<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;
use Jess\Messenger\Section;

/**
* Modelo de los reportes medicos
*/
class Report extends ModelManager {

	static protected $table = "reports";
	static protected $id = "id";

	static function getSections($report_id) {
		global $db, $helper;
		$data = [];
		$sections = $db->query("SELECT * from reports_has_sections WHERE report_id='{$report_id}'");
		if(count($sections) > 0) {
			foreach($sections as $section) {
				$sc = Section::getById($section['section_id'])[0];
				$sc['records'] = Section::getRecords($section['section_id']);
				$data[$sc['slug']] = $sc;
			}
		}
		return $data;
	}

	public function addSection($data) {
		global $db;
        if(count($data) > 0) {
            $result = $db->create("reports_has_sections", $data);
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