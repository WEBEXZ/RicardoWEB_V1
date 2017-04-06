<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Recursos extends CI_Controller {
 
	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('PaisModel');
	   $this->load->model('EstadoModel');
	   $this->load->model('MunicipioModel');
	 }
 	
 	 // url/Recursos/getPaises
	 public function getPaises()
	 {
	    $datos = $this->PaisModel->getPaises();
	    header('Content-Type: application/json');
    	echo json_encode($datos);
	 }

	 // url/Recursos/getEstados/1
	 public function getEstados($idPais)
	 {
	    $datos = $this->EstadoModel->getEstadosByPais($idPais);
	    header('Content-Type: application/json');
    	echo json_encode($datos);
	 }

	 // url/Recursos/getMunicipios/1/20
	 public function getMunicipios($idPais, $idEstado)
	 {
	    $datos = $this->MunicipioModel->getMunicipiosByEstado($idPais, $idEstado);
	    header('Content-Type: application/json');
    	echo json_encode($datos);
	 }

}
 
?>
