<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Jess\Messenger\Patient;
use Jess\Messenger\Address;
use Jess\Messenger\MedicalHistory;

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
    
  public function nuevo($error=false) {
    $data['page_name'] = "Nuevo Paciente";
		$data['file_name'] = "pacientes/nuevo";
		if($error) {
			$data['error'] = $error;
		}
		$this->view("base", $data);
  }

  public function guardarNuevo() {
		global $helper, $db;
		$data = $this->post_params();
		if(!empty($data)) {
			$address = $data['address'];
			unset($data['address']);
			$mh = MedicalHistory::new(['created_date' => date("y-m-d H:m:s")]);
			$data['medical_history_id'] = $mh->id;
			$address = Address::new($address);
			$data['address_id'] = $address->id;
			$data['created_date'] = date("y-m-d H:m:s");
			$patient = Patient::new($data);
			if( count($db->getErrors()) > 0 ) {
				$this->nuevo("Ha ocurrido un error al guardar la información. Por favor intentelo de nuevo.");
			}
			$this->redirect($helper->url("/paciente/{$patient->id}"));
		} else {
			$this->nuevo("Los valores no pueden estar vacios.");
		}
	}
	
	public function verPaciente($id="undefined") {
		global $helper;
		if($id!=="undefined") {
			$paciente = new Patient($id);
			$data['page_name'] = "Paciente {$paciente->fullname}";
			$data['file_name'] = "pacientes/ver";
			$data['paciente'] = $paciente;
			$this->view("base", $data);
		} else {
			$this->redirect($helper->url("/404.html"));
		}
	}
}