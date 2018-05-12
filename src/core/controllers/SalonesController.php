<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Dompdf\Dompdf;

class SalonesController extends ControllerManager {

	function __construct() {
		parent::__construct();
    }

    public function index() {
        global $db;
        $data['page_name'] = "Salones";
        $data['file_name'] = "salones/salones";
        $salones = $db->query("SELECT * from salones");
        if($salones['code'] === "ok" && count($salones['response']) > 0) {
            $data['salones'] = $salones['response'];
        }
        $this->view("base", $data);
    }

    public function nuevo() {
        $data['page_name'] = "Nuevo Salon";
        $data['file_name'] = "salones/nuevo";
        $this->view("base", $data);
    }

    public function guardar() {
        global $db, $helper;
        $datos = $this->post_params();
        $datos['imagen'] = '{local}/assets/imagenes/esmeralda2.jpg';
        $result = $db->create("salones", $datos);
        header("Location: ".$helper->url("/salones"));
    }

    public function editar($id = "undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $data['page_name'] = "Editar Salon";
            $data['file_name'] = "salones/editar";
            $salon = $db->query("SELECT * from salones where idSalon={$id}");
            if(count($salon['response']) > 0) {
                $salon = $salon['response'][0];
            }
            $data['salon'] = $salon;
            $this->view("base", $data);
        } else {
            $this->error();
        }
    }

    public function editarGuardar($id = "undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $datos = $this->post_params();
            $result = $db->update("salones", "idSalon", $id, $datos);
            header("Location: ".$helper->url("/salones"));
        } else {
            $this->error();
        }
    }

    public function borrar($id = "undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $eventos = $this->getEventos($db, $id);
            $db->delete("eventos_has_salones", "Salones_idSalon", $id);
            $db->delete("salones", "idSalon", $id);
            foreach($eventos as $evento) {
                $idEvento = $evento['idEvento'];
                $db->delete("personas_has_eventos", "Eventos_idEvento", $idEvento);
                $db->delete("eventos", "idEvento", $idEvento);
            }
            header("Location: ".$helper->url("/salones"));
        } else {
            $this->error();
        }
    }

    private function getEventos($db, $idSalon) {
        $eventos = $db->query("SELECT * from eventos_has_salones WHERE Salones_idSalon={$idSalon}");
        if(count($eventos['response']) > 0) {
            return $eventos['response'];
        }
        return [];
    }

    public function generarTablaSalones($eventos) {
        $tabla = '<table border="1">
					<tr>
						<th>Num</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Capacidad</th>
						<th>Tipo</th>
					</tr>';
		foreach ($eventos as $key => $evento) {
			$tabla .= '<tr>
							<td>'.($key+1) .'</td>
							<td>'.$evento['Nombre'] .'</td>
							<td>'.$evento['Descripcion'] .'</td>
							<td>'.$evento['Capacidad'] .'</td>
							<td>'.$evento['Tipo'] .'</td>
						</tr>';
		}
		$tabla .= "</table>";
		return $tabla;
    }

    public function imprimirSalones() {
        global $helper, $db;
        $salones = $db->query("SELECT * from salones");
        if($salones['code'] === "ok" && count($salones['response']) > 0) {
            $salones = $salones['response'];
        } else {$salones = []; }
        $dompdf = new Dompdf();
		$dompdf->loadHtml($this->generarTablaSalones($salones));
        $dompdf->render();
        $dompdf->stream("Salones-".date("m-Y").".pdf");
    }

    public function error() {
        return "Error: core\controllers\SalonesController.php";
    }
}