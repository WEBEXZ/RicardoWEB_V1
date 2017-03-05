<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class='row'>
    <div class="col-xs-6 col-sm-4">
        <div id="userImg"> 
            <img src="<?= base_url() . 'public/img/vacante.jpg' ?>"  height="100" width="100" class="img-circle">
        </div>
    </div>
    <div class="col-xs-12 col-sm-8">  
        <form id="uploadForm"  method="post">
            <div class="form-group">
                <label for="exampleInputFile">Seleccione foto de perfil</label>
                <input type="file" id='archivo' name='userImage'>
                <p class="help-block">Medidas permitidas para la imagen:480 x 480</p>
            </div>
            <button type="submit" class="btn btn-black">Guardar</button>
        </form>
    </div>
</div>
<br>
<div class='row' class='col-xs-18 col-sm-12'>
    <p class="bg-danger" id="info"></p>
</div>

<script type="text/javascript">

    $("#uploadForm").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url() ?>Candidatos/saveImgUser',
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data)
            {
                if (data.result == 'exito') {
                    $('#userImg img').attr('src', data.value);
                } else if (data.result == 'error') {
                    $('#info').html(data.value);
                }
            },
            error: function (data)
            {
                //                    alert('error: ' + data);
                $('#error').html(data);
            }
        });
    }));


</script>