<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Recursos extends CI_Controller {
 
	 public function __construct()
	 {
	   parent::__construct();
	   $this->load->model('PaisModel');
	   $this->load->model('EstadoModel');
	   $this->load->model('MunicipioModel');
	 }
 
	 public function getPaises()
	 {
	    $datos = $this->PaisModel->getPaises();
	    header('Content-Type: application/json');
    	echo json_encode($datos);
	 }
}
 
?>