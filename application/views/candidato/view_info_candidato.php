<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .text-area{
        max-height: 100px;
        min-height: 100px;
    }
    .popover{
        max-width:700px;     
    }
    .jumbotron{
        margin:5px;
        padding-bottom: 10px;
    }
</style>
<div class="jumbotron">
    <p class='lead'><H3 align='center'>INFORMACIÓN DEL CANDIDATO</H3></p>
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
            <img src="<?= $user_image ?>"  height="200" width="200" class="img-circle">
        </a>                 
    </div>
</div>
<div class='panel panel-default'>
    <div class='panel-body'>
        <div class="form-group">
            <p class='lead'>Describa su talento en máximo 500 caracteres</p>
            <textarea maxlength="500" rows='3' class="form-control text-area" id="descripcion"></textarea>
        </div>
        <div class="row">
            <div class="btn-group col-md-3">
                <a class="btn btn-black btn-md" href="#" id="" role="button">Aceptar</a>
                <a class="btn btn-warning btn-md" href="#" id="" role="button">Cancelar</a>
            </div>
            <div class="col-md-8">
                <span class="label label-info">
                    <span class='glyphicon glyphicon-info-sign'></span>
                    Evita exagerar tu descripción con la intención de impresionar, 
                    puede parecer falso, además de tener que demostrarlo.
                </span>               
                <span class="label label-danger">
                    <span class='glyphicon glyphicon-question-sign'></span>
                    ¿No sabes cómo describir tu talento?   
                    <?= getPopoverInfoVacante('popover', 'click', 'glyphicon-new-window', 'ver..')?>
                </span> 
            </div>
        </div>
    </div>     
</div>

<div class='panel panel-default'>
    <div class='panel-body'>
        <center>
            <?= getPopoverInfoVacanteButton('btnPrevPop', 'click', 'glyphicon-eye-open', 'Pre-Visualización')?>
        </center>

    </div>
</div>

</div>
<script>
    $('#popover').click(function () {
        var request = $.ajax({
            method: 'POST',
            url: '<?= base_url() ?>candidatos/descripcionTalento'
        });
        request.done(function (data) {
            $('#popover').popover({
                title: '¿Que es un talento?',
                placement: 'top',
                html: true,
                container: 'body',
                content: data
            });
            $('#popover').popover('show');
        });
    });
    $('#popover').on('hidden.bs.popover', function () {
        $('#popover').attr('data-content', '');
    });
    $('#userImg').click(function () {
        $('#myModalLabel').text('Foto de usuario');
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
    $('#btnPrevPop').click(function () {
  
        $('#popover').popover('destroy');

        var request = $.ajax({
            method: 'POST',
            url: '<?= base_url() ?>candidatos/prevVisualizacionTalento'
        });
        request.done(function (data) {
            $('#btnPrevPop').popover({
                title: 'PRE-VISUALIZACIÓN (Así te verán los reclutadores)',
                placement: 'top',
                html: true,
                container: 'body',
                content: data
            });
            $('#btnPrevPop').popover('show');
        });
        request.fail(function (jqXHR, textStatus) {
            alert('Verifique su conexión a internet');
        });
    });
</script>


