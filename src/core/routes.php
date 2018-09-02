<?php
/**
 * Sistema de rutas
 * Docs: https://github.com/mrjgreen/phroute
 */

$P = $config->get("site.url");

$router->filter('auth', function(){
	global $auth, $router, $P;
	$site = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(!$auth->check()) {
		$site .= $P;
		header("Location: {$site}/login");
	}
});


/*$user = new Jess\Messenger\User($auth->get("id"));

$helper->dd($user->getAddress());die();*/

$router->get("{$P}/404.html", ['Jess\Messenger\HomeController', 'error']);
$router->get(["{$P}/login", 'login'],  ['Jess\Messenger\AuthController', 'index']);
$router->post("{$P}/login",  ['Jess\Messenger\AuthController', 'login']);
$router->get(["{$P}/register", 'register'],  ['Jess\Messenger\AuthController', 'register']);

$router->group(['before' => 'auth'], function($router){
	global $P;
	$router->get(["{$P}/", 'home'],  ['Jess\Messenger\PacientesController', 'index']);

	$router->get(["{$P}/pacientes", "pacientes"], ['Jess\Messenger\PacientesController', 'index']);
	$router->get(["{$P}/pacientes/nuevo", "nuevo-paciente"], ['Jess\Messenger\PacientesController', 'nuevo']);
	$router->post(["{$P}/pacientes/nuevo", "guardar-paciente-nuevo"], ['Jess\Messenger\PacientesController', 'guardarNuevo']);
	$router->get(["{$P}/paciente/{id}", "ver-paciente"], ['Jess\Messenger\PacientesController', 'verPaciente']);
	$router->get(["{$P}/paciente/{id}/editar", "editar-paciente"], ['Jess\Messenger\PacientesController', 'editar']);
	$router->post(["{$P}/paciente/{id}/guardar", "guardar-paciente"], ['Jess\Messenger\PacientesController', 'guardarPaciente']);

	$router->get(["{$P}/reportes/nuevo/{medical_history}", "nuevo-reporte"], ['Jess\Messenger\ReportesController', 'nuevo']);
	$router->post(["{$P}/reportes/nuevo", "guardar-reporte"], ["Jess\Messenger\ReportesController", "guardarNuevo"]);
	$router->get(["{$P}/reportes/patologicos/{medical_history}", "ver_patologicos"], ['Jess\Messenger\ReportesController', 'verPatologicos']);
	$router->post(["{$P}/reportes/patologicos/{report_id}", "guardar_patologicos"], ['Jess\Messenger\ReportesController', 'guardarPatologicos']);
	$router->get(["{$P}/reportes/padecimiento-actual/{report_id}", "ver_padecimiento_actual"], ['Jess\Messenger\ReportesController', 'verPadecimientoActual']);
	$router->post(["{$P}/reportes/padecimiento-actual/{report_id}", "guardar_pad_act"], ['Jess\Messenger\ReportesController', 'guardarPadecimientoActual']);
	$router->get(["{$P}/reportes/diagnostico/{report_id}", "ver_diagnostico"], ["Jess\Messenger\ReportesController", "verDiagnostico"]);
	$router->post(["{$P}/reportes/diagnostico/{report_id}", "guardar_diagnostico"], ["Jess\Messenger\ReportesController", "guardarDiagnostico"]);
	$router->get(["{$P}/reportes/tratamiento/{report_id}", "ver_tratamiento"], ["Jess\Messenger\ReportesController", "verTratamiento"]);
	$router->post(["{$P}/reportes/tratamiento/{report_id}", "guardar_tratamiento"], ["Jess\Messenger\ReportesController", "guardarTratamiento"]);
	$router->get(["{$P}/reportes/resumen/{report_id}", "ver_resumen"], ["Jess\Messenger\ReportesController", "verResumen"]);

	$router->get(["{$P}/recetas/nueva/{patient_id}/{report_id}", "nueva_receta"], ['Jess\Messenger\RecetasController', "nuevaReceta"]);
	$router->post(["{$P}/recetas/nueva", "guardar_receta"], ['Jess\Messenger\RecetasController', "guardarReceta"]);
	$router->get(["{$P}/recetas/ver/{recipe_id}", "ver_receta"], ['Jess\Messenger\RecetasController', "verReceta"]);

	/**
	 * API
	 */

	$router->get(["{$P}/api/buscar/pacientes/{search}", "api.pacientes"], ['Jess\Messenger\PacientesController', 'apiBuscarPacientes']);

	$router->get(["{$P}/logout", 'logout'],  ['Jess\Messenger\AuthController', 'logout']);
});