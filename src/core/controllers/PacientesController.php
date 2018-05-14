<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;

/**
* Controlador de la pagina principal
*/
class PacientesController extends ControllerManager {

	function __construct() {
		parent::__construct();
	}
	
	public function index(){
		$data['page_name'] = "Pacientes";
		$data['file_name'] = "pacientes/index";
		$this->view("base", $data);
    }
    
    public function nuevo() {
        $data['page_name'] = "Nuevo Paciente";
		$data['file_name'] = "pacientes/nuevo";
		$this->view("base", $data);
    }

    public function guardarNuevo() {
        
    }
}