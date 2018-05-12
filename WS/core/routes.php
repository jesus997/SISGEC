<?php
/**
 * Sistema de rutas
 * Docs: https://github.com/mrjgreen/phroute
 */

$P = "/SISOE/WS";

$router->filter('auth', function(){
	global $auth, $router, $P;

	if(!$auth->check()) {
		header("Location: {$P}/login");
	}
});


$router->get("{$P}/404.html", ['Jess\Messenger\HomeController', 'error']);
$router->get(["{$P}/login", 'login'],  ['Jess\Messenger\AuthController', 'index']);
$router->post("{$P}/login",  ['Jess\Messenger\AuthController', 'login']);
$router->get(["{$P}/register", 'register'],  ['Jess\Messenger\AuthController', 'register']);

$router->get(["{$P}/", 'home'],  ['Jess\Messenger\HomeController', 'index']);
$router->get(["{$P}/salon/{id}/eventos", 'salon'], ['Jess\Messenger\EventosController', 'index']);

$router->group(['before' => 'auth'], function($router){
	global $P;
	$router->get(["{$P}/mis-eventos", "mis-eventos"], ['Jess\Messenger\EventosController', 'misEventos']);
	$router->get(["{$P}/salones", "salones"], ['Jess\Messenger\SalonesController', 'index']);
	$router->get(["{$P}/salones/nuevo", "nuevo-salon"], ['Jess\Messenger\SalonesController', 'nuevo']);
	$router->post(["{$P}/salones/nuevo", "post-nuevo-salon"], ['Jess\Messenger\SalonesController', 'guardar']);
	$router->get(["{$P}/salon/{id}/editar", "editar-salon"], ['Jess\Messenger\SalonesController', 'editar']);
	$router->post(["{$P}/salon/{id}/editar", "post-editar-salon"], ['Jess\Messenger\SalonesController', 'editarGuardar']);
	$router->post(["{$P}/salon/{id}/borrar", "borrar-salon"], ['Jess\Messenger\SalonesController', 'borrar']);

	$router->get(["{$P}/eventos/nuevo", "nuevo-evento"], ['Jess\Messenger\EventosController', 'nuevoEvento']);
	$router->post(["{$P}/eventos/nuevo", "post-nuevo-evento"], ['Jess\Messenger\EventosController', 'guardarEvento']);
	$router->get(["{$P}/evento/{id}/editar", "editar-evento"], ['Jess\Messenger\EventosController', 'editarEvento']);
	$router->post(["{$P}/evento/{id}/editar", "post-editar-evento"], ['Jess\Messenger\EventosController', 'eGuardarEvento']);
	$router->post(["{$P}/evento/{id}/borrar", "borrar-evento"], ['Jess\Messenger\EventosController', 'borrarEvento']);

	$router->post(["{$P}/reporte/mis-eventos", "reporte-eventos"], ['Jess\Messenger\EventosController', 'imprimirMisEventos']);
	$router->post(["{$P}/reporte/salones", "reporte-salones"], ['Jess\Messenger\SalonesController', 'imprimirSalones']);
	
	$router->get(["{$P}/logout", 'logout'],  ['Jess\Messenger\AuthController', 'logout']);
});