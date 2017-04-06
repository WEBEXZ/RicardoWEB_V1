<?php

Class PaisModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getPais($idPais) {
        $this->db->select('*');
        $this->db->from('TAPAISES');
        $this->db->where('FIPAISID', $idPais);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getPaises() {
        $this->db->select('*');
        $this->db->from('TAPAISES');
        $query = $this->db->get();
        return $query->result();
    }
}

?>
