<?php

function bootStrapButtonVacante($id, $opcion) {
    $icono = '';
    $title = '';
    $funcion='';
    switch ($opcion) {
        case 'ver':
            $icono = '<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>';
            $title = 'Visualizar información de la vacante.';
            $funcion='viewInfo(this.id)';
            break;
        case 'editar':
            $icono = '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>';
            $title = 'Editar información de la vacante';
            break;
        case 'eliminar':
            $icono = '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>';
            $title = 'Eliminar vacante';
            break;
    }
    return '<button id="' . $id . '" title="' . $title . '" class="btn btn-xs btn-default" onclick="'.$funcion.'">' .
            $icono .
            '</button>';
}
