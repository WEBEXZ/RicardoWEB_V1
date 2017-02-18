<?php

class Vacante extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getVacantes($idEmpresa) {
        $query = $this->db->query("SELECT * FROM TAVACANTES WHERE FIEMPRESAID=" . $idEmpresa);
        return $query->result();
    }

    public function addVacantes() {
        $data = array(
            'FCPUESTO' => $this->input->post('tPuesto'),
            'FCFUNCIONES' => $this->input->post('tFunciones'),
            'FCESCOLARIDAD' => $this->input->post('tEscolaridad'),
            'FCSUELDO' => $this->input->post('tSueldo'),
            'FCPRESTACIONES' => $this->input->post('tPrestaciones'),
            'FCHORARIO' => $this->input->post('tHorario'),
            'FCIDIOMAS' => $this->input->post('tIdioma'),
            'FIVIAJES' => $this->input->post('tViajes'),
            'FIEMPRESAID' => $this->input->post('tIdEmpresa'),
            'FDFECHAALTA' => '11/02/2017'
        );
        $this->db->insert('TAVACANTES', $data);
    }

    public function getInfoVacante($idVacante) {
        $this->db->select('*');
        $this->db->from('TAVACANTES');
        $this->db->where('FIVACANTE', $idVacante);
        $query = $this->db->get();
        return  $query->row();  
    }

}
