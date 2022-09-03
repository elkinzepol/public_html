<?php
  ob_start();
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }

?>
<!DOCTYPE html>
<!--
Template Name: Color
Version: 1.2
Author: ThemeintheBox
Author URL: https://www.themeinthebox.com/color-onepage-template-a/
*/
/*************************
*******Typography******
**************************/
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Pagina personal">
    <meta name="keywords" content="Servicio técnico,Elkin López,Elkin lopez,mantenimiento,PC,Computador,reparacion,instalacion,cctv,camaras,seguridad,Diseño grafico,publicidad,soporte">
    <meta name="author" content="Elkin López">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elkinzepol | <?php echo ucfirst($_SESSION['nombre']); ?> </title>
  
  <!-- Nucleo CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/owl.carousel.css" rel="stylesheet">
    <link href="../../css/owl.transitions.css" rel="stylesheet">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link rel="../../stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="../../stylesheet" href="css/sweetalert.css">
    <link rel="../../stylesheet" href="css/style.css">

    <!--Css Propias-->
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/secciones.css">
    <link rel="stylesheet" href="../../css/redes.css">
    <link rel="stylesheet" href="../../css/bottop.css">
    <link href="../../css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/sweetalert.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="../../css/index.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://use.fontawesome.com/502b7294a9.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/ico/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="../../images/ico/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="../../images/ico/favicon-16x16.png">

  	<!-- Nucleo cookies -->
  	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  	<script src="../../js/cookies.js" type="text/javascript"></script>
  	</head>
  	<body id="home" class="homepage" ondragstart="return false" onselectstart="return false">
  
  <!--Boton scroll top-->
  <a id="button"></a>

  <!--Mensaje de cookies-->
  <div id="cookieConsent">
      <div id="closeCookieConsent">x</div>
        Esta web utiliza cookies para obtener datos estadísticos de la navegación de sus usuarios. Si continúas navegando consideramos que aceptas su uso. 
        <a href="politicas de privacidad.php" target="_blank">Mas informacion</a> 
        <a onclick="aceptar_cookies();" class="cookieConsentOK">Esta Bien</a>
  </div>
  <!--/Mensaje de cookies-->

  <!--Slider de redes sociales-->
  <div class="red">
      <div id="facebook"><a href="https://www.facebook.com/Elkinzepol" target="_blank" class="fa fa-facebook"></a></div>
      <div id="pinterest"><a href="https://www.pinterest.es/elkinlpezmosque" target="_blank" class="fa fa-pinterest"></a></div>
      <div id="twitter"><a href="https://twitter.com/Elkin_Luis" target="_blank" class="fa fa-twitter"></a></div>
      <div id="correo"><a href="mailto:buzon@elkinzepol.online" class="fa fa-envelope"></a></div>
  </div>
  <!--/Slider de redes sociales-->

    <header id="top-header" class="navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Responsive nav boton  -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Panel de navegación</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /Responsive nav boton -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a class="smooth-scroll" data-section="#home" href="#home" >
                            <img src="../../images/logo.png" alt="Elkinzepol">
                        </a>
                    </div>
                <!-- Opciones del menu-->    
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                
                <ul class="nav navbar-nav navbar-right">
                    <li class="scroll"><a href="#home" data-section="#home">Inicio</a></li>
                    <li class="scroll"><a href="#about" data-section="#about">¿Quiénes somos?</a></li>
                    <li class="scroll"><a href="#features" data-section="#features">Productos</a></li>
                    <li class="scroll"><a href="#services" data-section="#services">Servicios</a></li>
                    <li class="scroll"><a href="#portfolio" data-section="#portfolio">Portafolio</a></li>
                    <li class="scroll"><a href="#contact-area" data-section="#contact-area">Contáctenos</a></li>
                    
                    <!-- Menu  -->
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-user" style="color:#72C05B"></i> <span></span>Iniciado
                        como: <?php echo ucfirst($_SESSION['nombre']); ?>
                       <span class="caret"></span></a>
                    <ul class="dropdown-menu animated flipInX">
                    	<li><a href="../../controller/cerrarSesion.php"><span class="fa fa-key" style="color:#ffdf00"></span>&nbsp;Cambiar contraseña</a>
                        </li>
                        <li><a href="../../controller/cerrarSesion.php"><span class="fa fa-sign-out" style="color:red"></span>&nbsp;Cerrar sesion</a>
                        </li>
                    </ul>
                    </li>
                 </ul>
              </div>   
            </div>
        </header>
	<section id="main-slider">
        <div class="owl-carousel">
            
          <!--Item1 Slider-->
            <div class="item" style="background-image: url(../../images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>Soporte técnico especializado, solo con <span>Elkinzepol</span>.</h2>
                                    <p>El mantenimiento de hardware y software es crítico, prioritario e imprescindible para mantener funcionando sus sistemas. </p>
                                    <a class="btn btn-primary btn-lg" href="../../soporte tecnico.html">Leer Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Item1 Slider-->

            <!--Item2 Slider-->
            <div class="item" style="background-image: url(../../images/slider/bg2.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                  <h2>Cámaras de seguridad y sistemas de circuito cerrado <span>CCTV</span>.</h2>
                                    <p> Siempre hay una solución de seguridad para su hogar o empresa. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Leer Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Item1 Slider-->

            <!--/Item3 Slider-->
            <div class="item" style="background-image: url(../../images/slider/bg3.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="carousel-content text-center">
                                    <h2>Diseño <span>Grafico</span>.</h2>
                                    <p>Nuestra labor como diseñadores gráficos es la de encontrar la solución que mejor se ajuste a tus necesidades de comunicación visual. Ya sea para un folleto promocional, o para diseñar toda la imagen corporativa de tu empresa o entidad, trabajamos con absoluta dedicación y siempre buscando el diseño más profesional... </p>
                                    <a class="btn btn-primary btn-lg" href="#">Leer Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/Item3 Slider-->

        </div><!--/.owl-carousel-->
    </section><!--/#main-slider-->

  <!--Acerca de-->    
    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">BIENVENIDOS A NUESTRA EMPRESA</h2>
                <p class="text-center wow fadeInDown">Nuestra empresa sin dudad será la mejor elección</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Un poco más sobre nosotros</h3>
                    <p>Somos una empresa del sector de la informática y las telecomunicaciones que nació en Valledupar en el año 2011, con el objetivo de prestar servicios de ingeniería a las empresas y hogares del municipio. Prestamos servicios eficientes y oportunos, a cada uno de nuestros clientes.</p>

                    <p>Para esto me he formado profesionalmente y comprometido con nuestros ideales.</p>

                    <a class="btn btn-primary" href="#">Descubrenos</a>

                </div>
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="../../images/feature-2.png" alt="">
                </div>
            </div>
        </div>
    </section><!--/Acerca de-->


  <!--Caracteristicas--> 
    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Características impresionantes</h2>
                <p class="text-center wow fadeInDown">Nuestra empresa se encarga de mantener todos sus sistemas informáticos funcionando perfectamente.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="../../images/main-feature.png" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Gestión de incidentes, peticiones y de problemas</h4>
                            <p> Atención personalizada en su domicilio.  </p>
                            <br>Reparamos su equipo Pc en la comodidad de su hogar o empresa sin que esto signifique costos extras para usted, ya nuestra empresa se dedica principalmente al servicio en técnico en terreno.</br>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Logistica</h4>
                            <p> Rapidez y exactitud en la ejecución y entrega de servicios.</p>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Asesorías</h4>
                            <p> Guiamos para que mantenga un alto standard en tecnología</p>
                              <br> Se entrega la mejor asesoría en relación con la adquisición e implementación de nuevas tecnologías y compatibilidades en relación a los equipos que actualmente mantengan nuestros clientes.</br>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Vigilancia Efectiva</h4>
                            <p> Además de las ventajas de un sistema de vigilancia convencional, usted podrá visualizar y controlar fácilmente todas las cámaras usando un navegador web o nuestro software de administración de vigilancia desde cualquier computadora con conexión a Internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Caracteristicas--> 

    <!--Banner-->
    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2  style="text-transform: uppercase;" class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"> <?php echo ucfirst($_SESSION['nombre']); ?> HAS TOMADO LA MEJOR DECISIÓN, <span>BIENVENIDO</span></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms"><b> <i> “Nuestra ilusión y la razón de existir es servir a nuestros clientes a cada instante de nuestras vidas”.</i> </b>
                  <br>En nombre de Elkinzepol, les damos la más cordial bienvenida a nuestra página web.</br> 
                  <br>En ella encontrarán la información que necesitan saber de nuestros servicios.</br>
        </p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Consiguelo ahora</a></p>
            </div>
        </div>
    </section><!--/Banner-->

    <!--Servicios-->
    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros servicios</h2>
                <p class="text-center wow fadeInDown">Las organizaciones en el mundo entero (tanto públicas, como privadas) dependen cada vez más del uso de las Tecnologías de Información como un recurso fundamental para lograr los objetivos de su negocio. La administración de los servicios de tecnologías de información busca definir y mantener los niveles requeridos de servicios de tecnologías de las empresas, para lograr una adecuada satisfacción de los clientes, basándose en la aplicación de las mejores prácticas, marcos referenciales y estándares de aceptación internacional.</p>
            </div>

            <div class="row">
                <div class="features">
                     
                     <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h3 class="features-title font-alt">Servicio Técnico</h3>
                            Contamos con personal calificado que puede diagnosticar y solucionar cualquier falla.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <h3 class="features-title font-alt">Cámaras de Seguridad IP</h3>
                           Le damos la posibilidad de tener un sistema de vigilancia efectivo utilizando sofisticadas cámaras de alto rendimiento para monitorizar y proteger sus valiosas propiedades de manera efectiva.
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="features-item">
                            <div class="features-icon">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <h3 class="features-title font-alt">Diseño grafico</h3>
                            Encontraremos la solución que mejor se ajuste a tus necesidades de comunicación visual. Ya sea para un folleto promocional, o para diseñar toda la imagen corporativa de tu empresa o entidad, trabajamos con absoluta dedicación y siempre buscando el diseño más profesional. No nos conformamos con diseños mediocres.
                        </div>
                    </div>

                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/Servicios-->

    <!--Portafolio-->
    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Nuestros Trabajos</h2>
                <p class="text-center wow fadeInDown">Nuestra mejor carta de presentación son nuestros Clientes satisfechos...</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">Todos los trabajos</a></li>
                    <li><a href="#" data-filter=".animation">Animacion</a></li>
                    <li><a href="#" data-filter=".Business">Empresarial</a></li>
                    <li><a href="#" data-filter=".art">Artístico</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item animation">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/01.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 1</h3>
                            <a class="preview" href="../../images/portfolio/01.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->


                <div class="portfolio-item Business art">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            <a class="preview" href="../../images/portfolio/02.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">
                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            <a class="preview" href="../../images/portfolio/03.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            <a class="preview" href="../../images/portfolio/04.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation art">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            <a class="preview" href="../../images/portfolio/05.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            <a class="preview" href="../../images/portfolio/06.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item animation art">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 7</h3>
                            <a class="preview" href="../../images/portfolio/07.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class="portfolio-item Business">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="../../images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 8</h3>
                            <a class="preview" href="../../images/portfolio/08.jpg" rel="prettyPhoto">
                                <img src="../../images/portfolio/expand.png" alt="">

                            </a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->
    </section><!--/#portfolio-->

  <!--Testinomial-->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                  <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail wow rotateInUpLeft" src="images/testimonial/01.jpg" alt=""></p>
                                <h4 class="wow rotateInUpLeft">Elkin Luis López Mosquera</h4>
                                <small class="wow rotateInUpLeft">Ingeniero de Sistemas</small>
                                <p><b><i class="wow rotateInUpLeft">"Puede que hoy tan solo seas un estudiante, pero puede que mañana seas el profesor que enseñe a los demás todos tus conocimientos."</b></i></p>
                            </div>

                            <!-- Otro item
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="../../images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        -->

                        <!-- Controles -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                        </div><!--/Controles -->
                    </div>
                </div>
            </div><!--/row-->
        </div><!--/container-->
    </section><!--/#testimonial-->

    <!--Contactenos-->
    <section id="contact-area">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible;">Enviar Mensaje</h2>
                    <p class="text-center wow fadeInDown animated" style="visibility: visible;">Escríbenos algo. Tu palabra es lo más importante para nosotros.</p>
                </div>
                <form id="main-contact-form" name="contact-form" method="post" action="enviarmail.php">
                    <div class="col-lg-6 animated animate-from-left" style="opacity: 1; left: 0px;">

                        <div class="form-group">
                                <label for="name">Nombre (Obligatorio)</label>
                                <input id="name" type="text" name="name" class="form-control" placeholder="Nombre" required>
                            </div>
                        <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Asunto" required>
                        </div>

                    </div>
                    <div class="col-lg-6 animated animate-from-right" style="opacity: 1; right: 0px;">
                        <div class="form-group">
                            <label for="message">Asunto</label>
                            <textarea name="message" id="message" class="form-control" rows="8" placeholder="Mensaje" required></textarea>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-lg btn-send-msg">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>          
    </section><!--/Contactenos-->

    <!--/Pie-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center">
                        &copy; 2018 Elkinzepol. Diseñado y Desarrollado por <a target="_blank" href="http://www.elkinzepol.online" title="Elkin López Mosquera">www.elkinzepol.online</a>
                    </p>
                    <p class="text-center">
                      <a href="mailto:elkinluislopez@gmail.com">elkinluislopez@gmail.com</a>
                    </p>
                    <!--Redes sociales-->
                    <ul class="social-icons text-center">
                        <li>
                          <a href="https://www.facebook.com/Elkinzepol" target="_blank"> <i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                          <a href="https://twitter.com/Elkin_Luis" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                          <a href="https://plus.google.com/u/0/113571342953243390175" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                          <a href="https://www.pinterest.es/elkinlpezmosque/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                        <li>
                          <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                    </ul><!--/Redes sociales-->
                </div>
            </div>
        </div>

  <!--Scripts basicos--> 
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/mousescroll.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/jquery.isotope.min.js"></script>
    <script src="../../js/jquery.inview.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/sweetalert.min.js"></script>
    <script src="../../js/operaciones.js"></script>
    <!--/Scripts basicos--> 
</body>
</html>