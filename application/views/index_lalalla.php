﻿<?php
require_once "recaptchalib.php";
?>
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
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
</head>

<body>
     <?php echo validation_errors(); ?>
     <?php echo form_open('Verifylogin'); ?>												
    <!-- Cabecera -->
    <header class="top-header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <a href="index.html"><img src="<?=base_url()?>public/img/LOGO_ST.png" alt="" class="logo" width="80" height="65"></a>
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
                                    <li><a href="#inicio">Inicio</a></li>
                                    <li>
                                        <a href="#qsomos">Nosotros</a>
                                        <ul>
                                            <li><a href="#qsomos">Quiénes somos</a></li>
                                            <li><a href="#mision">Misión y Visión</a></li>
                                            <li><a href="#filosofia">Filosofía</a></li>
                                            <li><a href="#objetivos">Objetivos</a></li>
                                            <li><a href="#diferencias">Diferencias</a></li>
                                            <li><a href="#comparativo">Comparativo</a></li>
                                            <li><a href="#ventajas">Ventajas</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#servicios">Servicios</a>
                                        <ul>
                                            <li><a href="#servicios">Servicios</a></li>
                                            <li><a href="#costos">Costos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#pago">Pago en línea</a></li>
                                    <li><a href="#facturacion">Facturación</a></li>
                                    <li><a href="#contacto">Contacto</a></li>
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
            </div>
        </div>
    </header>

    <!-- INICIO -->
    <section class="banner text-center" id="inicio">
        <div class="container">
            <div class="row">
                <h3></h3>

                <h1>El sitio para encontrar talentos...</h1>
                <h3>no perfiles. </h3>

                <br>

                <button onclick="document.getElementById('login').scrollIntoView()">LOGIN</button>
                <br>
            </div>
        </div>
    </section>

    <!-- LOGIN -->
    <section class="about text-center" id="login">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 about-heading">
                    <h2>LOGIN</h2>
                    <h2></h2>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4"></div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4" data-toggle="modal" data-target="#IniciaSesion" data-backdrop="static" data-keyboard="false">

                    <div class="about-inside">
                        <img src="<?=base_url()?>public/img/acceso.png" alt="Login" width="150" height="150"/>
                        <h3>Inicia tu sesión</h3>
                        <span>Si ya estás registrado, accede con tus credenciales.</span>
                    </div>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4 " data-toggle="modal" data-target="#Registrarse" data-backdrop="static" data-keyboard="false">
                    <div class="about-inside">
                        <img id="registro" src="<?=base_url()?>public/img/registro.png" alt="Registro" width="150" height="150"/>
                        <h3>Registro</h3>
                        <span>Regístrate, o bien, registra tu empresa para encontrar al talento que necesitas.</span>
                    </div>
                </div>

                <div class="col-md-3 single-about col-xs-6 col-sm-4"></div>
				<!-- INICIO DE SESION -->
				<div id="IniciaSesion" class="modal fade" role="dialog">
				    <div class="modal-dialog">
					    <div class="modal-content">
							<div class="modal-header">
							    <button type="button" onclick="getElementById('forgot-password').style.display = 'none';" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Inicia tu sesión</h4>
            </div>
							<div class="modal-body">
								<div class="text-center" style="padding:50px 0">
									<div class="logo">Login</div>
									<div class="login-form-1">
										<form id="login-form" class="text-left">
											<div class="login-form-main-message"></div>
											<div id="LoginUsuarios" class="main-login-form">
												<div class="login-group">
													<div class="form-group">
														<label for="lg_username" class="sr-only">Correo electrónico</label>
														<input type="text" class="form-control" id="username" name="username" placeholder="Correo electrónico">
													</div>
													<div class="form-group">
														<label for="lg_password" class="sr-only">Contraseña</label>
														<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
													</div>
													<div class="form-group login-group-checkbox">
														<input type="checkbox" id="lg_remember" name="lg_remember">
														<label for="lg_cazatalentos">Cazatalentos</label>
													</div>
												</div>
												<button type="submit" value="Login" name="entrar" class="login-button"><i class="fa fa-chevron-right"></i></button>
												<h2></h2>
												<p>Olvide mi contraseña...<a id="showOrHide" >Da clic aqui</a></p>
											</div>
										</form>
									</div>
							    </div>
							<!-- FORGOT PASSWORD FORM -->
								<div id="forgot-password" class="text-center" style="display:none; padding:50px 0" >
									<div class="logo">Olvide mi contraseña</div>
									<!-- Main Form -->
									<div class="login-form-1">
										<form id="forgot-password-form" class="text-left">
											<div class="etc-login-form">
												<p>Coloque su correo electrónico registrado y se le enviarán instrucciones sobre cómo restablecer su contraseña.</p>
											</div>
											<div class="login-form-main-message"></div>
											<div class="main-login-form">
												<div class="login-group">
													<div class="form-group">
														<label for="fp_email" class="sr-only">Correo electrónico</label>
														<input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="Correo electrónico">
													</div>
												</div>
												<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
											</div>
										</form>
									</div>
								</div>
							</div>
					  </div>
					  <div class="modal-footer">
						<br>
					  </div>
					</div>
				</div>
					<!-- REGISTRATION FORM -->
				<div id="Registrarse" class="modal fade" role="dialog">
				    <div class="modal-dialog">
					    <div class="modal-content">
							<div class="modal-header">
							    <button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Inicia tu sesión</h4>
							</div>
							<div class="modal-body">
								<div  class="text-center" style="padding:50px 0">
								  <div class="logo">register</div>
									<!-- Main Form -->
									<div class="login-form-1">
										<form id="register-form" class="text-left"  name="datos">
											<div class="login-form-main-message"></div>
											<div class="main-login-form">
												<div class="login-group">

                                                    Nombre:<input name="Nombre" type="text" id="nombre" value="" /><br>
                                                    Apellido Paterno:<input type="text" name="Paterno" id="ap_paterno" /><br>
                                                    Apellido Materno:<input type="text" name="Materno" id="ap_materno" /><br>
                                                    
													<div class="form-group">
														<label for="reg_username" class="sr-only">Email address</label>
														<input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
													</div>
													<div class="form-group">
														<label for="reg_password" class="sr-only">Password</label>
														<input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
													</div>
													<div class="form-group">
														<label for="reg_password_confirm" class="sr-only">Password Confirm</label>
														<input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
													</div>
													
													<div class="form-group">
														<label for="reg_email" class="sr-only">Email</label>
														<input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
													</div>
													<div class="form-group">
														<label for="reg_fullname" class="sr-only">Full Name</label>
														<input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
													</div>
													
													<div class="form-group login-group-checkbox">
														<input type="radio" class="" name="reg_gender" id="male" placeholder="username">
														<label for="male">male</label>
														
														<input type="radio" class="" name="reg_gender" id="female" placeholder="username">
														<label for="female">female</label>
													</div>
													
													<div class="form-group login-group-checkbox">
														<input type="checkbox" class="" id="reg_agree" name="reg_agree">
														<label for="reg_agree">i agree with <a href="#">terms</a></label>
													</div>
												</div>
												<button  name="ok" id="ok" value="Aceptar" type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
											</div>
											<div class="etc-login-form">
												<p>already have an account? <a href="#">login here</a></p>
											</div>
										</form>
									</div>
								</div>	
						    </div>
							<p>Some text in the modal.</p>
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					  <div class="modal-footer">
						<br>
					  </div>
					</div>
				</div>
			</div>
        </div>
    </section>

    <!-- QUIÉNES SOMOS -->
    <section class="service text-left" id="qsomos">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>Quiénes somos</h2>

                    <p>
                        Somos un grupo de profesionales en Recursos Humanos con muchos años <br />
                        de experiencia, con la intención de crear alternativas de búsquedas de <br />
                        talentos además de las que ya existen, estamos convencidos de que todas <br />
                        las actividades profesionales también deben evolucionar y ofrecer nuevas <br />
                        alternativas a las personas en busca de oportunidades laborales.
                        laborales.
                        <br>
                        <br>
                    </p>

                    <h3>Cambiamos la forma de reclutar</h3>
                    <p>
                        En la actualidad se necesitan nuevo métodos de búsquedas de talentos más <br />
                        eficaces, menos costosos y que se invierta poco tiempo, éste sitio ofrece <br />
                        todas esas ventajas, es un sitio de interacción entre reclutadores y candidatos.
                    </p>
                </div>
                <div class="col-md-12 services">
                    <div class="col-md-2 single-service col-xs-6 col-sm-3">
                        <i class="fa fa-blind"></i>
                        <h3><b>IGUALDAD</b></h3>
                        <p align="justify">Todos por igual merecemos las mismas oportunidades, sin discriminación.</p>
                    </div>

                    <div class="col-md-2 col-md-push-1 single-service col-xs-6 col-sm-3">
                        <i class="fa fa-child"></i>
                        <h3><b>INNOVACIÓN</b></h3>
                        <p align="justify">Analizar situaciones, detectar problemas y desarrollar soluciones.</p>
                    </div>
                </div>

                <div class="col-md-12  services bottom-services">

                    <div class="col-md-2 single-service col-sm-3 col-xs-6">
                        <i class="fa fa-group"></i>
                        <h3><b>COLABORACIÓN</b></h3>
                        <p align="justify">Ayudar a las empresas a conseguir los mejores talentos y ayudar a los trabajadores a
                                           encontrar las mejores oportunidades de trabajo.
                        </p>
                    </div>

                    <div class="col-md-2 col-md-push-1 single-service col-sm-3 col-xs-6">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h3><b>CONFIANZA</b></h3>
                        <p align="justify">Confia en el talento de las personas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISIÓN -->
    <section class="portfolio text-center" id="mision">
        <div class="row portfolio-row">
            <div class="portfolio-heading">
                <h2>MISIÓN</h2>
                <p>
                    Ser un medio efectivo, ágil y confiable de enlace entre empresas
                    y personas, <br /> para generar oportunidades laborales, 
                    eliminando todas las barreras posibles en la detección de talentos.
                </p>
            </div>

            <div class="portfolio-heading">
                <h2>VISIÓN</h2>
                <p>
                    Ser el medio que a más personas ayude a conseguir el trabajo que
                    buscan <br />y a las empresas a conseguir a los candidatos más adecuados.
                </p>
            </div>
        </div>
    </section>

    <!-- FILOSOFÍA -->
    <section class="service_filo text-right" id="filosofia">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>Filosofía</h2>
                    <p>
                        Promover la igualdad, sin importar la edad, sexo, religión, rasgos físicos o preferencia<br />
                        sexual. <b>SÓLO</b> importa el talento <u>inicialmente</u> para ser  elegidos. Buscamos cambiar la<br />
                        mentalidad de los reclutadores, para que no desperdicien talentos, por no cumplir con<br />
                        un perfil al 100%, sólo revisando un CV. Queremos promover la selección primero por<br />
                        talento y después por experiencia y conocimientos.
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- OBJETIVOS -->
    <section class="service_obj text-left" id="objetivos">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>Objetivos</h2>

                    <p>
                        <ul>
                            <li>Proveer a los reclutadores del mejor talento para cubrir sus vancantes, con<br />
                                acceso a una base de datos entre muchos candidatos de todos los perfiles. </li><br /> 
                            <li>Que los reclutadores conozcan a los candidatos por lo que son como personas <br />
                                y por sus talentos, en vez de por lo que dice su CV.</li><br /> 
                            <li>Romper paradigmas en la selección de personal.</li>
                        </ul>
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- DIFERENCIAS -->
    <section class="portfolio text-center" id="diferencias">
        <div class="row portfolio-row">
            <div class="diferencias-heading">
                <h2>DIFERENCIAS</h2>

                <div class="col-md-3 single-portfolio col-sm-6"></div>

                <div class="col-md-3 single-portfolio col-sm-6">
                    <h3>Bolsas de trabajo</h3>
                    <br />
                    <ul class="diferencias-justify">
                        <li>El reclutador publica una vacante y espera a que los candidatos la consulten y se postulen.</li>
                        <br />
                        <li>El candidato elige si le interesa o no la oferta, y se pierde la oportunidad de reclutar un talento 
                            o se postulan candidatos sin los requisitos básicos.</li>
                    </ul>
                    <br />
                    <ul class="diferencias">
                        <li><b>El reclutador publica</b></li>
                        <li><b>El candidato consulta</b></li>
                    </ul>
                    <br />
                    <figure class="portfolio-item">
                        <img class="img-responsive" src="<?=base_url()?>public/img/otros.jpg" alt="">
                        <figcaption class="portfolio-details">
                            <h4><u>RESULTADO</u></h4>
                            <br />
                            <ul class="diferencias">
                                <li><b>Es necesario leer muchos currículums.</b></li>
                                <br />
                                <li><b>Menor número de candidatos para elegir.</b></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>

                <div class="col-md-3 single-portfolio col-sm-6">
                    <h3>Somos Talentos</h3>
                    <br />
                    <ul class="diferencias">
                        <li>El candidato publica su perfil.</li>
                        <br />
                        <br />
                        <br />
                        <li>El reclutador consulta y elige a sus candidatos.</li>
                    </ul>
                    <br />
                    <br />
                    <ul class="diferencias">
                        <li><b>El candidato publica</b></li>
                        <li><b>El reclutador consulta</b></li>
                    </ul>
                    <br />
                    <figure class="portfolio-item">
                        <img class="img-responsive" src="<?=base_url()?>public/img/bolsadetrabajo.jpg" alt="">
                        <figcaption class="portfolio-details">
                            <h4><u>RESULTADO</u></h4>
                            <br />
                            <ul class="diferencias">
                                <li><b>Se realiza un filtro de candidatos por puesto.</b></li>
                                <br />
                                <li><b>Mayor número de candidatos para elegir.</b></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>


                <!--<div class="col-md-3 single-portfolio col-sm-6">
            <figure class="portfolio-item">
                <img class="img-responsive" src="img/portfolio3.jpg" alt="">
                <figcaption class="portfolio-details">
                    <h4>TRES</h4>
                    <p>onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                </figcaption>
            </figure>
            <a href="img/portfolio3.jpg"><i class="fa fa-search"></i></a>
        </div>

        <div class="col-md-3 single-portfolio col-sm-6">
            <figure class="portfolio-item">
                <img class="img-responsive" src="img/portfolio4.jpg" alt="">
                <figcaption class="portfolio-details">
                    <h4>CUATRO</h4>
                    <p>onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                </figcaption>
            </figure>
            <a href="img/portfolio4.jpg"><i class="fa fa-search"></i></a>
        </div>

        <div class="col-md-3 single-portfolio col-sm-6">
            <figure class="portfolio-item">
                <img class="img-responsive" src="img/portfolio5.jpg" alt="">
                <figcaption class="portfolio-details">
                    <h4>CINCO</h4>
                    <p>onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                </figcaption>
            </figure>
            <a href="img/portfolio5.jpg"><i class="fa fa-search"></i></a>
        </div>

        <div class="col-md-3 single-portfolio col-sm-6">
            <figure class="portfolio-item">
                <img class="img-responsive" src="img/portfolio6.jpg" alt="">
                <figcaption class="portfolio-details">
                    <h4>SEIS</h4>
                    <p>onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                </figcaption>
            </figure>
            <a href="img/portfolio6.jpg"><i class="fa fa-search"></i></a>
        </div>

        <div class="col-md-3 single-portfolio col-sm-6">
            <figure class="portfolio-item">
                <img class="img-responsive" src="img/portfolio7.jpg" alt="">
                <figcaption class="portfolio-details">
                    <h4>SIETE</h4>
                    <p>onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                </figcaption>
            </figure>
            <a href="img/portfolio7.jpg"><i class="fa fa-search"></i></a>
        </div>

        <div class="col-md-3 single-portfolio col-sm-6">
            <figure class="portfolio-item">
                <img class="img-responsive" src="img/portfolio8.jpg" alt="">
                <figcaption class="portfolio-details">
                    <h4>OCHO</h4>
                    <p>onsectetur adipisicing elit, sedo eiusmod tempor incidi et dolorerserss eerhfre mag.</p>
                </figcaption>
            </figure>
            <a href="img/portfolio8.jpg"><i class="fa fa-search"></i></a>
        </div>-->
            </div>
        </div>
    </section>

    <!-- COMPARATIVO -->
    <section class="service_comparativo text-left" id="comparativo">
        <div class="container">
            <div class="row">
                <!--<div class="service-overlay"></div>-->
                <div class="col-md-12">
                    <h2>Comparativo</h2>
                    <h4>Comparativo de procesos para el reclutamiento y selección del personal</h4>
                    <br />

                    <img class="img-responsive" src="<?=base_url()?>public/img/Comparativo.jpg" alt="Comparativo SomosTalentos">
                    <br />
                    <img class="img-responsive" src="<?=base_url()?>public/img/Comparativo_2.jpg" alt="Comparativo SomosTalentos">
                </div>
            </div>
        </div>
    </section>

    <!-- VENTAJAS -->
    <section class="service_ventaja text-right" id="ventajas">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>Ventajas</h2>
                    
                    <div class="single-service-right">
                        <p align="justify"><i class="fa fa-check-square-o"></i> Se descubren talentos.</p>
                        <p align="justify"><i class="fa fa-check-square-o"></i> El servicio es gratuito para candidatos.</p>
                        <p align="justify"><i class="fa fa-check-square-o"></i> El costo para las empresas es muy accesible
                                                                             y se puede cancelar en cualquier momento.</p>
                        <p align="justify">
                            <i class="fa fa-check-square-o"></i> El reclutador invierte menos tiempo en buscar candidatos.
                        </p>
                        <p align="justify">
                            <i class="fa fa-check-square-o"></i> Los reclutadores pueden elegir las preguntas
                                                                 para la entrevista virtual en tiempo real, de nuestra
                                                                 base de datos con preguntas pensadas para ayudarlos
                                                                 a descubrir talentos o bien, hacer sus propias
                                                                 preguntas.
                        </p>
                        <p align="justify">
                            <i class="fa fa-check-square-o"></i> Las entrevistas virtuales hacen más ágil el proceso
                                                                 de selección, citando únicamente a los candidatos
                                                                 más adecuados.
                        </p>
                        <p align="justify">
                            <i class="fa fa-check-square-o"></i> No se maneja información confidencial del candidato
                                                                 ni de la empresa durante el proceso en el sitio,
                                                                 únicamente los datos básicos.
                        </p>
                        <p align="justify">
                            <i class="fa fa-check-square-o"></i> Se pueden conocer muestras del trabajo de los candidatos
                                                                 o sus logros incluso antes de contactarlos.
                        </p>
                        <p align="justify"><i class="fa fa-check-square-o"></i> Facilitamos el trabajo a los Head-Hunters.</p>
                        <br />
                        <br />
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section class="portfolio text-center" id="servicios">
        <div class="row portfolio-row">
            <div class="servicios-heading">
                <h2>SERVICIOS</h2>
                <h3>!Cambiamos la forma de reclutar!</h3>
                <br />
                <p align="justify">Existen miles de formas de redactar un currículum y por esta razón, pensamos
                                   que no existe una forma correcta, sin embargo, si existe una forma incorrecta
                                   de redactar un currículum, con información incompleta o información no necesaria
                                   o que simplemente no refleja el verdadero potencial de una persona y que al final
                                   provoca que el reclutador pre-juzgue a un candidato formándose una imagen probablemente
                                   falsa, sin ni siquiera darse la oportunidad conocer al candidato y obtener la información
                                   más real y por supuesto más útil para poder elegir mejor.
                </p>

                <div class="col-md-3 single-portfolio col-sm-6"></div>

                <div class="col-md-3 single-portfolio col-sm-6">
                    <figure class="portfolio-item">
                        <img class="img-responsive" src="<?=base_url()?>public/img/platicas.jpg" alt="">
                    </figure>
                </div>

                <div class="col-md-3 single-portfolio col-sm-6">
                    <figure class="portfolio-item">
                        <img class="img-responsive" src="<?=base_url()?>public/img/platicas2.jpg" alt="">
                    </figure>
                </div>

                <div class="col-md-3 single-portfolio col-sm-6"></div>

                <div class="single-service-left">
                    <br />
                    <br />
                    <p align="justify"><i class="fa fa-check-square-o"></i> Nuestro servicio se basa en ayudar a personas que 
                                                                            buscan una oportunidad laboral, pero que son rechazados 
                                                                            por reclutadores que solamente se basan en una hoja de vida 
                                                                            para seleccionar candidatos y a empresas que desean probar 
                                                                            nuevas alternativas en la forma de pre-seleccionar candidatos.</p>
                    <p align="justify"><i class="fa fa-check-square-o"></i> No se publican vacantes, se eligen candidatos de nuestra base 
                                                                            de datos, para encontrar talentos en espera de un llamado y una 
                                                                            oportunidad.</p>
                    <p align="justify"><i class="fa fa-check-square-o"></i> Los candidatos no necesitan capturar un Currículum, simplemente 
                                                                            explicar sus talentos y que un reclutador cazatalentos se interese 
                                                                            por conocerlos.</p>
                    <br />
                    <br />
                </div>

                <div class="single-service-left2">
                    <h2>CAZATALENTOS</h2>
                    <p align="justify">
                        <i class="fa fa-search fa-3x"></i><b> Búsqueda de candidatos.- </b>Podrás consultar entre muchos 
                        candidatos que buscan el puesto que tú necesitas cubrir y están esperando a que los entrevistes.
                    </p>
                    <p align="justify">
                        <i class="fa fa-users fa-3x"></i><b> Entrevista virtual en forma de chat en tiempo real (NO es videoconferencia).- </b>
                        En ves de ver un CV, los puedes entrevistar para conocer sus habilidades y decidir si es el talento que necesitas.
                    </p>
                    <p align="justify">
                        <i class="fa fa-desktop fa-3x"></i><b> Entrevista en línea.- </b> Si prefieres, puedes generar una entrevista y 
                        enviarla al candidato para que la conteste y decidir si es el talento que necesitas, dependiendo del plan que 
                        contrates, podrás crear tus entrevistas y guardarlas para aplicarlas las veces que necesites, o bien, editarlas 
                        dependiendo de lo que necesites evaluar.
                    </p>
                    <p align="justify">
                        <i class="fa fa-object-group fa-3x"></i><b> Evaluación psicométrica en línea.- </b> Podrás aplicar exámenes 
                        psicométricos al candidato vía internet y recibirás el resultado en tu correo electrónico, para que lo puedas 
                        interpretar. Éste servicio te ahorrará mucho tiempo en tu proceso. Puedes aplicar hasta 3 exámenes que abarcan 
                        personalidad, cultura y razonamiento y aptitud para ventas.
                    </p>
                    <p align="justify">
                        <i class="fa fa-bar-chart fa-3x"></i><b> Generación de reporte de entrevistas realizadas.- </b> Podrás solicitar 
                        un reporte mensual del número de entrevistas que realizaste en el mes.
                    </p>
                    <br />
                    <br />
                </div>
                <div class="single-service-left">
                    <h2>TALENTOS</h2>
                    <p align="justify">
                        <i class="fa fa-user-plus fa-3x"></i><b> Registro en una base de datos para ser encontrado.- </b>
                        Te registras sin costo y estarás visible para todos los reclutadores.
                    </p>
                    <p align="justify">
                        <i class="fa fa-users fa-3x"></i><b> Entrevista virtual en forma de chat en tiempo real (NO es videoconferencia).- </b>
                        Tendrás la oportunidad de describir tu talento y obtener mayores oportunidades de ser contactado.
                    </p>
                    <p align="justify">
                        <i class="fa fa-photo fa-3x"></i><b> Espacio de galería para muestras de documentos o tus creaciones.- </b> 
                        Si lo deseas, podrás contratar un espacio para que publiques lo que quieras mostrar a los reclutadores, diseños, 
                        fotografías, escritos, diplomas, reconocimientos, etc., a un costo muy accesible.
                    </p>
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </section>

    <!-- COSTOS -->
    <section class="service_comparativo text-left" id="costos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Planes y Costos</h2>
                    <br />

                    <h3><u>Empresas y Cazatalentos</u></h3>
                    <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>MEMBRESÍA</th>
                                <th>BÁSICA</th>
                                <th>COMPLETA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Costo mensual + IVA</td>
                                <td>$ 250 MN</td>
                                <td>$ 500 MN</td>
                            </tr>
                            <tr>
                                <td>Acceso a buscar datos</td>
                                <td><i class="fa fa-check-square-o fa-2x"></i></td>
                                <td><i class="fa fa-check-square-o fa-2x"></i></td>
                            </tr>
                            <tr>
                                <td>Acceso a galería de candidatos</td>
                                <td><i class="fa fa-check-square-o fa-2x"></i></td>
                                <td><i class="fa fa-check-square-o fa-2x"></i></td>
                            </tr>
                            <tr>
                                <td>Entrevista virtual en chat</td>
                                <td><i class="fa fa-check-square-o fa-2x"></i></td>
                                <td><i class="fa fa-check-square-o fa-2x"></i></td>
                            </tr>
                            <tr>
                                <td>Entrevista virtual en chat</td>
                                <td>Hasta 5 entrevistas</td>
                                <td>Hasta 10 entrevistas</td>
                            </tr>
                            <tr>
                                <td>Evaluación psicométrica en línea</td>
                                <td></td>
                                <td>Hasta 3 evaluaciones</td>
                            </tr>
                            <tr>
                                <td>Reporte de entrevistas mensuales</td>
                                <td></td>
                                <td>Un reporte mensual</td>
                            </tr>
                        </tbody>
                    </table>

                    <button class="boton" onclick="document.getElementById('login').scrollIntoView()">CONTRATAR</button>
                    <br />
                    <br />
                    <h3><u>Talentos</u></h3>
                    <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>MEMBRESÍA</th>
                                <th>GENERAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Registro en la base de datos<b>*</b></td>
                                <td>Sin costo</td>
                            </tr>
                            <tr>
                                <td>Galeria</td>
                                <td>$ 50 MN</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><b>*</b>Vigencia de 3 meses, con opción de renovar.</p>

                    <button class="boton" onclick="document.getElementById('login').scrollIntoView()">CONTRATAR</button>
                    <br />
                    <br />
                    <h3><u>Publicidad</u></h3>
                    <br />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>MEMBRESÍA</th>
                                <th>GENERAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Publicidad estática siempre visible<b>*</b></td>
                                <td>$ 300 MN</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><b>*</b>Vigencia de 3 meses, con opción de renovar.</p>
                    <br />
                    <br />
                    <p>Consultar condiciones para el uso del servicio de publicidad.</p>

                    <button class="boton" onclick="document.getElementById('login').scrollIntoView()">CONTRATAR</button>
                    <br />

                </div>
            </div>
        </div>
    </section>

    <!-- PAGO -->
    <section class="service_pago text-left" id="pago">
        <div class="container">
            <div class="row">
                <div class="service-overlay"></div>
                <div class="col-md-12">
                    <h2>Pago de Servicios</h2>

                    <p>
                        <ul>
                            <li>
                                <i class="fa fa-credit-card fa-3x"></i>
                                <b>Depósito o transferencia electrónica</b><br /><br />
                            </li>
                            <br />
                            <li>
                                <b>BANCO:</b>  Santander <br /><br />
                            </li>
                            <br />
                            <li>
                                <b>CUENTA:</b> 000000000 <br /><br />
                            </li>
                            <br />
                            <li>
                                <b>CLABE:</b>  000000000 <br /><br />
                            </li>
                        </ul>
                        <br>
                        <br>
                    </p>
                    <div style="margin-right: 41em;">
                        <p align="justify">
                            Utilice como referencia su número de código asignado al momento de su registro.
                            <br />
                            <br />
                            Una vez realizado el pago por el servicio, es necesario enviar el comprobante de
                            pago al correo: <b>pagos@somostalentos.com</b> y posteriormente recibirá la notificación
                            de que su cuenta ha quedado activada.
                        </p>
                    </div>
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO -->
    <section class="contact text-center" id="contacto">
        <div class="container">
            <div class="row">
                <article class="contact-heading">
                    <h2>CONTACTO</h2>
                    <p align="center">Para cualquier asunto relacionado con el sitio, por favor comuníquese con nosotros
                        vía correo electrónico o al teléfono <b>(04455) 34 56 53 91</b></p>
                </article>
            </div>
        </div>
    </section>
    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="form">
                    <form action="contact.php" method="post">
                        <div class="sbtn col-md-12 text-center">
                            <input name="nombre" class="name form-input" type="text" placeholder="NOMBRE" style="text-transform: uppercase;">
                            <input name="email" class="email form-input" type="email" placeholder="EMAIL">
                            <input name="mensaje" class="message form-input" type="text" placeholder="MENSAJE" style="text-transform: uppercase;">
                            <div class="g-recaptcha" data-sitekey="6LfViQ4UAAAAAM9AAaWAfrejmpU8O1E8rRtuCBtR" data-theme="dark" style="margin-left: 36%;"></div>
                            <input class="submit-btn" type="submit">
                            <input class="submit-btn" type="hidden" name="accion" value="enviar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer text-center">
        <p>Derechos Reservados | <a href="#">Términos de uso y Políticas</a> | <a href="#">Aviso de Privacidad</a> | <a href="#">Asistencia</a></p>
    </footer>

    <!-- script -->
    <script src="<?=base_url()?>public/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>public/js/smoothscroll.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>public/js/login.js"></script>
	<script src="<?=base_url()?>public/js/jquery.validate.min.js"></script>
</body>
</html>


