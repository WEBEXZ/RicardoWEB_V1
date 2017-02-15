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
    
    <div id="vacante_content" class="table-responsive col-lg-10 col-md-10 col-sm-9 col-xs-9">
        <table class="table table-hover">    
            <thead>
            <tr>
            <th>Vacante</th>
            <th>Funciones</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach($vacantes as $row){
                    $visualizar= bootStrapButton($row->FIVACANTE);
                    $txt=sprintf('<tr><td>%s</td><td>%s</td><td>%s</td></tr>',$row->FCPUESTO,$row->FCFUNCIONES,$visualizar);
                    echo $txt;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" >
    $('#nuevoOpt').click(function () {
        $('#myModalLabel').text('Información de vacantes');

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
</script>













