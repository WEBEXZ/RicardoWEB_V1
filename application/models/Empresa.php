<?php

Class Empresa extends CI_Model {

    public $identity;
    public $empresa;
    public $rfc;
    public $descripcion;
    public $direccion;
    public $telefono;
    public $responsable;
    public $pagina;
    public $mail;
    public $pais;
    public $estado;
    public $ciudad;
    public $membresia;

    public function __construct() {
        parent::__construct();
    }

    public function setEmpresa($usuario) {
        $query = $this->db->query("SELECT * FROM TAEMPRESA WHERE FCEMAIL='" . $usuario . "'");
        $row = $query->row();
        $this->empresa = $row->FCEMPRESA;
        $this->rfc = $row->FCRFC;
        $this->direccion = $row->FCDIRECCION;
        $this->telefono = $row->FCTELEFONO;
        $this->responsable = $row->FCRESPONSABLE;
        $this->pagina = $row->FCPAGINA;
        $this->mail = $row->FCEMAIL;
        $this->pais = $row->FCPAIS;
        $this->estado = $row->FCESTADO;
        $this->ciudad = $row->FCCIUDAD;
        $this->membresia = $row->FCMEMBRESIA;
        $this->identity=$row->FIEMPRESAID;
    }

    public function saveEmpresa() {
        $this->empresa = $this->input->post('tEmpresa');
        $this->rfc = $this->input->post('tRfc');
        $this->descripcion = $this->input->post('tDescripcion');
        $this->direccion = $this->input->post('tDireccion');
        $this->telefono = $this->input->post('tTelefono');
        $this->responsable = $this->input->post('tResponsable');
        $this->pagina = $this->input->post('tPagina');
        $this->mail = $this->input->post('tMail');
        $this->pais = $this->input->post('tPais');
        $this->estado = $this->input->post('tEstado');
        $this->ciudad = $this->input->post('tCiudad');
    }

    public function updateEmpresa() {
        $data = array(
            'FCEMPRESA' => $this->input->post('tEmpresa'),
            'FCRFC' => $this->input->post('tRfc'),
            'FCDIRECCION' => $this->input->post('tDireccion'),
            'FCTELEFONO' => $this->input->post('tTelefono'),
            'FCRESPONSABLE' => $this->input->post('tResponsable'),
            'FCPAGINA' => $this->input->post('tPagina'),
            'FCPAIS' => $this->input->post('tPais'),
            'FCESTADO' => $this->input->post('tEstado'),
            'FCCIUDAD' => $this->input->post('tCiudad'));
        
        $this->db->update('TAEMPRESA', $data, array('FCEMAIL' => $this->input->post('tMail')));
    }

}

?>
