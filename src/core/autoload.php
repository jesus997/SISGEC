<?php
namespace Jess\Messenger;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start PHP Session
session_start();

/**
 * Includes
 */
include_once(__DIR__."/../vendor/autoload.php");
include_once(__DIR__."/inc/ConfigManager.php");
include_once(__DIR__."/inc/Helper.php");
include_once(__DIR__."/db/connection.php");
include_once(__DIR__."/inc/Auth.php");
include_once(__DIR__."/inc/ModelManager.php");
include_once(__DIR__."/inc/ControllerManager.php");
require_once(__DIR__.'/inc/dompdf/autoload.inc.php');

use Jess\Messenger\ConfigManager;
use Jess\Messenger\Helper;
use Jess\Messenger\Auth;
use Jess\Messenger\DB;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$config = new ConfigManager();

$helper = new Helper();

/**
 * Conexion a la base de datos
 **/
$db = new DB();

/**
 * Autentificacion
 **/
$auth = new Auth();

/**
 * Auto carga de modelos y controladores
 */
function controller_autoload ($controller_name) {
	$dirs = ["models", "controllers"];
	$file = $controller_name;
	if(strpos($controller_name, '\\') !== false) {
		$file = explode('\\', $controller_name);
		$file = $file[count($file)-1];
	}
	foreach ($dirs as $dir) {
		if(file_exists(__DIR__ . "/{$dir}/{$file}.php")) {
			include_once(__DIR__ . "/{$dir}/{$file}.php");
		}
	}
}
spl_autoload_register("Jess\Messenger\controller_autoload");

/**
 * Sistema de rutas
 **/
$router = new RouteCollector();

include_once(__DIR__."/routes.php");