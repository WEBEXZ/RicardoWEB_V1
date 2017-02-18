<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h3>Vacantes disponibles</h3>
<div class="row">
    <div class="col-lg-2 col-lg-offset-10 col-md-2 col-md-offset-10">
        <button class="btn btn-default" id="nuevoOpt">
            <span class="glyphicon glyphicon-plus-sign"></span> Agregar vacante
        </button>
    </div>
</div>
<div class="row"> 
    <div id="vacante_content" class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table class="table table-hover">    
            <thead>
                <tr>
                    <th>Puesto</th>
                    <th>Funciones</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($vacantes as $row) {
                    $visualizar = bootStrapButtonVacante($row->FIVACANTE, 'ver');
                    $editar = bootStrapButtonVacante($row->FIVACANTE, 'editar');
                    $eliminar = bootStrapButtonVacante($row->FIVACANTE, 'eliminar');
                    $botones = '<div class="btn-group" role="group" aria-label="">' . $visualizar . $editar . $eliminar . '</div>';
                    $txt = sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>', $row->FCPUESTO, $row->FCFUNCIONES, $botones);
                    echo $txt;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" >
    $('#nuevoOpt').click(function () {
        $('#myModalLabel').text('Alta de vacantes');

        var request = $.ajax({
            method: 'POST',
            url: "<?= base_url() ?>panelcontrol/getFormNewVacante"
        });
        request.done(function (msg) {
            $("#modal_content").html(msg);
            $('#myModal').modal('show');
        });
        request.fail(function (jqXHR, textStatus) {
            $("#modal_content").empty();
        });

    });
    function viewInfo(value) {
        $('#myModalLabel').text('Información de vacantes');
        var request = $.ajax({
            method: 'POST',
            url: "<?= base_url() ?>panelcontrol/viewInfoVacante",
            data:{'ident':value},
            datatype:'json'
        });
        request.done(function (msg) {
            $("#modal_content").html(msg);
            $('#myModal').modal('show');
        });
        request.fail(function (jqXHR, textStatus) {
            $("#modal_content").empty();
        });
    }
    function editInfo(value) {

    }
    function deleteInfo(value) {

    }
</script>













