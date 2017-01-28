<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
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

         <a class="navbar-brand" > <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
       </div>
       <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li class="dropdown">
             <a href="" class="dropdown-toggle" data-toggle="dropdown"
              role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
              Opciones <span class="caret"></span></a>
             <ul class="dropdown-menu" id="menu">
               <li><a id="emp" href="#">Empresa</a></li>
               <li><a id="vac" href="#">Vacantes</a></li>
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
           <li><a href=""><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Salir</a></li>
         </ul>
       </div><!--/.nav-collapse -->
     </div>
   </nav>
   <hr>
  <!--<h3>Cazatalentos-Panel de control</h3>-->
  <div class="container" id="main_content">
    <h1>Bienvenido al panel de control</h1>
  </div>

<div id="wait" style="display:none;width:69px;height:89px; position:absolute;top:50%;left:50%;padding:2px;"><img src='<?=base_url()?>public/img/load.gif' width="64" height="64" /><br></div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Información de empresa</h4>
      </div>
      <div class="modal-body" id="modal_content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">
          <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"> </span> Cancelar
        </button>
        <button type="button" class="btn btn-primary">
          <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"> </span> Guardar
        </button>
      </div>
    </div>
  </div>
</div>
</body>



<script src="<?=base_url()?>public/js/jquery-2.1.1.js"></script>
<script src="<?=base_url()?>public/js/smoothscroll.js"></script>
<script src="<?=base_url()?>public/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
  });
  $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
  });

});






$('#menu li a').click(function(e){
  var request=$.ajax({
    method:'POST',
    url: "<?=base_url()?>panelcontrol/setVista/"+e.target.id
  });
  request.done(function( msg ) {
    $( "#main_content" ).html( msg );
  });
  request.fail(function( jqXHR, textStatus ) {
    $( "#main_content" ).empty();
  });
});

function newEmpresa(){
  var request=$.ajax({
    method:'POST',
    url:'<?=base_url()?>panelcontrol/getFormNewEmpresa'
  });
  request.done(function( msg ) {
    $( "#alta_empresa" ).html( msg );
    //$('#myModal').modal('show');
  });
  request.fail(function( jqXHR, textStatus ) {
    $( "#modal_content" ).empty();
  });
}
function defaultDataEmpresa(){
  var request=$.ajax({
    method:'POST',
    url:'<?=base_url()?>panelcontrol/getDatosEmpresa'
  });
  request.done(function( msg ) {
    $( "#alta_empresa" ).html( msg );
    //$('#myModal').modal('show');
  });
  request.fail(function( jqXHR, textStatus ) {
    $( "#modal_content" ).empty();
  });

}
$('#myModal').on('hidden.bs.modal', function (e) {
  alert('cerrando modal');
})
</script>
</html>
