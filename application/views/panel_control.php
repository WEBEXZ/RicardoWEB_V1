<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url() ?>public/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
        <style>
            body{
                font-weight: 200;
            }
            th{
                font-weight: 400;
            }
            .dataDB{
                font-weight: 400;
            }
            #table-info .tdright{
                text-align: right;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--                    <a class="navbar-brand" >SomosTalentos</a>-->
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">                               
                                OPCIONES <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="menu">
                                <li><a id="emp" href="#">EMPRESA</a></li>
                                <li><a id="vac" href="#">VANCANTES</a></li>
                                <li><a id="btal" href="#">Buscar Talentos</a></li>
                                <li role="separator" class="divider"></li>
                                <!--<li class="dropdown-header">Entrevista</li>-->
                                <li><a id="ent" href="">Entrevista</a></li>
                                <li><a id="rep" href="">Reporte</a></li>
                                <li><a id="cse" href="">Evaluación psicométrica</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a> <?= $empresa->mail ?></a></li>
                        <li><a href="##" id="exitSess"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <hr>
        <!--<h3>Cazatalentos-Panel de control</h3>-->
        <div class="container" id="main_content">         
             <div class="jumbotron">
                <center>
                    <h2>Bienvenidos Empresa</h2>
                    <p>Panel de administracion</p>                      
                </center>
            </div>                 
        </div>
        <div id="wait" style="display:none;width:69px;height:89px; position:absolute;top:50%;left:50%;padding:2px;"><img src='<?= base_url() ?>public/img/load.gif' width="64" height="64" /><br></div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header-st">
                        <button type="button" class="close" id="modal-cerrar" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Información de empresa</h4>
                    </div>
                    <div class="modal-body" id="modal_content">

                    </div> 
                </div>
            </div>
        </div>
    </body>

    <script src="<?= base_url() ?>public/js/jquery-2.1.1.js"></script>
    <script src="<?= base_url() ?>public/js/smoothscroll.js"></script>
    <script src="<?= base_url() ?>public/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $(document).ajaxStart(function () {
                $("#wait").css("display", "block");
            });
            $(document).ajaxComplete(function () {
                $("#wait").css("display", "none");
            });

        });


        $('#menu li a').click(function (e) {
            var request = $.ajax({
                method: 'POST',
                url: "<?= base_url() ?>panelcontrol/setVista/" + e.target.id
            });
            request.done(function (msg) {
                $("#main_content").html(msg);
            });
            request.fail(function (jqXHR, textStatus) {
                $("#main_content").empty();
            });
        });
        $('#exitSess').click(function (e) {
            $('#myModalLabel').text('Cerrar sesión');
            var request = $.ajax({
                method: 'POST',
                url: '<?= base_url() ?>VerifyLogin/confirmaCerrarSesion'
            });
            request.done(function (msg) {
                $("#modal_content").html(msg);
                $('#myModal').modal('show');
            });
            request.fail(function (jqXHR, textStatus) {
                $("#modal_content").empty();
            });
        });

        function newEmpresa() {
            var request = $.ajax({
                method: 'POST',
                url: '<?= base_url() ?>panelcontrol/getFormNewEmpresa'
            });
            request.done(function (msg) {
                $("#alta_empresa").html(msg);
                //$('#myModal').modal('show');
            });
            request.fail(function (jqXHR, textStatus) {
                $("#modal_content").empty();
            });
        }
        function defaultDataEmpresa() {
            var request = $.ajax({
                method: 'POST',
                url: '<?= base_url() ?>panelcontrol/getDatosEmpresa'
            });
            request.done(function (msg) {
                $("#alta_empresa").html(msg);
                //$('#myModal').modal('show');
            });
            request.fail(function (jqXHR, textStatus) {
                $("#modal_content").empty();
            });

        }
        $('#myModal').on('hidden.bs.modal', function (e) {
            $("#modal_content").empty();
        });

        function disposeWindow() {
            $("#modal-cerrar").trigger("click");
        }
    </script>
</html>
