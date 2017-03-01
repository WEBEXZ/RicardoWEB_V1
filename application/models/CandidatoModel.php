<?php
Class CandidatoModel extends CI_Model {

    public $info;

    public function __construct() {
        parent::__construct();
    }

    public function setCandidato($usuario) {
        $this->db->select('*');
        $this->db->from('TAUSUARIOS');
        $this->db->where('FCEMAIL', $usuario);
        $this->db->limit(1);
        
        $query = $this->db->get();
        $this->info = $query->row();
    }

}
