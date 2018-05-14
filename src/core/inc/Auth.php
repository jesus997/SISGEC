<?php
namespace Jess\Messenger;

/**
* Manejo del inicio de sesion
*/
class Auth {

	protected $user_data;

    public function __get($varName){

        if (!array_key_exists($varName,$this->user_data)){
			if($varName === "fullname") {
				return $this->get("fullname");
			}
            return "undefined";
        }
        else return $this->user_data[$varName];
  
    }
  
    public function __set($varName,$value){
        $this->model_data[$varName] = $value;
    }

	function __construct() {
		if( !isset($_SESSION['auth']) ) {
			$_SESSION['auth'] = false;
			$this->user_date = [];
		} else {
			$this->user_data = $_SESSION['auth'];
		}
	}

	public function login($user_data = []) {
		if(is_object($user_data)) $user_data = (array) $user_data;
		$_SESSION['auth'] = $user_data;
		$this->user_data = $user_data;
	}

	public function logout() {
		if( $this->check() ) {
			$_SESSION['auth'] = false;
			$this->user_data = [];
		}
	}

	public function check() {
		return (isset($_SESSION['auth']) && !empty($_SESSION['auth']));
	}

	public function user() {
		if( $this->check() ) {
			return $_SESSION['auth'];
		}
		return array(
			'username' => 'undefined',
			'name' => 'undefined',
			'email' => 'undefined'
		);
	}

	public function isAdmin() {
		if($this->check() && $this->get('Tipo') == 0) return true;
		return false;
	}

	public function isOrganizador() {
		if($this->check() && $this->get('Tipo') == 1) return true;
		return false;
	}

	public function get($field) {
		if( $this->check() ) {
			if(is_array($this->user_data) && array_key_exists($field, $this->user_data)) {
				return $this->user_data[$field];
			} else {
				if($field === "fullname") {
					return $this->user_data['name']." ".$this->user_data['lastname'];
				}
			}
		}
		return 'undefined';
	}
}