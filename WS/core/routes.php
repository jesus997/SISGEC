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
	$router->get(["{$P}/logout", 'logout'],  ['Jess\Messenger\AuthController', 'logout']);
});