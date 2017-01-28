<?php
Class Empresa extends CI_Model
{
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

  public function __construct()
          {
                  parent::__construct();
          }

  public function setEmpresa(){
    $query = $this->db->query('SELECT FCEMPRESA FROM TAEMPRESA WHERE FIEMPRESAID=3');
    $row=$query->row();
    $this->empresa= $row->FCEMPRESA;
  }
  public function saveEmpresa(){
    $this->empresa   = $this->input->post('tEmpresa');
    $this->rfc=$this->input->post('tRfc');
    $this->descripcion=$this->input->post('tDescripcion');
    $this->direccion=$this->input->post('tDireccion');
    $this->telefono=$this->input->post('tTelefono');
    $this->responsable=$this->input->post('tResponsable');
    $this->pagina=$this->input->post('tPagina');
    $this->mail=$this->input->post('tMail');
    $this->pais=$this->input->post('tPais');
    $this->estado=$this->input->post('tEstado');
    $this->ciudad=$this->input->post('tRfc');
  }

}
 ?>
