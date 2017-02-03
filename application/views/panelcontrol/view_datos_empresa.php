<div class="panel panel-primary">
    <div class="panel-heading">
       Información de empresa
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <td>Empresa</td>
                    <td><b><?= $empresa->empresa; ?></b></td>
                </tr>
                <tr>
                    <td>RFC</td>
                    <td><b><?= $empresa->rfc; ?></b> </</td>
                </tr>
                <tr>
                    <td>Descripción/giro</td>
                    <td><b><?= $empresa->descripcion; ?></b> </td>
                </tr>
                <tr>
                    <td>Dirección</td>
                    <td><b><?= $empresa->direccion; ?></b> </td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td><b><?= $empresa->telefono; ?></b> </td>
                </tr>
                <tr>
                    <td>Responsable</td>
                    <td><b><?= $empresa->responsable; ?></b> </td>
                </tr>
                <tr>
                    <td>Página WEB</td>
                    <td><b><?= $empresa->pagina; ?></b> </td>
                </tr>
                <tr>
                    <td>Correo contacto</td>
                    <td><b><?= $empresa->mail; ?></b> </td>
                </tr>
                <tr>
                    <td>País</td>
                    <td><b><?= $empresa->pais ?></b> </td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td><b><?= $empresa->estado ?></b></td>
                </tr>
                <tr>
                    <td>Ciudad</td>
                    <td><b><?= $empresa->ciudad ?></b></td>
                </tr>
                <tr>
                    <td>Membresía</td>
                    <td><b><?= $empresa->membresia ?></b></td>
                </tr>

                <tr>
                    <td>Código/Referencia</td>
                    <td>**********</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
