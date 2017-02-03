<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h3>Vacantes disponibles</h3>
<div clas="row">
    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
        <div class="list-group">
            <a href="#" class="list-group-item" id="nuevoOpt">Nuevo</a>
            <a href="#" class="list-group-item">Editar</a>
            <a href="#" class="list-group-item">Guardar</a>
            <a href="#" class="list-group-item disabled"></a>
            <a href="#" class="list-group-item">Eliminar</a>
        </div>
    </div>
    <div id="vacante_content" class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Puesto</td>
                    <td>**********</td>
                </tr>
                <tr>
                    <td>Funciones principales</td>
                    <td>**********</</td>
                </tr>
                <tr>
                    <td>Escolaridad/giro</td>
                    <td>**********</td>
                </tr>
                <tr>
                    <td>Sueldo mensual bruto</td>
                    <td>**********</td>
                </tr>
                <tr>
                    <td>Prestaciones</td>
                    <td>**********</td>
                </tr>
                <tr>
                    <td>Horario</td>
                    <td>**********</td>
                </tr>
                <tr>
                    <td>Idiomas</td>
                    <td>**********</td>
                </tr>
                <tr>
                    <td>Viajes</td>
                    <td>**********</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-2 col-md-offset-10">
        <div class="input-group">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                </button>
            </span>
            <input type="text" class="form-control" placeholder="..." style=" text-align: center;">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"> </span>
                </button>
            </span>
        </div>
    </div>
</div>

<script type="text/javascript" >
$('#nuevoOpt').click(function(){
    $('#myModalLabel').text('Información de vacantes');  
    
      var request = $.ajax({
                method: 'POST',
                url: "<?= base_url()?>panelcontrol/getFormNewVacante"
            });
            request.done(function (msg) {
                $("#modal_content").html(msg);
                $('#myModal').modal('show'); 
            });
            request.fail(function (jqXHR, textStatus) {
                $("#modal_content").empty();
            });
    
});
</script>













