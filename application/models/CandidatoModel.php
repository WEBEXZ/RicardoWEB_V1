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

    public function saveImg() {
        if (is_array($_FILES)) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                $sourcePath = $_FILES['userImage']['tmp_name'];
                $targetPath = base_url().'public/userImg/' . $_FILES['userImage']['name'];
                if (move_uploaded_file($sourcePath, $targetPath)) {
                    return  $targetPath;                 
                }
            }
        }
    }

}
