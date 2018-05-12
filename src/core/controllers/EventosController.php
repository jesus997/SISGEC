<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Dompdf\Dompdf;

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
    
    private function getMisEventos() {
        global $db, $auth, $helper;
        $idEvento = $db->query("SELECT Eventos_idEvento from personas_has_eventos where Personas_idPersona={$auth->get('idPersona')}");
        if($idEvento['code'] === "ok" && count($idEvento['response']) > 0) {
            $deventos = [];
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
                $deventos[] = $eventos['response'][0];
            }
        } else {
            $deventos = [];
        }
        return $deventos;
    }

    public function misEventos() {
        global $db, $auth, $helper;
        $data['page_name'] = "Mis Eventos";
        $data['file_name'] = "eventos/mis-eventos";
        $data['eventos'] = $this->getMisEventos();
        $this->view("base", $data);
    }

    public function generarTablaEventos($eventos) {
        $tabla = '<table border="1">
					<tr>
						<th>Num</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Fecha Inicio</th>
						<th>Fecha Fin</th>
					</tr>';
		foreach ($eventos as $key => $evento) {
			$tabla .= '<tr>
							<td>'.($key+1) .'</td>
							<td>'.$evento['Nombre'] .'</td>
							<td>'.$evento['Tipo'] .'</td>
							<td>'.$evento['FechaInicio'] .'</td>
							<td>'.$evento['FechaFin'] .'</td>
						</tr>';
		}
		$tabla .= "</table>";
		return $tabla;
    }

    public function imprimirMisEventos() {
        global $helper;
        $eventos = $this->getMisEventos();
        $dompdf = new Dompdf();
		$dompdf->loadHtml($this->generarTablaEventos($eventos));
        $dompdf->render();
        $dompdf->stream("Mis-Eventos-".date("m-Y").".pdf");
    }

    public function nuevoEvento() {
        global $db;
        $data['page_name'] = "Nuevo Evento";
        $data['file_name'] = "eventos/nuevo";
        $data['salones'] = $db->query("SELECT * FROM salones")['response'];
        $this->view("base", $data);
    }

    private function getEventoByData($data) {
        global $db;
        $inputs = "";
        foreach ($data as $key => $value) {
            $inputs .= "{$key}='{$value}' AND ";
        }
        $inputs = rtrim($inputs," AND");

        $eventsRow = $db->query("SELECT * FROM eventos WHERE {$inputs}");
        if(count($eventsRow['response']) > 0) {
            return $eventsRow['response'][0];
        }
        return [];
    }

    public function guardarEvento() {
        global $db, $helper, $auth;
        $datos = $this->post_params();
        $idSalon = $datos['idSalon'];
        unset($datos['idSalon']);
        $datos['FechaInicio'] .= ":00";
        $datos['FechaFin'] .= ":00";
        $result = $db->create("eventos", $datos);
        $datos2['Personas_idPersona'] = $auth->get("idPersona");
        $idEvento = $this->getEventoByData($datos);
        if(count($idEvento) > 0) {
            $datos2['Eventos_idEvento'] = $idEvento['idEvento'];
            $db->create("personas_has_eventos", $datos2);
            $datos3['Eventos_idEvento'] = $idEvento['idEvento'];
            $datos3['Salones_idSalon'] = $idSalon;
            $db->create("eventos_has_salones", $datos3);
        }
        header("Location: ".$helper->url("/mis-eventos"));
    }

    private function getSalonByIdEvento($id) {
        global $db;
        $salon = $db->query("SELECT * FROM eventos_has_salones WHERE Eventos_idEvento={$id}");
        if(count($salon['response']) > 0) {
            $idSalon = $salon['response'][0]['Salones_idSalon'];
            $salon = $db->query("SELECT * FROM salones WHERE idSalon={$idSalon}");
            if(count($salon['response']) > 0) {
                return $salon['response'][0];
            }
        }
        return [];
    }

    public function editarEvento($id="undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $data['page_name'] = "Editar Evento";
            $data['file_name'] = "eventos/editar";
            $evento = $db->query("SELECT * FROM eventos WHERE idEvento={$id}")['response'];
            $data['evento'] = count($evento) > 0 ? $evento[0] : [];
            
            $data['salones'] = $db->query("SELECT * from salones")['response'];
            $data['salon'] = $this->getSalonByIdEvento($id);

            $this->view("base", $data);
        } else {
            $this->error();
        }
    }

    public function eGuardarEvento($id = "undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $datos = $this->post_params();
            $idOutSalon = $this->getSalonByIdEvento($id);
            $idSalon = $datos['idSalon'];
            unset($datos['idSalon']);
            $data2['Salones_idSalon'] = $idSalon;
            $data2['Eventos_idEvento'] = $id;
            $result = $db->update("eventos", "idEvento", $id, $datos);
            $db->query("DELETE FROM eventos_has_salones WHERE Eventos_idEvento={$id} AND Salones_idSalones={$idOutSalon}");
            $db->create("eventos_has_salones", $data2);
            header("Location: ".$helper->url("/mis-eventos"));
        } else {
            $this->error();
        }
    }

    public function borrarEvento($id="undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $db->delete("eventos_has_salones", "Eventos_idEvento", $id);
            $db->delete("personas_has_eventos", "Eventos_idEvento", $id);
            $db->delete("eventos", "idEvento", $id);
            header("Location: ".$helper->url("/mis-eventos"));
        } else {
            $this->error();
        }
    }

	public function error() {
		return "Error 404";
	}
}