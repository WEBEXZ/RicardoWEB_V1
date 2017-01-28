<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PanelControl extends CI_Controller {

	function __construct()
        {
          parent::__construct();
          $this->load->helper(array('form','url'));
          $this->load->library('form_validation');          
          $this->load->model('empresa');

        }
	 
	public function index()
	{		
		$this->load->view('panel_control');              
	}
	public function setVista($valor){          
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		{
                    
			if ($valor=='emp'){
                                $this->empresa->setEmpresa();
				$this->load->view('panelcontrol/view_empresa',array('empresa'=>$this->empresa));
                                
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
            $this->form_validation->set_rules('tEmpresa', 'tEmpresa','required',array('required'=>'ingrese nombre de la empresa'));
            $this->load->view('panelcontrol/view_new_empresa');  
	}
 	public function getDatosEmpresa()
	{
		$this->load->model(empresa_model);
		$this->load->view('panelcontrol/view_datos_empresa',array('empresa' => 'sadasdasd'));
	}
	public function getInformacionForm(){
           
                $this->empresa->saveEmpresa();
		echo 'La empresa: '.$this->empresa->empresa;
            
            
	}

}
