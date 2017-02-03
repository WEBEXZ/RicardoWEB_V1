<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-info">
   <div class="panel-heading">Actualización de información de empresa.</div>
  <div class="panel-body">
      <form class='form-horizontal' id='frmAlta' method='POST' action=''>
          
      <div class="form-group form-group-sm ">
        <label for="" class="col-sm-3 col-xs-3 control-label" for='tEmpresa'>Empresa</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id='tEmpresa' name="tEmpresa" placeholder="Nombre de empresa" value="<?=$empresa->empresa;?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">RFC</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tRfc"  name="tRfc" placeholder="RFC" value="<?=$empresa->rfc;?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Descripción</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tDescripcion" name="tDescripcion" placeholder="Descripción/giro" value="<?=$empresa->descripcion;?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Dirección</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tDireccion" name="tDireccion"placeholder="Dirección" value="<?=$empresa->direccion;?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Teléfono</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tTelefono" name="tTelefono" placeholder="Teléfono" value="<?=$empresa->telefono;?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Responsable</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tResponsable" name="tResponsable" placeholder="Responsable" value="<?=$empresa->responsable;?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Página WEB</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tPagina" name="tPagina" 
                   placeholder="Página WEB" value="<?=$empresa->pagina;?>" >
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Correo</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tMail" name="tMail" 
                   placeholder="Correo contacto" value="<?=$empresa->mail;?>" readonly="readonly">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">País</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control" id="tPais"  name="tPais" placeholder="País" value="<?=$empresa->pais?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Estado</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tEstado" name="tEstado" placeholder="Estado" value="<?=$empresa->estado?>">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Ciudad</label>
        <div class="col-sm-9 col-xs-9" id='val'>
            <input type="text" class="form-control input-sm" id="tCiudad" name="tCiudad"placeholder="Ciudad" value="<?=$empresa->ciudad?>">
        </div>
      </div>
<!--
      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Usuario</label>
        <div class="col-sm-9 col-xs-9">
          <input type="text" class="form-control input-sm" id="" placeholder="Usuario">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Contraseña</label>
        <div class="col-sm-9 col-xs-9">
          <input type="text" class="form-control input-sm" id="" placeholder="Contraseña">
        </div>
      </div>
-->
      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Referencia</label>
        <div class="col-sm-9 col-xs-9">
            <input type="text" class="form-control input-sm" id="" placeholder="Código/Referencia" value="<?=$empresa->membresia?>">
        </div>
      </div>
<!--
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox" id="val">
            <label>
                <input type="checkbox" id="acept" name="acept"> Acepto términos y condiciones de uso.
            </label>
          </div>
        </div>
      </div>-->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-sm btn-default" id="bAlta">
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span> Guardar
      </button>
    </div>
  </div>
    <input value="<?php echo site_url('PanelControl/updateInformacionForm'); ?>" type="hidden" id="tURL"/>
    </form>
    </div>
  </div>
</div>
<script src="<?=base_url()?>public/dist/jquery.validate.js"></script>
<script src="<?=base_url()?>public/js/emValidation.js"></script>
