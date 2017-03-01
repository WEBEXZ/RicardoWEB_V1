<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="jumbotron">
    <center>
        <p>¿Esta seguro de terminar la sesión?</p>       
        <div class="btn-group">
            <a class="btn btn-black btn-lg" href="#" id="exit" role="button">Si</a>
            <a onclick="disposeWindow()" class="btn btn-warning btn-lg" href="#" id="cancel" role="button">No</a>
        </div>                   
    </center>
</div>
<script >
    $('#exit').click(function () {
        var request = $.ajax({
                method: 'POST',
                url: "<?= base_url() ?>Verifylogin/cerrarSesion"
            });
            request.done(function () {
                location.reload();
            });
    });
</script>