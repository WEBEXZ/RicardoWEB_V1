<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidatos extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('components');
        $this->load->library('form_validation');

        $this->load->model('candidatoModel');
    }

    function index() {
        $this->load->view('candidato/index', array('usuario' => $this->session->usuario));
    }

    function getInfo() {
        $this->candidatoModel->setCandidato($this->session->usuario);
        $this->load->view('candidato/view_info_candidato', array('candidato' => $this->candidatoModel->info));
    }
    function uploadImg(){
        $this->load->view('candidato/view_upload_image');
    }

}
