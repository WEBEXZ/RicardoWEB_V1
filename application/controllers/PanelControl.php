<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PanelControl extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('panel_control');
	}
	public function setVista($valor){

		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{
			if ($valor=='emp'){
				$this->load->view('panelcontrol/view_empresa',array('empresa'=>'jjj'));
			}elseif($valor=='vac'){
				$this->load->view('panelcontrol/view_vacante');
			}elseif($valor=='btal'){
				$this->load->view('panelcontrol/view_busca_talento');
			}
			else{
				$this->load->view('panelcontrol/view_none');
			}
		}
	}
	public function getEmpresa()
	{
		$this->load->view('errors/view_empresa');
	}
	public function getFormNewEmpresa(){
		$this->load->view('panelcontrol/view_new_empresa');
	}
 	public function getDatosEmpresa()
	{
		$this->load->model(empresa_model);
		$this->load->view('panelcontrol/view_datos_empresa',array('empresa' => 'sadasdasd'));
	}
	public function getInformacionForm(){

		$nombre = $this->input->post('nEmpresa');
		echo $nombre;
	}

}
