<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;

/**
* Controlador de la pagina principal
*/
class EventosController extends ControllerManager {

	function __construct() {
		parent::__construct();
	}
	
	public function index($id="undefined"){
		global $db, $helper;
		if($id !== "undefined") {
            $data['page_name'] = "Eventos";
            $data['file_name'] = "eventos/evento";
            $data['salon'] = $db->query("SELECT * from salones where idSalon={$id}");
            $idEvento = $db->query("SELECT Eventos_idEvento from eventos_has_salones where Salones_idSalon={$id}");
            if($idEvento['code'] === "ok" && count($idEvento['response']) > 0) {
                $data['eventos'] = [];
                foreach ($idEvento['response'] as $ie) {
                    $rid = $ie['Eventos_idEvento'];
                    $evento = $db->query("SELECT * from eventos where idEvento={$rid}")['response'][0];
                    if($helper->compareDates($evento['FechaInicio']) < 0 || $helper->compareDates($evento['FechaFin']) > 0) continue;
                    $data['eventos'][] = $evento;
                }
            } else {
                $data['eventos'] = [];
            }
            $this->view("base", $data);
        } else {
            $this->error();
        }
    }
    
    public function misEventos() {
        global $db, $auth, $helper;
        $data['page_name'] = "Mis Eventos";
        $data['file_name'] = "eventos/mis-eventos";
        $idEvento = $db->query("SELECT Eventos_idEvento from personas_has_eventos where Personas_idPersona={$auth->get('idPersona')}");
        if($idEvento['code'] === "ok" && count($idEvento['response']) > 0) {
            $data['eventos'] = [];
            foreach($idEvento['response'] as $ie) {
                $rid = $ie['Eventos_idEvento'];
                $eventos = $db->query("SELECT * from eventos where idEvento={$rid}");
                if(count($eventos['response']) > 0) {
                    foreach($eventos['response'] as $eid => $evento) {
                        $idSalon = $db->query("SELECT Salones_idSalon from eventos_has_salones where Eventos_idEvento={$evento['idEvento']}");
                        if($idSalon['code'] === "ok" && count($idSalon['response']) > 0) {
                            $idSalon = $idSalon['response'][0]['Salones_idSalon'];
                            $osalon = $db->query("SELECT Nombre from salones where idSalon={$idSalon}");
                            if($osalon['code'] === "ok" && count($osalon['response']) > 0) {
                                $salon = $osalon['response'][0]['Nombre'];
                            } else {$salon = "undefined"; }
                        } else {$salon = "undefined"; }
                        $eventos['response'][$eid]['salon'] = $salon;
                    }
                } else {$eventos = [];}
                $data['eventos'][] = $eventos['response'][0];
            }
        } else {
            $data['eventos'] = [];
        }
        $this->view("base", $data);
    }

	public function error() {
		return "Error 404";
	}
}