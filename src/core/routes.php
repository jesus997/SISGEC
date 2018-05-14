<?php
/**
 * Sistema de rutas
 * Docs: https://github.com/mrjgreen/phroute
 */

$P = $config->get("site.url");

$router->filter('auth', function(){
	global $auth, $router, $P;

	if(!$auth->check()) {
		header("Location: {$P}/login");
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
	$router->get(["{$P}/", 'home'],  ['Jess\Messenger\HomeController', 'index']);

	$router->get(["{$P}/pacientes", "pacientes"], ['Jess\Messenger\PacientesController', 'index']);
	$router->get(["{$P}/pacientes/nuevo", "nuevo-paciente"], ['Jess\Messenger\PacientesController', 'nuevo']);
	$router->post(["{$P}/pacientes/nuevo", "guardar-paciente-nuevo"], ['Jess\Messenger\PacientesController', 'guardarNuevo']);
	
	$router->get(["{$P}/logout", 'logout'],  ['Jess\Messenger\AuthController', 'logout']);
});