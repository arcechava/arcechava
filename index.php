<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ing. Elvis Arce Chavarría</title>

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
		<link rel="icon" type="image/png" href="chava.ico" />
		<!-- Custom CSS -->
        <link href="css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <!-- Template js -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/script.js"></script>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Analystics-->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-63709857-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
    
    <body>
        
        <!-- Start Logo principal 
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                            <h1>Elvis Arce Chavarr&iacute;a</h1>
                            <span>Ingeniero de Sistemas</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        <!-- Contenido Principal -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    <!-- Columna Izquierda-->
                    <div class="col-md-3">
                        
                        <div class="menu-item red">
                            <a href="#about-modal" data-toggle="modal">
                                <i class="fa fa-user"></i>
                                <p>Sobre mi</p>
                            </a>
                        </div>
                        
                        <div class="menu-item dorado">
                            <a href="#cursos_seminarios-modal" data-toggle="modal">
                                <i class="fa fa-mortar-board"></i>
                                <p>Cursos - Workshop's</p>
                            </a>
                        </div>

                        <div class="menu-item blue">
                            <a href="#conocimientos-modal" data-toggle="modal">
                                <i class="fa fa-magic"></i>
                                <p>Conocimientos</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                                    
                                </ol>
                            <!-- Slide -->
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="images/elvis_arce_tarjetas_1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/elvis_arce_tarjetas_2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/titulo.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/work_shop.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/pensar_programar.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/ing_elvis_arce_chavarria.jpg">
                                    </div> 
                                </div>

                            </div>
                        </div>
                        
                        <!-- Iconos del centro -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item green ">
                                    <a href="#service-modal" data-toggle="modal">
                                        <i class="fa fa-area-chart"></i>
                                        <p>Servicios</p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange ">
                                    <a href="#portfolio-modal" data-toggle="modal">
                                        <i class="fa fa-file-photo-o"></i>
                                        <p>Portafolio</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- Iconos del lado derecho -->
                    <div class="col-md-3">
                        
                        <div class="menu-item red ">
                                    <a href="#team-modal" data-toggle="modal">
                                        <i class="fa fa-users"></i>
                                        <p>Clientes</p>
                                    </a>
                                </div>

                        <div class="menu-item dorado">
                            <a href="#exp_lab-modal" data-toggle="modal">
                                <i class="fa fa-university"></i>
                                <p>Experiencia Profesional</p>
                            </a>
                        </div>

                        <div class="menu-item blue">
                            <a href="#contact-modal" data-toggle="modal">
                                <i class="fa fa-envelope-o"></i>
                                <p>Contacto</p>
                            </a>
                        </div>
                        
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fa fa-copyright">&nbsp; Todos los derechos reservados</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        <!-- Start About Us Section -->
        <div class="section-modal modal fade" id="about-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Sobre Mi</h3>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-text">
                                <p>Titulado en Ingeniería de Sistemas, egresado de la Facultad de Ingeniería de la Universidad
                                    Peruana Unión, proactivo con capacidad para trabajar en equipo, bajo presión y con un
                                    enfoque sistémico, con fuerte compromiso, criterio, análisis y entusiasmo en las actividades
                                    que realizo. Deseo seguir crecer profesionalmente, y continuar aplicando mis conocimientos
                                    obtenidos tanto en mis estudios como en mi experiencia y formación profesional como
                                    Ingeniero de Sistemas.
                                </p>
                                <p class="text-left">Poseo Conocimientos y Dominio en: </p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <ul>
                                            <li><i class="fa fa-check-square-o"></i>Programas de Escritorio</li>
                                            <li><i class="fa fa-check-square-o"></i>Microsoft Office 15</li>
                                            <li><i class="fa fa-check-square-o"></i>Motores de Base de Datos (MySQL, Postgres, SQL Server 2012, Oracle)</li>
                                            <li><i class="fa fa-check-square-o"></i>Adobe Creative Cloud (Fireworks, Photoshop)</li>
                                            <li><i class="fa fa-check-square-o"></i>Dominio del idioma inglés Técnico-Intermedio</li>
                                            <li><i class="fa fa-check-square-o"></i>Desarrollo aplicaciones para entornos Web (Frameworks PHP) y Móviles (Android, IOS)</li>
                                            <li><i class="fa fa-check-square-o"></i>Diseño, Desarrollo e Implementación de Sistemas de
                                                inteligencia de Negocios (BI) con herramientas OpenSource (PENTAHO)</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <h4><a href="https://docs.google.com/document/d/184ZYyA4xeoiY07hTVmrKpr3CTtZ_rsvH52O_QKCccX8/edit?usp=s
                                                haring" target="_blank">* CV Documentado</a></h4>
                                    </div>
                                    <!-- MENÚ TAB MISION, VISION, HISTORIA-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="custom-tab">
                                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">Misi&oacute;n</a></li>
                                                    <li><a href="#tab-2" role="tab" data-toggle="tab">Visi&oacute;n</a></li>
                                                    <li><a href="#tab-3" role="tab" data-toggle="tab">Historia</a></li>
                                                </ul>

                                            <div class="tab-content">

                                            <div class="tab-pane active" id="tab-1">
                                                <p>Aplicar los conocimientos y experiencias adquiridas durante mi formaci&oacute;n Integral
                                                 brindando alternativas de solución a los problemas de TECNOLOGÍAS DE INFORMACIÓN,
                                                 con compromiso y criterio haciendo la diferencia, con ética profesional y valores cristianos.
                                                </p>    
                                            </div>


                                            <div class="tab-pane" id="tab-2">
                                                <p>Ser reconocido como un profesional ético comprometido con su trabajo y clientes.
                                                </p>
                                            </div>


                                            <div class="tab-pane" id="tab-3">
                                                <p>Nacido en el distrito de Chilete - Cajamarca - Per&uacute; </p>
                                            </div>

                                </div><!-- /.tab-content -->

                            </div>
                                    </div>
                                </div><!-- /.row -->
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End About Us Section -->    

        <!-- Start Latest News Section -->
        <div class="section-modal modal fade" id="cursos_seminarios-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Cursos - Workshop's</h3>
                            <p>Asistencia a cursos y workshop's</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/google_2014.jpg" class="img-responsive" alt="">
                                <h4 id="justify"><a href="#">Woorkshop Google 2015</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Agosto, 2014</li>
                                        <li><i class="fa fa-tag"></i> Workshop</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/cosudi_2013.jpg" class="img-responsive" alt="">
                                <h4 id="justify"><a href="#">1er Congreso Sudamericano de Investigaci&oacute;n en Instituciones Advestistas 
                                    "Investigaci&oacute;n formativa y aprendizaje permanente"</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Setiembre, 2013</li>
                                        <li><i class="fa fa-tag"></i> Congreso</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/diplomado_gestion_adm_2012.jpg" class="img-responsive" alt="">
                                <h4 id="justify"><a href="#">Diplomado en Simplificaci&oacute;n Administrativo - PCM</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Octubre, 2012</li>
                                        <li><i class="fa fa-tag"></i> Diplomado</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/ceplan_2012.jpg" class="img-responsive" alt="">
                                <h4 id="justify"><a href="#">Actualizaci&oacute;n del plan estrat&eacute;gico de desarrollo nacional al 2021</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Febrero, 2012</li>
                                        <li><i class="fa fa-tag"></i> Seminario</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/conf_gestion_emp_ti_2011.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Conferencia Internacional 2011</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Octubre, 2011</li>
                                        <li><i class="fa fa-tag"></i> Conferencia</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/workshop_google_2011.jpg" class="img-responsive" alt="">
                                <h4><a href="#">Workshop Google 2011</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Octubre, 2012</li>
                                        <li><i class="fa fa-tag"></i> Workshop</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/gestion_sistemas_2010.jpg" class="img-responsive" alt="">
                                <h4 id="justify"><a href="#">II Conferencia Internacional de Sistemas</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Octubre, 2010</li>
                                        <li><i class="fa fa-tag"></i> Conferencia</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="latest-post">
                                <img src="images/workshop/infraestructura_ti_2010.jpg" class="img-responsive" alt="">
                                <h4 id="justify"><a href="#">Gobernabilidad de la Infraestructura en TI y la Ingenier&iacute;a de Software
                                 en el contexto de las PYMES y norma ISO 29110</a></h4>
                                <div class="post-details">
                                    <ul>
                                        <li><i class="fa fa-university"></i> Lima</li>
                                        <li><i class="fa fa-calendar"></i> Mayo 2010</li>
                                        <li><i class="fa fa-tag"></i> Seminario</li>
                                    </ul>
                                </div>
                                <p></p>
                                
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
        <!-- End Worksho's Section -->

        <!-- STAR SECTION  DE CONOCIMIENTOS -->
        <div class="section-modal modal fade" id="conocimientos-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Mis Conocimientos</h3>
                            <p>"A la varguandia de las nuevas tendencias Tecnol&oacute;gicas"</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-html5"></i>
                                <div class="feature-content">
                                    <h4>Web 2.0 & 3.0</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-apple"></i>
                                <div class="feature-content">
                                    <h4>IOS Apps</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-android"></i>
                                <div class="feature-content">
                                    <h4>Android Apps</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-windows"></i>
                                <div class="feature-content">
                                    <h4>Windows Phone</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-file-code-o"></i>
                                <div class="feature-content">
                                    <h4>Sistemas Web</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-cubes"></i>
                                <div class="feature-content">
                                    <h4>Procesos</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-database"></i>
                                <div class="feature-content">
                                    <h4>Base de Datos</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-wifi"></i>
                                <div class="feature-content">
                                    <h4>Redes</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-google-plus"></i>
                                <div class="feature-content">
                                    <h4>Herramientas Web ON-LINE</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-facebook"></i>
                                <div class="feature-content">
                                    <h4>Redes Sociales</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-youtube-play"></i>
                                <div class="feature-content">
                                    <h4>Youtube</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-skype"></i>
                                <div class="feature-content">
                                    <h4>Skype</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-dropbox"></i>
                                <div class="feature-content">
                                    <h4>Dropbox</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-joomla"></i>
                                <div class="feature-content">
                                    <h4>Joomla</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-wordpress"></i>
                                <div class="feature-content">
                                    <h4>Wordpress</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="feature">
                                <i class="fa fa-github-square"></i>
                                <div class="feature-content">
                                    <h4>GIT - GITHUB</h4>
                                </div>
                            </div>
                        </div><!-- /.col-md-3 -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="skill-shortcode">

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>HTML & CSS</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="90">
                                            <span class="progress-bar-span" >90%</span>
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>PHP 5</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                                            <span class="progress-bar-span" >80%</span>
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>MySql</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="70">
                                            <span class="progress-bar-span" >70%</span>
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Bootstrap 3</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="55">
                                            <span class="progress-bar-span" >85%</span>
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>JQuery UI</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="40">
                                            <span class="progress-bar-span" >40%</span>
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Joomla</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="90">
                                            <span class="progress-bar-span" >90%</span>
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Wordpress</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="80">
                                            <span class="progress-bar-span" >80%</span>
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <div class="skill">
                                    <p>GIT - GITHUB</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="75">
                                            <span class="progress-bar-span" >75%</span>
                                            <span class="sr-only">75% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Photoshop CC</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="65">
                                            <span class="progress-bar-span" >45%</span>
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>  
                                </div>

                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Fireworks CC </p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="70">
                                            <span class="progress-bar-span" >70%</span>
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Android SO</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="70">
                                            <span class="progress-bar-span" >70%</span>
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>IOS</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="65">
                                            <span class="progress-bar-span" >65%</span>
                                            <span class="sr-only">65% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Framework Laravel</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="85">
                                            <span class="progress-bar-span" >85%</span>
                                            <span class="sr-only">85% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>CodeIgniter Framework</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="75">
                                            <span class="progress-bar-span" >75%</span>
                                            <span class="sr-only">75% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>YII Framework 2</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="65">
                                            <span class="progress-bar-span" >65%</span>
                                            <span class="sr-only">65% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>JAVA</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="40">
                                            <span class="progress-bar-span" >40%</span>
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>SQL Server</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="60">
                                            <span class="progress-bar-span" >60%</span>
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>PENTAHO BI</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="60">
                                            <span class="progress-bar-span" >60%</span>
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>Python - Django</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="45">
                                            <span class="progress-bar-span" >45%</span>
                                            <span class="sr-only">45% Completado</span>
                                        </div>
                                    </div>  
                                </div>
                                <!-- Progress Bar -->
                                <div class="skill">
                                    <p>.NET C#</p>          
                                    <div class="progress">         
                                        <div class="progress-bar" role="progressbar"  data-percentage="30">
                                            <span class="progress-bar-span" >30%</span>
                                            <span class="sr-only">30% Completado</span>
                                        </div>
                                    </div>  
                                </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End SECTION DE CONOCIMIENTOS -->

        <!-- Start Service Section -->
        <div class="section-modal modal fade" id="service-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Servicios & Productos</h3>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-css3 pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Web 2.0 & 3.0</h4>
                                        <p>Dise&ntilde;o y Desarrollo de Sitios Web, Portales Administrables,
                                        Aulas Virtuales</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-android pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Apps M&oacute;viles</h4>
                                        <p>Dise&ntilde;o y Desarrollo de Apps para SO Android, Iphone, Ipad, Windows Phone</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-file-code-o pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Sistemas Web</h4>
                                        <p>An&aacute;lisis, Dise&ntilde;o y Desarrollo de Sistemas Web con Frameworks
                                     (Laravel, CodeIgniter, Yii)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-cubes pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Procesos</h4>
                                        <p>An&aacute;lisis, Dise&ntilde;o y Modelado de Procesos Empresariales BPM - BIZAGI </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-google-plus pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Herramientas Web ON-LINE</h4>
                                        <p>Capacitaci&oacute;n en Herramientas Web ON-LINE (Gmail, GoodleDocs, Outlook, Dropbox, etc) </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-area-chart pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Marketing Digital</h4>
                                        <p>Desarrollo de Estrategios en proyectos de Marketing Digital, 
                                        Posicionamiento Web (SEO - SEM)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-desktop pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Soporte de TI</h4>
                                        <p>Soporte, Mantenimiento y Configuraci&acute;n en TI (PC, Laptop, Redes
                                        M&oacute;viles)</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-search pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Dominios</h4>
                                        <p>Venta de Dominio de cualquier extensi&oacute;n
                                         ejm: www.tunombre.com.pe</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="feature-2">
                                <div class="media">
                                    <i class="fa fa-check pull-left"></i>
                                    <div class="media-body">
                                        <h4 class="media-heading">Hosting</h4>
                                        <p>Alquiler de Hosting (espacio en la internet) según las necesidades de tu negocio</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.col-md-4 -->
                        
                    </div><!-- /.row -->
                </div>
                
                <div class="pricing-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Dominios .pe </h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">S/. 120<span>.00</span></div>
                                        <div class="interval">x a&ntilde;o</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>.com.pe - .edu.pe - .gob.pe</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="http://arcechava.com" class="btn-system btn-small">SOLICITAR</a>
                                    </div>
                                </div>
                                <li>&nbsp;</li>
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Dominios .com</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">S/. 50<span>.00</span></div>
                                        <div class="interval">x a&ntilde;o</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>.net - .org - .info</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="http://arcechava.com" class="btn-system btn-small">SOLICITAR</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Hosting Personal</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">S/. 150<span>.00</span></div>
                                        <div class="interval">Desde - x a&ntilde;o</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>02 GB de Almacenamiento</li>
                                            <li>100 GB de Tranferencia Mensual</li>
                                            <li>Sub Dominios Ilimitados</li>
                                            <li>30 Cuentas de Correo</li>
                                            <li>Instalador de scripts Autom&aacute;tico</li>
                                            <li>Constructor de sitios</li>
                                            <li>Servidores Estables</li>
                                            <li>Certificado se Seguridad SSL</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="http://arcechava.com" class="btn-system btn-small">SOLICITAR</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Hosting Premium</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">S/. 350<span>.00</span></div>
                                        <div class="interval">Desde - x A&ntilde;o</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>10 GB de Almacenamiento</li>
                                            <li>Tranferencia Mensual Ilimirada</li>
                                            <li>Sub Dominios Ilimitados</li>
                                            <li>100 Cuentas de Correo</li>
                                            <li>Instalador de scripts Autom&aacute;tico</li>
                                            <li>Constructor de sitios</li>
                                            <li>Servidores Estables</li>
                                            <li>Certificado se Seguridad SSL</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="http://arcechava.com" class="btn-system btn-small">Solicitar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="pricing-table">
                                    <div class="plan-name">
                                        <h3>Hosting Professional</h3>
                                    </div>
                                    <div class="plan-price">
                                        <div class="price-value">S/. 700<span>.00</span></div>
                                        <div class="interval">Desde A&ntilde;o</div>
                                    </div>
                                    <div class="plan-list">
                                        <ul>
                                            <li>Almacenamiento Ilimitado</li>
                                            <li>Tranferencia Mensual Ilimitado</li>
                                            <li>Sub Dominios Ilimitados</li>
                                            <li>Cuentas de Correo Ilimitado</li>
                                            <li>Instalador de scripts Autom&aacute;tico</li>
                                            <li>Constructor de sitios</li>
                                            <li>Servidores Estables</li>
                                            <li>Certificado se Seguridad SSL</li>
                                        </ul>
                                    </div>
                                    <div class="plan-signup">
                                        <a href="http://arcechava.com" class="btn-system btn-small">Solicitar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Service Section -->        
        
        <!-- Start Portfolio Section -->
        <div class="section-modal modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Portafolio</h3>
                            <p>Trabajos Realizados</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/ggc.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>I.E Gran Guzmango C&aacute;pac</h4>
                                    <a href="http://www.ggc.edu.pe/" target="_blank"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/radio_alt_tocache.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Radio y TV Alto Huallaga - Tocache</h4>
                                    <a href="http://www.radioaltohuallaga.com.pe/" target="_blank"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/cacao_del_oriente.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Cacao del Oriente - Tarapoto</h4>
                                    <a href="http://www.cacaodeloriente.pe/" target="_blank"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/radio_concierto.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>Radio Concierto - Tocache</h4>
                                    <a href="http://www.radioconcierto.pe/" target="_blank"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/app_movil_admision_2.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>App M&oacute;vil - UPeU</h4>
                                    <a href="http://www.radioconcierto.pe/" target="_blank"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="portfolio-item">
                                <img src="images/portfolio/app_movil_admision.jpg" class="img-responsive" alt="...">
                                <div class="portfolio-details text-center">
                                    <h4>App M&oacute;vil - Admisi&oacute;n UPeU</h4>
                                    <a href="#"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Portfolio Section -->
        
        <!-- Start Team Member Section -->
        <div class="section-modal modal fade" id="team-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Clientes</h3>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/ggc.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>G G C</h4>
                                    <div class="designation">I.E "Gran Guzmango C&aacute;pac</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/mdch.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>MDCH</h4>
                                    <div class="designation">Municipalidad Distrital de Chilete</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/radio_alt.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <div class="designation">Tocache</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/cacao_del_oriente_tarapoto.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>&nbsp;</h4>
                                    <div class="designation">Tarapoto</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/radio_concierto.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>&nbsp;</h4>
                                    <div class="designation">Tocache</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/cetecmin_sac.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>&nbsp;</h4>
                                    <div class="designation">Instituto Tecnol&oacute; Minero</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <img src="images/team/confec_basty.jpg" class="img-responsive" alt="">
                                <div class="team-details">
                                    <h4>Confecciones Basty</h4>
                                    <div class="designation">Tocache</div>
                                    <ul style="text-align: center;">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- /.row -->
                </div>
                
            </div>
        </div>
        <!-- End Team Member Section -->
        
         <!-- Start Testimonial Section -->
        <div class="section-modal modal fade" id="exp_lab-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Experiencia Profesional</h3>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-3">
                            <div class="testimonial">
                                <img src="images/works/arestic.jpg" class="img-responsive" alt="...">
                                <h4>Ares T&I</h4>
                                <div class="speech">
                                    <P>Analista Programador</P>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="testimonial">
                                <img src="images/works/radio_alt.jpg" class="img-responsive" alt="...">
                                <h4>Radio TV Alto Huallaga</h4>
                                <div class="speech">
                                    <p>TI</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="testimonial">
                                <img src="images/works/upeu.jpg" class="img-responsive" alt="...">
                                <h4>Univ. Peruana Uni&oacute;n - Admisi&oacute;n</h4>
                                <div class="speech">
                                    <p>Analista de Sistemas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="testimonial">
                                <img src="images/works/eiu.jpg" class="img-responsive" alt="...">
                                <h4>Editorial Imprenta Uni&oacute;n</h4>
                                <div class="speech">
                                    <p>Soporte y Mantenimiento de TI</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="testimonial">
                                <img src="images/works/bu_upeu.jpg" class="img-responsive" alt="...">
                                <h4>Bienestar Universitario UPeU</h4>
                                <div class="speech">
                                    <p>Administrador Web</p>
                                </div>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    
                </div>
                
            </div>
        </div>
        <!-- End Testimonial Section -->        
        
        <!-- Start Contact Section -->
        <div class="section-modal modal fade contact" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center">
                            <h3>Contacto</h3>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Datos de contacto</h4>
                                <ul>
                                    <li><strong>E-mail :</strong> arcechava@gmail.com</li>
                                    <li><strong>RPM :</strong> +51 943089806</li>
                                    <li><strong>RPC :</strong> +51 976216679</li>
                                    <li><strong>Web :</strong> www.arcechava.com</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-social text-center">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="footer-contact-info">
                                <h4>Horarios</h4>
                                <ul>
                                    <li><strong>Lun - Vie:</strong> 9 am a 5 pm</li>
                                    <li><strong>Sab :</strong> Cerrado</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div><!--/.row -->
                    <div class="row" style="padding-top: 80px;">
                        <div class="col-md-12">
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Porfavor debe ingrese su nombre.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Porfavor debe ingresar su direcci&oacute; de correo.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Tel&eacute;fono" id="phone" >
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Mensaje / sugerencia / consulta *" id="message" required data-validation-required-message="Porfavor debe ingresar su mensaje / consulta y/o sugerencia"></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- End Contact Section -->
        
    </body>
    
</html>