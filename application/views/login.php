<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Somos Talentos">
    <meta name="author" content="Somos Talentos">
    <title>Somos Talentos</title>
    <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
	<link rel="stylesheet" href="<?=base_url()?>public/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>												
    <!-- Cabecera -->
    <header class="top-header">
        <div class="container">
                    <nav class="navbar navbar-default">
                        <a href="index.php"><img src="<?=base_url()?>public/img/LOGO_ST.png" alt="" class="logo" width="80" height="65"></a>
                        <div class="container-fluid">
                            <!-- Móviles -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Navegación -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?=base_url()?>#inicio">Inicio</a></li>
                                    <li>
                                        <a href="<?=base_url()?>#qsomos">Nosotros</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>#qsomos">Quiénes somos</a></li>
                                            <li><a href="<?=base_url()?>#mision">Misión y Visión</a></li>
                                            <li><a href="<?=base_url()?>#filosofia">Filosofía</a></li>
                                            <li><a href="<?=base_url()?>#objetivos">Objetivos</a></li>
                                            <li><a href="<?=base_url()?>#diferencias">Diferencias</a></li>
                                            <li><a href="<?=base_url()?>#comparativo">Comparativo</a></li>
                                            <li><a href="<?=base_url()?>#ventajas">Ventajas</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?=base_url()?>#servicios">Servicios</a>
                                        <ul>
                                            <li><a href="<?=base_url()?>#servicios">Servicios</a></li>
                                            <li><a href="<?=base_url()?>#costos">Costos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?=base_url()?>#pago">Pago en línea</a></li>
                                    <li><a href="<?=base_url()?>#facturacion">Facturación</a></li>
                                    <li><a href="<?=base_url()?>#contacto">Contacto</a></li>
                                    <li>
                                        <a href="#ayuda">Ayuda</a>
                                        <ul>
                                            <li><a href="#">Registro</a></li>
                                            <li><a href="#">Entrevista</a></li>
                                            <li><a href="#">Galería</a></li>
                                            <li><a href="#">Ejemplos</a></li>
                                            <li><a href="#">Evaluación</a></li>
                                            <li><a href="#">Pago en línea</a></li>
                                            <li><a href="#">Facturación</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
        </div>
    </header>
    <!-- LOGIN -->
    <section class="about text-center" id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 about-heading">
                    <h2>LOGIN</h2>
                    <h2></h2>
                </div>
                <div class="col-md-3 single-about col-xs-6 col-sm-4"></div>
                <div class="col-md-3 single-about col-xs-6 col-sm-4" onclick="$('#IniciaSesion').toggle(); document.getElementById('Registrarse').style.display = 'none'; window.location.hash='IniciaSesion'; document.getElementById('forgot-password').style.display = 'none';  ">
                    <div class="about-inside">
                        <img src="<?=base_url()?>public/img/acceso.png" alt="Login" width="150" height="150"/>
                        <h3>Inicia tu sesión</h3>
                        <span>Si ya estás registrado, accede con tus credenciales.</span>
                    </div>
                </div>
                <div class="col-md-3 single-about col-xs-6 col-sm-4 "  onclick="document.getElementById('IniciaSesion').style.display = 'none'; document.getElementById('forgot-password').style.display = 'none';  ">
                    <div class="about-inside">
                        <img id="registro" src="<?=base_url()?>public/img/registro.png" alt="Registro" width="150" height="150"/>
                        <h3>Registro</h3>
                        <span>Regístrate, o bien, registra tu empresa para encontrar al talento que necesitas. <a onclick="$('#Registrarse').toggle();" > Talento</a> | <a onclick="$('#RegistrarTalento').toggle();" >Cazatalento</a></span>
                    </div>
                </div>
				<div class="col-md-3 single-about col-xs-6 col-sm-4"></div>
			</div>
		 </div>
	 </section>	
	
	<div id="IniciaSesion" style="display:none; padding:30px 0;">
	     <div>
		  <?php echo form_open('Verifylogin/valida_login'); ?>	
			<div class="text-center">
				<div class="logo">Login</div>
				<div class="login-form-1">
					<form id="login-form" class="text-left">
						<div class="login-form-main-message"></div>
						<div id="LoginUsuarios" class="main-login-form">
							<div class="login-group">
								<div class="form-group">
									<label for="username" class="sr-only">Correo electrónico</label>
									<input type="email" class="form-control" id="username" name="username" placeholder="Correo electrónico" required>
								</div>
							    <div class="form-group">
								    <label for="lg_password" class="sr-only">Contraseña</label>
								    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
							    </div>
								<div class="form-group login-group-checkbox">
									<input type="checkbox" id="cazatalentos" name="cazatalentos">
									<label for="cazatalentos">Cazatalentos</label>
								</div>
	  					    </div>
							<button type="submit" value="Login" name="entrar" class="login-button"><i class="fa fa-chevron-right"></i></button>                                   
							<?php if( isset($variable) ): ?>
							    <script> document.getElementById('IniciaSesion').style.display = 'block'; window.location.hash='IniciaSesion'; setTimeout("document.getElementById('MensajeError').style.display='none';", 7000);</script>
								<div id="MensajeError">
								<p style="color:red;"><?php echo $variable; ?></p>
								</div>
							<?php endif; ?> 
                            <h2></h2>
							<p>Olvidé mi contraseña...<a onclick="$('#forgot-password').toggle(); document.getElementById('IniciaSesion').style.display = 'none'; " >Da clic aqui</a></p>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</div>	
	<!-- FORGOT PASSWORD FORM -->
	<div id="forgot-password" class="text-center" style="display:none; padding:50px 0;" >
	  <?php echo form_open('Verifylogin/valida_email'); ?>	
		<div class="logo">Olvidé mi contraseña</div>
		<div class="login-form-1">
			<form id="forgot-password-form" class="text-left">
				<div class="etc-login-form">
					<p align="justify">Coloque su correo electrónico registrado y se le enviarán instrucciones sobre cómo restablecer su contraseña.</p>
				</div>
				<!-- <div class="login-form-main-message"></div> -->
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="emailperdido" class="sr-only">Correo electrónico</label>
							<input type="email" class="form-control" id="emailperdido" name="emailperdido" placeholder="Correo electrónico" required>
						</div>	
                                                <div class="form-group login-group-checkbox">
									<input type="checkbox" id="cazatalentos2" name="cazatalentos2">
									<label for="cazatalentos2">Cazatalentos</label>
						</div>
					</div>
					<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
					<?php if( isset($vemail) ): ?>
							    <script> document.getElementById('forgot-password').style.display = 'block';  window.location.hash='forgot-password'; setTimeout("document.getElementById('MensajeError').style.display='none';", 7000);</script>
								
						
                                                                <div id="MensajeError">
								<p style="color:red;"><?php echo $vemail; ?></p>
								</div>
					<?php endif; ?> 
				</div>
			</form>
		</div>
	</div>
	
		<!-- REGISTRATION FORM -->
	<div id="Registrarse" role="dialog" style="display:none; ">
		<div class="text-center">
                  <?php echo form_open('Verifylogin/insert_user'); ?>	
			<div class="logo">Registro</div>
			<div class="login-form-1">
				<form id="register-form" class="text-left"  name="datos">
					<div class="login-form-main-message"></div>
					<div class="main-login-form">
					<div class="login-group">
					    <div class="form-group">
							<label for="empresa" class="sr-only">Empresa</label>
							<input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
						</div>
						<div class="form-group">
							<label for="rfc" class="sr-only">RFC</label>
							<input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" required>
						</div>
						<div class="form-group">
							<label for="giro" class="sr-only">Descripción/Giro</label>
							<input type="text" class="form-control" id="giro" name="giro" placeholder="escripción/Giro" required>
						</div>
						<div class="form-group">
							<label for="direccion" class="sr-only">Dirección</label>
							<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
						</div>
						<div class="form-group">
							<label for="telefono" class="sr-only">Teléfono</label>
							<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
						</div>
						<div class="form-group">
							<label for="responsable" class="sr-only">Responsable</label>
							<input type="text" class="form-control" id="responsable" name="responsable" placeholder="Responsable" required>
						</div>
						<div class="form-group">
							<label for="pagina" class="sr-only">Página Web</label>
							<input type="text" class="form-control" id="pagina" name="pagina" placeholder="Página Web" required>
						</div>
						<div class="form-group">
							<label for="pais" class="sr-only">País</label>
							<input type="text" class="form-control" id="pais" name="pais" placeholder="pais" required>
						</div>
						<div class="form-group">
							<label for="estado" class="sr-only">Estado</label>
							<input type="text" class="form-control" id="estado" name="estado" placeholder="estado" required>
						</div>
						<div class="form-group">
							<label for="ciudad" class="sr-only">Ciudad</label>
							<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
						</div>
						<div class="form-group login-group-checkbox">
							<input type="radio" class="" name="membresia" value="Basica" id="basica" placeholder="Basica">
							<label for="basica">Básica</label>
							<input type="radio" class="" name="membresia" value="Completa" id="completa" placeholder="Completa">
							<label for="completa">Completa</label>
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="email" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Contraseña</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
						</div>
						<div class="form-group">
							<label for="password_confirm" class="sr-only">Confirmar contraseña</label>
							<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="confirma password" required>
						</div>
						
						<div class="form-group login-group-checkbox">
							<input type="checkbox" class="" id="reg_agree" name="reg_agree">
							<label for="reg_agree">i agree with <a href="#">terms</a></label>
						</div>
					</div>
							<button  name="ok" id="ok" value="Aceptar" type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
			</div>
		</div>
	</div>
			<!-- REGISTRATION FORM -->
	<div id="RegistrarTalento" role="dialog" style="display:none; ">
		<div class="text-center">
            <?php echo form_open('Verifylogin/insert_user'); ?>	
			<div class="logo">Registro</div>
			<div class="login-form-1">
				<form id="register-form" class="text-left"  name="datos">
					<div class="login-form-main-message"></div>
					<div class="main-login-form">
					<div class="login-group">
					    <div class="form-group">
							<label for="nombre" class="sr-only">Nombre</label>
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
						</div>
						<div class="form-group">
							<label for="telefono" class="sr-only">Teléfono</label>
							<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
						</div>
						<div class="form-group">
							<label for="puesto" class="sr-only">Puesto deseado</label>
							<input type="text" class="form-control" id="puesto" name="puesto" placeholder="Puesto" required>
						</div>
						<div class="form-group">
							<label for="nivel" class="sr-only">Nivel de experiencia</label>
							<input type="text" class="form-control" id="nivel" name="nivel" placeholder="Nivel" required>
						</div>
						<div class="form-group">
							<label for="pais" class="sr-only">País</label>
							<input type="text" class="form-control" id="pais" name="pais" placeholder="pais" required>
						</div>
						<div class="form-group">
							<label for="estado" class="sr-only">Estado</label>
							<input type="text" class="form-control" id="estado" name="estado" placeholder="estado" required>
						</div>
						<div class="form-group">
							<label for="ciudad" class="sr-only">Ciudad</label>
							<input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" required>
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="email" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Contraseña</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="password" required>
						</div>
						<div class="form-group">
							<label for="password_confirm" class="sr-only">Confirmar contraseña</label>
							<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="confirma password" required>
						</div>
						<div class="form-group">
							<label for="image" class="col-sm-2" >Imagen</label>
							<input type="file" accept="image|*" name="imagen">
						</div>
                        <div class="form-group login-group-checkbox">
							<input type="checkbox" class="" id="reg_agree" name="reg_agree">
							<label for="reg_agree">i agree with <a href="#">terms</a></label>
						</div>
					 <button  name="ok" id="ok" value="Aceptar" type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <!-- Footer -->
    <footer class="footer text-center">
        <p>Derechos Reservados | <a href="#">Términos de uso y Políticas</a> | <a href="#">Aviso de Privacidad</a> | <a href="#">Asistencia</a></p>
    </footer>

    <!-- script -->
    <script src="<?=base_url()?>public/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>public/js/smoothscroll.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>public/js/jquery.validate.min.js"></script>
</body>
</html>


