<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-info">
   
  <div class="panel-body">
      <form class='form-horizontal' id='frmAlta' method='POST' action=''>
          
      <div class="form-group form-group-sm ">
        <label for="" class="col-sm-3 col-xs-3 control-label" for='tEmpresa'>Puesto</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id='tEmpresa' name="tEmpresa"
                   placeholder="Nombre de empresa" >
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Funciones principales</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tRfc"  name="tRfc" placeholder="RFC">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Escolaridad</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tDescripcion" name="tDescripcion" placeholder="Descripción/giro">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Sueldo mensual bruto</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tDireccion" name="tDireccion"placeholder="Dirección">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Prestaciones</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tTelefono" name="tTelefono" placeholder="Teléfono" >
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Horario</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tResponsable" name="tResponsable" placeholder="Responsable" >
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Idiomas</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tPagina" name="tPagina" 
                   placeholder="Página WEB"  >
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Viajes</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tMail" name="tMail" 
                   placeholder="Correo contacto" >
        </div>
      </div>

  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-sm btn-default" id="bAlta">
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span> Guardar
      </button>
    </div>
  </div>
    <input  type="hidden" id="tURL"/>
    </form>
    </div>
  </div>
</div>
<script src="<?=base_url()?>public/dist/jquery.validate.js"></script>
<script src="<?=base_url()?>public/js/emValidation.js"></script>
