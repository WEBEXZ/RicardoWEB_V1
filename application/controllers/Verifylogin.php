<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->library('session');
    }

    function valida_login() {
        //This method will have the credentials validation
        $this->load->library('form_validation');


        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

        if ($this->form_validation->run() == FALSE) {
            //Si no existe te regresa a la página de logueo con el error
            $data = array();
            $data['variable'] = "El usuario o contraseña son inválidos";
            print $this->load->view('login', $data, true);
        } else {
            //Te muestra la página principal, solo si estas logueado.
            if ($this->session->tipo == 1) {
                redirect(base_url().'candidatos', 'refresh');
                
            } else {
                redirect(base_url().'panelcontrol', 'refresh');
            }
        }
    }

    function check_database() {
        //Si pasa las válidaciones, buscan en la base de datos si existe.

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if (isset($_REQUEST['cazatalentos'])) {
            $cazatalentos = "0";
        } else {
            $cazatalentos = "1";
        }
        //consulta en la base de datos
        $result = $this->user->login($username, $password, $cazatalentos);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->FCPASSWORD,
                    'Username' => $row->FCEMAIL
                );

                $this->session->set_userdata('logged_in', $sess_array);
                $this->session->set_userdata('usuario', $row->FCEMAIL);
                $this->session->set_userdata('tipo', $cazatalentos);
                $this->session->set_userdata('identificador',str_replace(".", "",$row->FCEMAIL));
            }
            return TRUE;
        } else {
            // $this->form_validation->set_error_delimiters('<div class="text-center">','</div>');
            // $this->form_validation->set_message('check_database', 'El usuario o contraseña son inválidos');

            return false;
        }
    }

    function valida_email() {
        //This method will have the credentials validation
        $this->load->library('form_validation');

        $this->form_validation->set_rules('emailperdido', 'Emailperdido', 'trim|required|callback_check_email');

        if ($this->form_validation->run() == FALSE) {
            //Si no existe te regresa a la página de logueo con el error
            $data = array();
            $data['vemail'] = "Verificar el correo electrónico";
            print $this->load->view('login', $data, true);
        } else {
            //Manda correo y regresa mensaje de exitoso.
            // $this->form_validation->set_message('Correo enviado');
            $this->load->view('login');
        }
    }

    function check_email() {
        $this->load->library('session');
        //Si pasa las válidaciones, buscan en la base de datos si existe.

        $emailperdido = $this->input->post('emailperdido');
        $defaultpass = "1";
        if (isset($_REQUEST['cazatalentos2'])) {
            $cazatalentos = "0";
        } else {
            $cazatalentos = "1";
        }

        //consulta en la base de datos
        $result = $this->user->valida_correo($emailperdido, $defaultpass, $cazatalentos);

        if ($result) {
            return TRUE;
        } else {
            return false;
        }
    }

    public function insert_user() {
        if (isset($_REQUEST['basica'])) {
            $membresia = "Básica";
        } elseif (isset($_REQUEST['completa'])) {
            $membresia = "Completa";
        }

        $data = array(
            'FCEMPRESA' => $this->input->post('empresa'),
            'FCRFC' => $this->input->post('rfc'),
            'FCGIRO' => $this->input->post('giro'),
            'FCPASSWORD' => $this->input->post('password'),
            'FCDIRECCION' => $this->input->post('direccion'),
            'FCTELEFONO' => $this->input->post('telefono'),
            'FCRESPONSABLE' => $this->input->post('responsable'),
            'FCPAGINA' => $this->input->post('pagina'),
            'FCEMAIL' => $this->input->post('email'),
            'FCPAIS' => $this->input->post('pais'),
            'FCESTADO' => $this->input->post('estado'),
            'FCCIUDAD' => $this->input->post('ciudad'),
            'FCMEMBRESIA' => $membresia,
            'FICONTINTFALLIDOS' => 0,
            'FISTATUS' => 1
        );
        $this->db->insert("TAEMPRESA", $data);
    }

    function confirmaCerrarSesion() {
        $this->load->view('session/view_end_session');
    }

    function cerrarSesion() {
        $this->session->sess_destroy();
    }

}

?>