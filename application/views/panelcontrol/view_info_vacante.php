<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Puesto</td>
                    <td><b><?= $vacante->FCPUESTO; ?></b></td>
                </tr>
                <tr>
                    <td>Funciones principales</td>
                    <td><b><?= $vacante->FCFUNCIONES; ?></b> </</td>
                </tr>
                <tr>
                    <td>Escolaridad</td>
                    <td><b><?= $vacante->FCESCOLARIDAD; ?></b> </td>
                </tr>
                <tr>
                    <td>Sueldo mensual</td>
                    <td><b><?= $vacante->FCSUELDO; ?></b> </td>
                </tr>
                <tr>
                    <td>Prestaciones</td>
                    <td><b><?= $vacante->FCPRESTACIONES; ?></b> </td>
                </tr>
                <tr>
                    <td>Horario laboral</td>
                    <td><b><?= $vacante->FCHORARIO; ?></b> </td>
                </tr>
                <tr>
                    <td>Idiomas</td>
                    <td><b><?= $vacante->FCIDIOMAS; ?></b> </td>
                </tr>
                <tr>
                    <td>Viajes</td>
                    <td><b><?= $vacante->FIVIAJES; ?></b> </td>
                </tr>
              
            </tbody>
        </table>