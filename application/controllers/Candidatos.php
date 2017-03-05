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
    private function getUrlImageUser(){
        $userImage = realpath(APPPATH . '../public/userImg') . '/' . $this->session->identificador . '.jpg';

        if (!file_exists($userImage)) {
            $userImage = base_url() . 'public/img/vacante.jpg';
        } else {
            $userImage = base_url() . 'public/userImg/' . $this->session->identificador . '.jpg';
        }
        return $userImage;
    }
    function getInfo() {
        $this->candidatoModel->setCandidato($this->session->usuario);
        $this->load->view('candidato/view_info_candidato', array('candidato' => $this->candidatoModel->info,
            'user_image' => $this->getUrlImageUser()));
    }

    function uploadImg() {
        $this->load->view('candidato/view_upload_image');
    }

    function saveImgUser() {
        $newName = $this->session->identificador;
        $data = '';
        $config['upload_path'] = realpath(APPPATH . '../public/userImg');
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 1000;
        $config['max_width'] = 480;
        $config['max_height'] = 480;
        $config['file_name'] = $newName;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('userImage')) {

            $data = array('result' => 'exito', 'value' => base_url() . 'public/userImg/' . $this->session->identificador . '.jpg');
        } else {
            $data = array('result' => 'error', 'value' => $this->upload->display_errors());
        }
        return $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    function descripcionTalento() {
        $this->load->view('candidato/view_descrip_talento');
    }

    function prevVisualizacionTalento() {
        $this->candidatoModel->setCandidato($this->session->usuario);
        $this->load->view('candidato/view_previsualizacion_info_candidato',array('candidato' => $this->candidatoModel->info,
            'user_image' => $this->getUrlImageUser()));
    }

}
