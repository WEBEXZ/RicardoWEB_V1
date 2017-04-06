<?php

Class MunicipioModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMunicipiosByEstado($idPais, $idEstado) {
        $this->db->select('*');
        $this->db->from('TAMUNICIPIOS');
        $this->db->where('FIPAISID', $idPais);
        $this->db->where('FIESTADOID', $idEstado);
        $query = $this->db->get();
        return $query->result();
    }

    public function getMunicipioByEstado($idPais, $idEstado, $idMunicipio) {
        $this->db->select('*');
        $this->db->from('TAMUNICIPIOS');
        $this->db->where('FIPAISID', $idPais);
        $this->db->where('FIESTADOID', $idEstado);
        $this->db->where('FIMUNICIPIOID', $idMunicipio);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getMunicipios() {
        $this->db->select('*');
        $this->db->from('TAMUNICIPIOS');
        $query = $this->db->get();
        return $query->result();
    }
}

?>
