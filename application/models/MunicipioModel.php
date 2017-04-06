<?php

Class MunicipioModel extends CI_Model {

    public $datos;

    public function __construct() {
        parent::__construct();
    }

    public function getMunicipiosByEstado($idPais, $idEstado) {
        $this->db->select('*');
        $this->db->from('TAMUNICIPIOS');
        $this->db->where('FIPAISID', $idPais);
        $this->db->where('FIESTADOID', $idEstado);
        $query = $this->db->get();
        $this->datos = $query->result();
        return $datos;
    }

    public function getMunicipioByEstado($idPais, $idEstado, $idMunicipio) {
        $this->db->select('*');
        $this->db->from('TAMUNICIPIOS');
        $this->db->where('FIPAISID', $idPais);
        $this->db->where('FIESTADOID', $idEstado);
        $this->db->where('FIMUNICIPIOID', $idMunicipio);
        $this->db->limit(1);
        $query = $this->db->get();
        $this->datos = $query->result();
        return $datos;
    }

    public function getMunicipios() {
        $this->db->select('*');
        $this->db->from('TAMUNICIPIOS');
        $query = $this->db->get();
        $this->datos = $query->result();
        return $datos;
    }
}

?>
