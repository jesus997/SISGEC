<?php
namespace Jess\Messenger;
use Jess\Messenger\ControllerManager;
use Dompdf\Dompdf;

class OrganizadorController extends ControllerManager {

	function __construct() {
		parent::__construct();
	}
	
	public function index(){
		global $db;
		$data['page_name'] = "Organizadores";
		$data['file_name'] = "organizadores/lista";
		$data['organizadores'] = $db->query("SELECT * from personas WHERE Tipo=1")['response'];
		$this->view("base", $data);
    }

    public function nuevo() {
        $data['page_name'] = "Nuevo Organizador";
        $data['file_name'] = "organizadores/nuevo";
        $this->view("base", $data);
    }

    private function getDireccionByData($data) {
        global $db;
        $inputs = "";
        foreach ($data as $key => $value) {
            $inputs .= "{$key}='{$value}' AND ";
        }
        $inputs = rtrim($inputs," AND");

        $eventsRow = $db->query("SELECT * FROM direccion WHERE {$inputs}");
        if(count($eventsRow['response']) > 0) {
            return $eventsRow['response'][0];
        }
        return [];
    }

    public function guardar() {
        global $db, $helper;
        $datos = $this->post_params();

        $direccion = $datos['direccion'];
        unset($datos['direccion']);

        $db->create("direccion", $direccion);

        $idDireccion = $this->getDireccionByData($direccion);

        if(count($idDireccion) > 0) {
            $datos['Direccion_idDireccion'] = $idDireccion['idDireccion'];
            $datos['Tipo'] = 1;
            $datos['Contrasena'] = password_hash($datos['Contrasena'], PASSWORD_BCRYPT);
            $db->create("personas", $datos);
            header("Location: ".$helper->url("/organizadores"));
        } else {
            $helper->dd($db->getErrors());
            die();
        }
    }

    public function editar($id = "undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $data['page_name'] = "Editar Organizador";
            $data['file_name'] = "organizadores/editar";
            $org = $db->query("SELECT * from personas where idPersona={$id}");
            if(count($org['response']) > 0) {
                $org = $org['response'][0];
            }
            $direccion = $db->query("SELECT * FROM direccion WHERE idDireccion={$org['Direccion_idDireccion']}");
            if(count($direccion['response']) > 0) {
                $org['direccion'] = $direccion['response'][0];
            }
            $data['org'] = $org;
            $this->view("base", $data);
        } else {
            $this->error();
        }
    }

    private function getIdDirByUserID($id) {
        global $db;
        $org = $db->query("SELECT * from personas where idPersona={$id}");
        if(count($org['response']) > 0) {
            $org = $org['response'][0];
            return $org['Direccion_idDireccion'];
        }
        return -1;
    }

    public function saveEditar($id = "undefined") {
        global $db, $helper;
        $datos = $this->post_params();
        if(empty($datos['Contrasena'])) {
            unset($datos['Contrasena']);
        }
        $direccion = $datos['direccion'];
        unset($datos['direccion']);

        $dirId = $this->getIdDirByUserID($id);
        if($dirId >= 0) {
            $db->update("direccion", "idDireccion", $dirId, $direccion);
            $db->update("personas", "idPersona", $id, $datos);
            header("Location: ".$helper->url("/organizadores"));
        }

        $helper->dd($db->getErrors());die();
    }

    public function borrar($id = "undefined") {
        global $db, $helper;
        if($id !== "undefined") {
            $dirId = $this->getIdDirByUserID($id);
            if($dirId >= 0) {
                $db->delete("direccion", "idDireccion", $dirId);
            }
            $db->delete("personas", "idPersona", $id);
            header("Location: ".$helper->url("/organizadores"));
        } else {
            $this->error();
        }
    }
    
    public function getStringDirByID($id) {
        global $db, $helper;
        if($id !== "undefined") {
            $dir = $db->query("SELECT * FROM direccion where idDireccion={$id}");
            if(count($dir['response']) > 0) {
                $dir = $dir['response'][0];
                $strDir = $dir['Calle'];
                if(!empty($dir['NumeroExt'])) {
                    $strDir .= " #".$dir['NumeroExt']; 
                }
                if(!empty($dir['NumeroInt'])) {
                    $strDir .= " # Int. ".$dir['NumeroInt']; 
                }
                if(!empty($dir['CodigoPostal'])) {
                    $strDir .= " CP. ".$dir['CodigoPostal']; 
                }
                $strDir .= " ".$dir['Colonia'].", ".$dir['Municipio'].", ".$dir['Estado'].", ".$dir['Pais'];
                return $strDir;
            }
        }
        return "undefined";
    }

    public function generarTablaOrganizadores($orgs) {
        $tabla = '<table border="1">
					<tr>
						<th>Num</th>
						<th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Empresa</th>
                        <th>RFC</th>
					</tr>';
		foreach ($orgs as $key => $org) {
			$tabla .= '<tr>
							<td>'.($key+1) .'</td>
							<td>'.$org['Nombres']." ".$org['Apellidos'] .'</td>
							<td>'.$org['Correo'] .'</td>
                            <td>'.$org['Telefono'] .'</td>
                            <td>'.$org['Empresa'] .'</td>
                            <td>'.$org['RFC'] .'</td>
						</tr>';
		}
		$tabla .= "</table>";
		return $tabla;
    }

    public function imprimirOrganizadores() {
        global $helper, $db;
        $orgs = $db->query("SELECT * from personas WHERE Tipo=1");
        if($orgs['code'] === "ok" && count($orgs['response']) > 0) {
            $orgs = $orgs['response'];
        } else {$orgs = []; }
        $dompdf = new Dompdf();
		$dompdf->loadHtml($this->generarTablaOrganizadores($orgs));
        $dompdf->render();
        $dompdf->stream("Organizadores-".date("m-Y").".pdf");
    }

	public function error() {
		return "Error 404";
	}
}