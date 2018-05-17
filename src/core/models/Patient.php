<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;
use Jess\Messenger\Address;
use Jess\Messenger\MedicalHistory;
use Jess\Messenger\Report;

/**
* Modelo de los pacientes
*/
class Patient extends ModelManager {

	static protected $table = "patients";
	static protected $id = "id";

	public function getAddress() {
		$address_id = $this->address_id;
		$address = Address::get($address_id);
		return $address;
	}
    
    public function getMedicalHistory() {
        $mh_id = $this->medical_history_id;
		$medical_history = MedicalHistory::get($mh_id);
		return $medical_history;
	}
	
	public function getStringAddress() {
		$aid = $this->getAddress();
		$address = "";
		if(is_object($aid)) {
			$address = $aid->street." #".$aid->exterior_number;
			if(!empty($aid->interior_number)) {
				$address .= " Num. Int. ".$aid->interior_number;
			}
			$address .= " CP.".$aid->postal_code.", ".$aid->colony.", ".$aid->city.", ".$aid->state.", ".$aid->country;
		}
		return $address;
	}

	public function getReportes() {
		$mh = MedicalHistory::getReports($this->medical_history_id);
		return $mh;
	}

	static function getByMedicalHistoryID($medical_id) {
		$patient = static::getByKey("medical_history_id", $medical_id);
		if(count($patient) > 0) {
			$patient = $patient[0];
		}
		return new Patient($patient['id']);
	}
}