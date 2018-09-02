<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Jess\Messenger\Patient;
use Jess\Messenger\Receta;

/**
* Controlador de la pagina principal
*/
class RecetasController extends ControllerManager {

	function __construct() {
		parent::__construct();
	}
	
	public function nuevaReceta($patient_id=0, $report_id=0){
		global $db;
		$data['page_name'] = "Nueva Receta";
        $data['file_name'] = "recetas/nueva";
        $data['report_id'] = $report_id;
        $data['patient_id'] = $patient_id;
        $data['pacientes'] = Patient::getAll();
		$this->view("base", $data);
    }
    
    public function guardarReceta() {
        global $helper, $db;
		$data = $this->post_params();
        $data = $this->clearArray($data);

        $data['content'] = $data['mce_0'];
        unset($data['mce_0']);
        $data['date'] = date("y-m-d H:m:s");
        $data['created_date'] = date("y-m-d H:m:s");
        
        $receta = Receta::new($data);

        $this->redirect($helper->url("/reportes/resumen/".$data['report_id']));
    }

    public function verReceta($recipe_id) {
        global $db;
		$data['page_name'] = "Ver Receta";
        $data['file_name'] = "recetas/ver";
        $data['receta'] = Receta::get($recipe_id);
        $data['patient'] = Patient::get($data['receta']->patient_id);
		$this->view("base", $data);
    }

    private function clearArray($arr) {
		foreach($arr as $key => $value) {
			if($key==="medical_history") continue;
			if(empty($value) || trim($value) === "") unset($arr[$key]);
		}
		return $arr;
	}

	public function error() {
		return "Error 404";
	}
}