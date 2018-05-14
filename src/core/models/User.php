<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;
use Jess\Messenger\Address;

/**
* Modelo de los usuarios principal
*/
class User extends ModelManager {

	static protected $table = "users";
	static protected $id = "id";

	public function getAddress() {
		$address_id = $this->adress_id;
		$address = Address::get($address_id);
		return $address;
	}
	
}