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

	public function getReports() {
		$reports = Address::getAll($this->id);
		return $reports;
	}
}