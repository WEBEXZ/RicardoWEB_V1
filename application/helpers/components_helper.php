<?php

function bootStrapButtonVacante($id, $opcion) {
    $icono = '';
    $title = '';
    $funcion = '';
    $color = '';
    switch ($opcion) {
        case 'ver':
            $icono = '<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>';
            $title = 'Visualizar información de la vacante.';
            $funcion = 'viewInfo(this.id)';
            $color = 'btn-black';
            break;
        case 'editar':
            $icono = '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>';
            $title = 'Editar información de la vacante';
            $funcion = 'editInfo(this.id)';
            $color = 'btn-warning';
            break;
        case 'eliminar':
            $icono = '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>';
            $title = 'Eliminar vacante';
            $funcion = 'deleteInfo(this.id)';
            $color = 'btn-danger';
            break;
    }
    return '<button id="' . $id . '" title="' . $title . '" class="btn btn-sm ' . $color . '" onclick="' . $funcion . '">' .
            $icono .'</button>';
}
