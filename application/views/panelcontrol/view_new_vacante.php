<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="panel panel-info">
    <div class="panel-body">
        <form class='form-horizontal' id='frmAltaVacante' method='POST' action=''>

            <div class="form-group form-group-sm ">
                <label for="" class="col-sm-3 col-xs-3 control-label" for=''>Puesto</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id='tPuesto' name="tPuesto"
                           placeholder="Nombre del puesto" >
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Funciones principales</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tFunciones"  name="tFunciones" 
                           placeholder="Funciones">
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Escolaridad</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tEscolaridad" name="tEscolaridad" 
                           placeholder="Escolaridad">
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Sueldo mensual bruto</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tSueldo" name="tSueldo"
                           placeholder="Sueldo mensual">
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Prestaciones</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tPrestaciones" name="tPrestaciones" 
                           placeholder="Prestaciones" >
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Horario</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tHorario" name="tHorario" 
                           placeholder="Horario" >
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Idiomas</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tIdioma" name="tIdioma" 
                           placeholder="Idioma"  >
                </div>
            </div>

            <div class="form-group">
                <label for="" class="col-sm-3 col-xs-3 control-label">Viajes</label>
                <div class="col-sm-9 col-xs-9" id='val'>
                    <input type="text" class="form-control input-sm" id="tViajes" name="tViajes" 
                           placeholder="Disponibilidad a viajar" >
                </div>
            </div>
            <input type="hidden" value="<?=$identity?>" id="tIdEmpresa" name="tIdEmpresa">


            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-sm btn-default" id="bAlta">
                        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span> Guardar
                    </button>
                </div>
            </div>
            <input  type="hidden" id="tURL" name="tURL" value="<?php echo site_url('PanelControl/saveInfoVacante'); ?>"/>
        </form>
    </div>
</div>
</div>
<script src="<?= base_url() ?>public/dist/jquery.validate.js"></script>
<script>


    $.validator.setDefaults({
        submitHandler: function () {
            var url = $('#tURL').val(); // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmAltaVacante").serialize(), // serializes the form's elements.
                success: function (data)
                {
                   // $("#alta_empresa").html(data);
                   $("#modal_content").html(data);
                }
            });

            return false;
        }});

    $("#frmAltaVacante").validate({
        rules: {
            tPuesto: "required",
            tFunciones: 'required',
            tEscolaridad: 'required',
            tSueldo: 'required',
            tPrestaciones: 'required',
            tHorario: 'required',
            tIdioma: 'required',
            tViajes: 'required'
        },
        messages: {
            tPuesto: "Ingrese el nombre del puesto",
            tFunciones:'Ingrese las funciones' ,
            tEscolaridad: 'Ingrese la escolaridad',
            tSueldo: 'Ingrese un valor válido para el sueldo',
            tPrestaciones: 'Ingrese las prestaciones',
            tHorario: 'Ingrese el horario',
            tIdioma: 'Ingrese el idioma',
            tViajes: 'Ingres el viaje'
        },
        errorElement: "span",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents("#val").addClass("has-error").removeClass("has-success");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents("#val").addClass("has-success").removeClass("has-error");
        }
    });


</script>
