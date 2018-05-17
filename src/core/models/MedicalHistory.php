<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;
use Jess\Messenger\Report;

/**
* Modelo de los historiales medicos
*/
class MedicalHistory extends ModelManager {

	static protected $table = "medical_history";
	static protected $id = "id";

	static function getReports($id) {
		$reports = Report::getByKey("medical_history_id",$id);
		return $reports;
	}
}