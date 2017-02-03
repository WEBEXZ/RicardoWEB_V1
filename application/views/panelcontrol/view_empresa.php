<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
.logo{
  width: 100%;
  height: 250px;
  border: solid 1px;
}
</style>
<hr>
    <div class="row" id="">
  <div class="col-md-7 col-sm-7 col-xs-7" id="alta_empresa">
    <?php $this->load->view('panelcontrol/view_datos_empresa'); ?>
  </div>
  <div class="col-md-5 col-sm-5 col-xs-5">
    <div class="row">
      <div class="panel panel-primary">
         <div class="panel-heading">Logo empresa</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-6 col-md-3 col-md-offset-3">
              <a href="" class="thumbnail">
                <img src="<?=base_url()?>public/img/company.jpg" alt="...">
              </a>
            </div>
          </div>
          <div class="row">
            <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar archivo
                </button>
              </span>
              <input type="text" class="form-control" placeholder="..." style=" text-align: center;">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                  <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"> </span> Subir logo
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>

    </div>
    <hr>

    <div class="row">
      <div class="btn-group" role="group" aria-label="...">
        <button onclick="newEmpresa()" type="button" class="btn btn-sm btn-default">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true" > </span> Editar
        </button>
        <button  onclick="defaultDataEmpresa()"type="button" class="btn  btn-sm btn-default">
          <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"> </span> Cancelar
        </button>
        <!--
        <button type="button" class="btn btn-sm btn-default">
          <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span> Guardar
        </button>
      -->
      </div>
    </div>
  </div>

</div>
