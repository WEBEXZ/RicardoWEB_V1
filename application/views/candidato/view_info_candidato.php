<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="jumbotron">
    <h2 align="center">Información candidato</h2>
    <div class="row">
        <div class="col-md-8">
            <p>
                Nombre: <?= $candidato->FCNOMBRE ?>
            </p>
            <p>
                Correo: <?= $candidato->FCEMAIL ?>
            </p>
            <p>
                Teléfono: <?= $candidato->FCTELEFONO ?>
            </p>
            <p>
                País: <?= $candidato->FCPAIS ?>
            </p>
            <p>
                Estado: <?= $candidato->FCESTADO ?>
            </p>
            <p>
                Ciudad: <?= $candidato->FCCIUDAD ?>
            </p>
        </div>
        <div class="col-md-4">
            <a href="#" id="userImg"> 
                <img src="<?= base_url() ?>public/img/vacante.jpg"  height="200" width="200" class="img-circle">
            </a>                 
        </div>
    </div>

</div>
<script>
    $('#userImg').click(function () {

        $('#myModalLabel').text('Foto de candidato');
        var request = $.ajax({
            method: 'POST',
            url: '<?= base_url() ?>candidatos/uploadImg'
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


