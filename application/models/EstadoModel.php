<?php

Class EstadoModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getEstadosByPais($idPais) {
        $this->db->select('*');
        $this->db->from('TAESTADOS');
        $this->db->where('FIPAISID', $idPais);
        $query = $this->db->get();
        return $query->result();
    }

    public function getEstadoByPais($idPais, $idEstado) {
        $this->db->select('*');
        $this->db->from('TAESTADOS');
        $this->db->where('FIPAISID', $idPais);
        $this->db->where('FIESTADOID', $idEstado);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getEstados() {
        $this->db->select('*');
        $this->db->from('TAESTADOS');
        $query = $this->db->get();
        return $query->result();
    }
}

?>
