<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PanelControl extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('components');
        $this->load->library('form_validation');

        $this->load->model('empresa');
        $this->load->model('vacante');
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
//                $this->load->view('panelcontrol/view_vacante');
                $this->getVacantes();
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

    public function getVacantes() {
        $idVacante = $this->empresa->identity;
        $result = $this->vacante->getVacantes($idVacante);
        $this->load->view('panelcontrol/view_vacante', array('vacantes' => $result));
    }

    public function getFormNewVacante() {
        $this->empresa->setEmpresa($this->session->usuario);
        $this->load->view('panelcontrol/view_new_vacante', array('identity' => $this->empresa->identity));
    }

    public function saveInfoVacante() {
        $this->vacante->addVacantes();
        echo'<h3>Éxito al insertar</h3>';
    }

    public function viewInfoVacante() {
        $identity = $this->input->post('ident');
        $result = $this->vacante->getInfoVacante($identity);
        $this->load->view('panelcontrol/view_info_vacante', array('vacante' => $result));
    }

    public function editInfoVacante() {
        $identity = $this->input->post('ident');
        $result = $this->vacante->getInfoVacante($identity);
        $this->load->view('panelcontrol/view_edit_vacante', array('vacante' => $result));
    }

    public function deleteInfoVacante($identity) {
        $result = $this->vacante->getInfoVacante($identity);
        $this->load->view('panelcontrol/view_delete_vacante', array('nombre' => $result->FCPUESTO, 'ID' => $result->FIVACANTE));
    }

}
