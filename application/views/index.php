<?php
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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
</head>

<body>												
    <!-- Cabecera -->
    <header class="top-header">
        <div class="container">
            <div class="row header-row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <a href="index.php"><img src="<?=base_url()?>public/img/logotipo_somostalentos.jpg" alt="" class="logo" width="80" height="65"></a>
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
                                    <li><a href="<?=base_url()?>PanelControl">Panel de control</a></li>
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

                <button onclick="location.href = '<?php echo site_url('Login/cargar');?>'">LOGIN</button>
                <br>
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

                    <p align="justify">
                        Somos un grupo de profesionales Mexicanos con amplia y reconocida experiencia
                        en el ámbito de los recursos humanos, el desarrollo organizacional, la asesoría
                        empresarial, la capacitación especializada y el desarrollo humano, con<strong> el objetivo</strong>
                        de implementar alternativas innovadoras de búsqueda de talentos, adicionales a 
                        las que ya existen en el mercado.
                        <br />
                        <br />
                        Tenemos la firme convicción de que el área de recursos humanos debe continuar
                        evolucionando y ofrecer nuevas alternativas tecnológicas y humanas a las personas
                        en busca de oportunidades laborales y, al mismo tiempo, otorgar un servicio profesional
                        a las empresas para encontrar personas que poseen el talento adecuado a sus necesidades
                        organizacionales.
                        <br>
                        <br>
                    </p>

                    <h3>Cambiamos la forma de reclutar</h3>
                    <p align="justify">
                        En la actualidad se necesitan nuevos métodos de búsqueda de talentos más 
                        eficaces, menos costosos y que se invierta poco tiempo, éste sitio ofrece 
                        todas esas ventajas, es un sitio de interacción entre reclutadores y candidatos.
                    </p>
                </div>
                <h2>Valores</h2>
                <div class="col-md-12 services">
                    <div class="col-md-2 single-service col-xs-6 col-sm-3">
                        <i class="fa fa-blind"></i>
                        <h3><b>IGUALDAD</b></h3>
                        <p align="justify">Todos por igual merecemos las mismas oportunidades, sin discriminación.</p>
                    </div>

                    <div class="col-md-2 col-md-push-1 single-service col-xs-6 col-sm-3">
                        <i class="fa fa-child"></i>
                        <h3><b>INNOVACIÓN</b></h3>
                        <p align="justify">Transformar el proceso de atraer y elegir a una persona, a través de
                            establecer un enfoque diferente sobre el talento de un candidato.</p>
                    </div>
                </div>

                <div class="col-md-12  services bottom-services">

                    <div class="col-md-2 single-service col-sm-3 col-xs-6">
                        <i class="fa fa-group"></i>
                        <h3><b>COLABORACIÓN</b></h3>
                        <p align="justify">Ayudar a las empresas a conseguir los mejores talentos y apoyar a las personas a 
                                           encontrar nuevas las mejores oportunidades de desarrollo laboral y profesional.
                        </p>
                    </div>

                    <div class="col-md-2 col-md-push-1 single-service col-sm-3 col-xs-6">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h3><b>CONFIANZA</b></h3>
                        <p align="justify">Confiar en el talento de las personas.</p>
                    </div>
                    
                </div>
                
                <div class="col-md-12  services bottom-services">
                    <div class="col-md-2 single-service col-sm-3 col-xs-6">
                        <i class="fa fa-desktop"></i>
                        <h3><b>TECNOLOGÍA</b></h3>
                        <p align="justify">Usar la tecnología actual en favor de las empresas para facilitar y eficientar
                            diversas tareas de Recursos Humanos y para proporcionar una alternativa innovadora a las
                            personas en su búsqueda de oportunidades de desarrollo laboral.</p>
                    </div>
                    <div class="col-md-2 col-md-push-1 single-service col-sm-3 col-xs-6"></div>
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
                    Somos un medio tecnológico y humano de enlace efectivo, ágil, interactivo y
                    confiable, entre empresas y personas,<br /> para generar oportunidades laborales, 
                    eliminando diversas barreras para detectar talentos.
                </p>
            </div>

            <div class="portfolio-heading">
                <h2>VISIÓN</h2>
                <p>
                    Ser un medio tecnológico y humano que ayude a más personas a obtener el puesto de trabajo acorde 
                    <br />a su talento y habilidades, y a las empresas a conseguir a los candidatos con más capacidades.
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
                    <p align="justify">
                        Promover la igualdad de oportunidades de trabajo, sin importar la edad, el sexo, la religión,
                        el estado civil, los rasgos físicos y apariencia, las capacidades diferentes, el lugar de procedencia
                        o la preferencia sexual. Sólo importa <u>inicialmente</u> el talento para ser elegidos. Buscamos modificar
                        la percepción de los reclutadores, para que no desperdicien el talento de una persona y consideren que no
                        cumplen un perfil al 100% con la sola lectura de un Currículum Vitae. Promovemos la selección de personal
                        primero por su talento y después por otros factores.
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
                        <ul align="justify">
                            <li>Proveer a los reclutadores del mejor talento para cubrir sus vancantes, con acceso a una base de datos
                                de candidatos de todo tipo de perfiles personales y laborales: básicos,especiales,técnicos o profesionales.</li><br /> 
                            <li>Que los reclutadores conozcan a los candidatos por su perfil como personas y por sus talentos,
                                en vez de la simple lectura de su Currículum Vitae.</li><br /> 
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
                        <p align="justify"><i class="fa fa-check-square-o"></i> Facilitamos el trabajo al área de Recursos Humanos,
                                                                                a los Head-Hunters y a cualquier tipo de empresa,
                                                                                negocio o institución que requiera personas con el
                                                                                talento adecuado a sus perfiles laborales.
                        </p>
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
                <h3>!Innovamos el proceso de atraer y elegir al talento humano!</h3>
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
                        En vez de revisar un Currículum Vitae, podrás entrevistar a las personas para conocer sus habilidades y decidir si es
                        el talento que necesitas.
                    </p>
                    <p align="justify">
                        <i class="fa fa-desktop fa-3x"></i><b> Entrevista en línea.- </b> Si prefieres, puedes generar una entrevista  por
                        escrito y enviarla al candidato para que la conteste y decidir si es el talento que necesitas.
                        Dependiendo del plan que contrates, podrás crear tus propias entrevistas y guardarlas para aplicarlas las veces que
                        necesites, o bien, editarlas en función de tus necesidades y lo que necesites conocer.
                    </p>
                    <p align="justify">
                        <i class="fa fa-object-group fa-3x"></i><b> Evaluación psicométrica en línea.- </b> Podrás aplicar exámenes 
                        psicométricos al candidato vía internet, recibiendo el resultado en tu correo electrónico y posteriormente lleves
                        a cabo la interpretación respectiva, éste servicio te facilitará el proceso de selección, ya que tendrás un acceso para
                        aplicar hasta 3 exámenes por candidato, evaluando factores tales como: Inteligencia, valores, habilidades de supervisión
                        y aptitudes para las ventas, de acuerdo a lo requerido en tu perfil de puesto.<br  /><br  />
                        Tendrás la opción de asistir a nuestros cursos realizados en la Cd. de México sobre el tema de evaluaciones psicométricas
                        y/o el proceso efectivo de atracción de talento humano, de acuerdo al calendario mensual propuesto, a costos preferenciales 
                        al contar con tu registro de "Cazatalentos".
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
                                <td>Costo mensual + IVA *</td>
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
                    <p><b>*</b>Se pueden realizar pagos mensuales, bimestrales, trimestral, semestral o anual.</p>

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
                                <td>$ 50 MN (Pago Mensual)</td>
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
                <div class="form" align="center">
                  <?php
                    echo form_open();
                    $dataNombre = array(
                    		'id'            => 'nombre',
			        'name'          => 'nombre',
			        'class'         => 'name form-input',
			        'type'          => 'text',
			        'placeholder'   => 'NOMBRE',
			        'style'         => 'text-transform: uppercase;',
			        'required'      => 'required'
					);
					$dataEmail = array(
					'id'          => 'email',
					'name'        => 'email',
					'class'       => 'email form-input',
					'type'        => 'email',
					'placeholder' => 'EMAIL',
					'required'      => 'required'
					);
					$dataMensaje = array(
					'id'          => 'mensaje',
					'name'        => 'mensaje',
					'class'       => 'message form-input',
					'type'        => 'text',
					'placeholder' => 'MENSAJE',
					'style'       => 'text-transform: uppercase;',
					'required'      => 'required'
					);
					$dataBoton = array(
					'class' => 'submit-btn',
					'type'  => 'submit',
					'value' => 'Enviar',
                                        'name'  => 'enviar'
					);
                    echo form_input($dataNombre, set_value('nombre'));
                    echo form_input($dataEmail, set_value('email'));
                    echo form_input($dataMensaje, set_value('mensaje')); 
                    echo '<div class="g-recaptcha" data-sitekey="6LfViQ4UAAAAAM9AAaWAfrejmpU8O1E8rRtuCBtR" data-theme="dark"></div>';  	
                    echo form_submit($dataBoton);
                    echo form_close();?>
                  <?php if( isset($captchamsn) ): ?>
						<script> window.location.hash='contacto';
						setTimeout("document.getElementById('msn').style.display='none';", 5000);</script>
						<div id='msn'> <p style="color:red;"><?php echo $captchamsn; ?></p></div>
						
		 <?php endif; ?>
                 <?php if( isset($captchaexito) ): ?>
						
						<div id='msn2'><p style="color:green;"><?php echo $captchaexito; ?></p></div>
						<script> window.location.hash='contacto'; email.value = ""; mensaje.value = ""; nombre.value = "";                                          setTimeout("document.getElementById('msn2').style.display='none';", 5000);</script>
		 <?php endif; ?>
                </div> 
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="footer text-center">
        <p>Derechos Reservados | <a href="<?=base_url()?>public/docs/Terminos_de_Uso.docx">Términos de uso y Políticas</a> | <a href="<?=base_url()?>public/docs/Aviso_de_Privacidad.docx">Aviso de Privacidad</a> | <a href="#">Asistencia</a></p>
    </footer>

    <!-- script -->
    <script src="<?=base_url()?>public/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>public/js/smoothscroll.js"></script>
    <script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>public/js/jquery.validate.min.js"></script>
</body>
</html>


