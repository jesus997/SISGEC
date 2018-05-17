<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Jess\Messenger\Section;
use Jess\Messenger\Record;
use Jess\Messenger\Report;
use Jess\Messenger\Patient;

/**
* Controlador de los reportes
*/
class ReportesController extends ControllerManager {

	function __construct() {
		parent::__construct();
	}
	
	public function nuevo($medical_history=0){
		global $db;
		$data['page_name'] = "Nuevo Reporte";
		$data['file_name'] = "reportes/nuevo";
		$data['medical_history'] = $medical_history;
		$this->view("base", $data);
	}

	public function guardarNuevo() {
		global $helper, $db;
		$data = $this->post_params("familiares");
		$data = $this->clearArray($data);
		$report['current_condition'] = "";
		$report['diagnosis'] = "";
		$report['treatment'] = "";
		$report['medical_history_id'] = $data['medical_history'];
		$report['created_date'] = date("y-m-d H:m:s");
		unset($data['medical_history']);
		$report = Report::new($report);
		$report = new Report($report->id);
		$section["name"] = "Heredo Familiares";
		$section["slug"] = "heredo-familiares";
		$section["parent"] = "Antecedentes";
		$section = Section::get($section);
		if(count((array)$section) < 1) {
			$section = Section::new($section);
		}
		$section = new Section($section->id);

		foreach($data as $key => $value) {
			$record = [];
			$record['name'] = $this->toTitle($key);
			$record['value'] = $value;
			$record['slug'] = $key."_".uniqid();
			$record = Record::new($record);
			$section->addRecord(["section_id" => $section->id, "record_id" => $record->id]);
		}
		$report->addSection(["report_id" => $report->id, "section_id" => $section->id]);
		$this->redirect($helper->url("/reportes/patologicos/{$report->id}"));
	}

	public function verPatologicos($report_id=0) {
		$data['page_name'] = "Antecedentes - Personales Patologicos";
		$data['file_name'] = "reportes/patologicos";
		$data['report_id'] = $report_id;
		$this->view("base", $data);
	}

	public function guardarPatologicos() {
		global $helper, $db;
		$data = $this->post_params("patologicos");
		$report_id = $data['report_id'];
		unset($data['report_id']);
		$data = $this->clearArray($data);

		$sectiond["name"] = "Personales Patologicos";
		$sectiond["slug"] = "personales-patologicos";
		$sectiond["parent"] = "Antecedentes";
		$section = Section::get($sectiond);
		if(count((array)$section) < 1) {
			$section = Section::new($sectiond);
		}
		$section = new Section($section->id);
		
		$report = new Report($report_id);

		$report->addSection(["report_id" => $report_id, "section_id" => $section->id]);

		$this->redirect($helper->url("/reportes/padecimiento-actual/{$report_id}"));
	}

	public function verPadecimientoActual($report_id=0) {
		$data['page_name'] = "Padecimiento Actual";
		$data['file_name'] = "reportes/padecimiento-actual";
		$data['report_id'] = $report_id;
		$this->view("base", $data);
	}

	public function guardarPadecimientoActual() {
		global $helper, $db;
		$data = $this->post_params();
		$report_id = $data['report_id'];
		$content = $data['mce_0'];
		unset($data['report_id']);
		$data = $this->clearArray($data);
		
		if(count($data) > 0) {
			$update = Report::edit($report_id, ['current_condition' => $content]);
		}

		$this->redirect($helper->url("/reportes/diagnostico/{$report_id}"));
	}

	public function verDiagnostico($report_id) {
		$data['page_name'] = "Diagnostico";
		$data['file_name'] = "reportes/diagnostico";
		$data['report_id'] = $report_id;
		$this->view("base", $data);
	}

	public function guardarDiagnostico() {
		global $helper, $db;
		$data = $this->post_params();
		$report_id = $data['report_id'];
		$content = $data['mce_0'];
		unset($data['report_id']);
		$data = $this->clearArray($data);
		
		if(count($data) > 0) {
			$update = Report::edit($report_id, ['diagnosis' => $content]);
		}

		$this->redirect($helper->url("/reportes/tratamiento/{$report_id}"));
	}

	public function verTratamiento($report_id) {
		$data['page_name'] = "Tratamiento";
		$data['file_name'] = "reportes/tratamiento";
		$data['report_id'] = $report_id;
		$this->view("base", $data);
	}

	public function guardarTratamiento() {
		global $helper, $db;
		$data = $this->post_params();
		$report_id = $data['report_id'];
		$content = $data['mce_0'];
		unset($data['report_id']);
		$data = $this->clearArray($data);
		
		if(count($data) > 0) {
			$update = Report::edit($report_id, ['treatment' => $content]);
		}

		$this->redirect($helper->url("/reportes/resumen/{$report_id}"));
	}

	public function verResumen($report_id) {
		$data['page_name'] = "Resumen del Reporte";
		$data['file_name'] = "reportes/resumen";
		$data['reporte'] = Report::get($report_id);
		$data['paciente'] = Patient::getByMedicalHistoryID($data['reporte']->medical_history_id);
		$data['secciones'] = Report::getSections($report_id);
		$this->view("base", $data);
	}

	private function toTitle($str) {
		$str = str_replace("-", " ", $str);
		return ucwords($str);
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