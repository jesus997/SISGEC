<?php
namespace Jess\Messenger;
use Jess\Messenger\ModelManager;

/**
* Modelo de los reportes medicos
*/
class Record extends ModelManager {

	static protected $table = "records";
	static protected $id = "id";

	public function getReports() {
		
	}
}