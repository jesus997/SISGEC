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
include_once(__DIR__."/db/Connection.php");
include_once(__DIR__."/inc/Auth.php");
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

/*$db->create("direccion", array(
	"idDireccion" => '',
	"Calle" => "Tulipan",
	"NumeroExt"	=> "1270",
	"NumeroInt" => "",
	"Colonia" => "La Floresta",
	"Municipio" => "Puerto Vallarta",
	"Estado" => "Jalisco",
	"Pais" => "Mexico",
	"CodigoPostal" => 48290
));

$i = $db->create("personas", array(
	"idPersona" => '',
	"Nombres" => "Jose Luis",
	"Apellidos"	=> "Padilla",
	"Correo" => "jose_luis@gmail.com",
	"Contrasena" => password_hash("123", PASSWORD_BCRYPT),
	"Empresa" => "",
	"Direccion_idDireccion" => 0000000001,
	"Telefono" => "",
	"RFC" => "",
	"Tipo" => 1 // {0} Admin, {1} Organizador 
));*/
