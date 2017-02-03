<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PanelControl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('empresa');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $this->empresa->setEmpresa($this->session->usuario);
            $this->load->view('panel_control', array('empresa' => $this->empresa));
        } else {
            redirect(base_url());
        }
    }

    public function setVista($valor) {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->empresa->setEmpresa($this->session->usuario);

            if ($valor == 'emp') {
                $this->load->view('panelcontrol/view_empresa', array('empresa' => $this->empresa));
            } elseif ($valor == 'vac') {
                $this->load->view('panelcontrol/view_vacante');
            } elseif ($valor == 'btal') {
                $this->load->view('panelcontrol/view_busca_talento');
            } else {
                $this->load->view('panelcontrol/view_none');
            }
        }
    }

    public function getEmpresa() {
        $this->load->view('errors/view_empresa');
    }

    public function getFormNewEmpresa() {
        $this->empresa->setEmpresa($this->session->usuario);
        $this->load->view('panelcontrol/view_new_empresa', array('empresa' => $this->empresa));
    }
    private function muestraInformacionEmpresa() {
        $this->empresa->setEmpresa($this->session->usuario);
        $this->load->view('panelcontrol/view_datos_empresa', array('empresa' => $this->empresa));
    }

    public function getDatosEmpresa() {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->muestraInformacionEmpresa();
        }
    }

    public function updateInformacionForm() {
        if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $this->empresa->updateEmpresa();
            $this->muestraInformacionEmpresa();
        }
    }
//    *********************************************************************************************
//     Sección de vacantes
//    *********************************************************************************************
    public function getFormNewVacante() {
        $this->load->view('panelcontrol/view_new_vacante');
    }

}
