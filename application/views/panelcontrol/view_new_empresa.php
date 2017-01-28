<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-default">
   <div class="panel-heading">Ingrese información de empresa</div>
  <div class="panel-body">
     

      <form class='form-horizontal' id='frmAlta' method='POST' action=''>
          
      <div class="form-group form-group-sm ">
        <label for="" class="col-sm-3 col-xs-3 control-label" for='tEmpresa'>Empresa</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id='tEmpresa' name="tEmpresa" placeholder="Nombre de empresa">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">RFC</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="tRfc"  name="tRfc" placeholder="RFC">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Descripción</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="tDescripcion" name="tDescripcion" placeholder="Descripción/giro">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Dirección</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="" name="tDireccion"placeholder="Dirección">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Teléfono</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="" name="tTelefono" placeholder="Teléfono">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Responsable</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="" name="tResponsable" placeholder="Responsable">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Página WEB</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="" name="tPagina" placeholder="Página WEB">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Correo</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control input-sm" id="" name="tMail" placeholder="Correo contacto">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">País</label>
        <div class="col-sm-9 col-xs-9" id='val'>
          <input type="text" class="form-control" id=""  name="tPais" placeholder="País">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Estado</label>
        <div class="col-sm-9 col-xs-9">
          <input type="text" class="form-control input-sm" id="" name="tEstado" placeholder="Estado">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Ciudad</label>
        <div class="col-sm-9 col-xs-9">
          <input type="text" class="form-control input-sm" id="" name="tCiudad"placeholder="Ciudad">
        </div>
      </div>

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

      <div class="form-group">
        <label for="" class="col-sm-3 col-xs-3 control-label">Referencia</label>
        <div class="col-sm-9 col-xs-9">
          <input type="text" class="form-control input-sm" id="" placeholder="Código/Referencia">
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Acepto términos y condiciones de uso.
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-sm btn-default" id="bAlta">
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span> Guardar
      </button>
    </div>
  </div>
    </form>
    </div>
  </div>
</div>
<script src="<?=base_url()?>public/dist/jquery.validate.js"></script>
<script type='text/javascript'>
                       /*  	$.validator.setDefaults( {
			submitHandler: function () {
				 var url = "<?php echo site_url('PanelControl/getInformacionForm'); ?>"; // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#frmAlta").serialize(), // serializes the form's elements.
             success: function(data)
             {
                 alert(JSON.stringify(data)); // show response from the php script.
             }
           });

     return false;
			}});*/
$(document).ready(function(){
/*
$("#frmAlta").submit(function(e) {
      var url = "<?php echo site_url('PanelControl/getInformacionForm'); ?>"; // the script where you handle the form input.
      $.ajax({
             type: "POST",
             url: url,
             data: $("#frmAlta").serialize(), // serializes the form's elements.
             success: function(data)
             {
                 alert(JSON.stringify(data)); // show response from the php script.
             }
           });

      e.preventDefault(); // avoid to execute the actual submit of the form.
  });*/
   
  
  $("#frmAlta" ).validate( {
				rules: {
					tEmpresa: "required",
                                        tRfc:'required',
                                        tDescripcion:'required'
				},
				messages: {
					tEmpresa: "Ingrese el nombre de la empresa.",
                                        tRfc:'Ingrese el RFC',
                                        tDescripcion:'Ingrese descripción o giro.'
				},
				errorElement: "span",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( "#val" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( "#val" ).addClass( "has-success" ).removeClass( "has-error" );
				},
                                success:function(){
                                    
                                    
                                }
			} );
                        
                        
        
                        
                    });
  

</script>
