<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="jumbotron">
    <center>
        <p>¿Eliminar puesto: <?=$nombre?>?</p>       
        <div class="btn-group">
            <a class="btn btn-black btn-lg" href="#" id="exit" role="button">Si</a>
            <a onclick="disposeWindow()" class="btn btn-warning btn-lg" href="#" id="cancel" role="button">No</a>
            <input type="hidden" value="<?=$ID?>"/>
        </div>                   
    </center>
</div>