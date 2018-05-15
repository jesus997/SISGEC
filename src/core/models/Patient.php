<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;
use Jess\Messenger\Address;
use Jess\Messenger\MedicalHistory;

/**
* Modelo de los pacientes
*/
class Patient extends ModelManager {

	static protected $table = "patients";
	static protected $id = "id";

	public function getAddress() {
		$address_id = $this->adress_id;
		$address = Address::get($address_id);
		return $address;
	}
    
    public function getMedicalHistory() {
        $mh_id = $this->medical_history_id;
		$medical_history = MedicalHistory::get($mh_id);
		return $medical_history;
    }
}