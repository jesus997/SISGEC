<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Jess\Messenger\User;

/**
* Controlador de inicio se sesion
*/
class AuthController extends ControllerManager{
	
	function __construct() {
		parent::__construct();
	}

	public function index() {
		global $auth, $config;
		if($auth->check()) {
			$this->redirect($config->get("site.url"));
		}
		$data['page_name'] = 'Login';
		$data['file_name'] = 'auth/login';
		$this->view('base', $data);
	}

	public function login() {
		global $db, $auth, $config;

		if($auth->check()) {
			$this->redirect($config->get("site.url"));
		}

		$email = $this->post_params("email", false);
		$password = $this->post_params("password", false);

		if($email && $password) {
			$saved_password = $db->query("SELECT password FROM users WHERE email='".$email."'");
			if( (is_array($saved_password) && count($saved_password) > 0) ) {
				if(is_array($saved_password[0]) && array_key_exists('password', $saved_password[0])) {
					if( password_verify($password, $saved_password[0]['password']) ) {
						global $helper;
						$user = User::get("email", $email);
						$auth->login($user);

						$this->redirect($config->get("site.url"));
					} else {
						$data['error'] = "invalid-password";
					}
				} else {
						$data['error'] = "invalid-password";
				}
			} else {
				$data['error'] = "invalid-email";
			}
		} else {
			$data['error'] = "Todos los campos son requeridos.";
		}

		$data['page_name'] = 'Login error';
		$data['file_name'] = 'auth/login';

		$this->view('base', $data);
	}

	public function register() {
		return "Pagina de registro";
	}

	public function logout() {
		global $auth, $config;
		$auth->logout();
		$this->redirect($config->get("site.url"));
	}
}