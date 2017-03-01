<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <form class="form-horizontal">

    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Puesto</label>
        <div class="col-sm-9">
            <input type="text" class="form-control input-sm" placeholder="Puesto" aria-describedby="basic-addon1"
                   value="<?= $vacante->FCPUESTO; ?>">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Funciones principales</label>
        <div class="col-sm-9">
            <input type="text" class="form-control input-sm" placeholder="Funciones" 
                   aria-describedby="basic-addon1" value="<?= $vacante->FCFUNCIONES; ?>">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Escolaridad</label>
        <div class="col-sm-9">
            <input type="text" class="form-control input-sm" placeholder="Funciones"
                   aria-describedby="basic-addon1" value="<?= $vacante->FCESCOLARIDAD; ?>"> 
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Sueldo mensual</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Funciones"
                   aria-describedby="basic-addon1" value="<?= $vacante->FCSUELDO; ?>">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Prestaciones</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="Funciones"
                   aria-describedby="basic-addon1" value="<?= $vacante->FCPRESTACIONES; ?>">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Horario laboral</label>
        <div class="col-sm-9">
            <input type="text" class="form-control input-sm" placeholder="Funciones"
                   aria-describedby="basic-addon1" value="<?= $vacante->FCHORARIO; ?>">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Idiomas</label>
        <div class="col-sm-9">
            <input type="text" class="form-control input-sm" placeholder="Funciones"
                   aria-describedby="basic-addon1" value="<?= $vacante->FCIDIOMAS; ?>">
        </div>
    </div>
    <div class="form-group form-group-sm">
        <label class="col-sm-3 control-label" for="disabledTextInput">Viajes</label>
        <div class="col-sm-9">
            <input type="text" class="form-control input-sm" placeholder="Funciones"
                   aria-describedby="basic-addon1" value="<?= $vacante->FIVIAJES; ?>">
        </div>
    </div>
    <center>
        <div class="btn-group" role="group" aria-label="">
            <button class="btn btn-black"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
            <button type="button" onclick="disposeWindow()" class="btn btn-warning"><span class="glyphicon glyphicon-ban-circle"></span> Cancelar</button>
        </div>      
    </center> 
</form>
<script >

</script>