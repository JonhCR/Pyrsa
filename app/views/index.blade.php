<!-- 
     © Designed by Jhon Anthony Moreira Baltodano
     Mail : jonh.m.10@gmail.com
     PHP 5
     Laravel Framework 4

-->

<!DOCTYPE html>

 <html class="no-js"> 
    <head>
      <!-- BASICS -->
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Pyrsa</title>
        <meta name="description" content="Pyrsa es una compañia profesional que entre sus servicios ofrece presupuestaciones,
        construcción de planos,home inspection,tramitología, administracion de proyectos entre otros,todo basado en el area de construcciones y remodelaciones."/>
        <meta name='keywords' content='presupuesto,presupuestacion,home inspection,pyrsa,planos,remodelacion
        construccion,construcciones,asesoria,barato,profesional,casa,construccion de casa,administracion,tramitologia
        consulturia , arquitectura , arquitecto ,dibujo '/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="Jhon Moreira" name="author"/>
         
        <!-- Core -->

        {{ HTML::style('css/isotope.css') }}
        {{ HTML::style('js/fancybox/jquery.fancybox.css') }}
        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/bootstrap-theme.css') }}
        {{ HTML::style('css/responsive-slider.css') }}
        {{ HTML::style('css/animate.css') }}
        {{ HTML::style('css/style.css') }}


        <!-- skin -->

        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('skin/default.css') }}

        <!-- icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/pyrsaicon.ico" />

         <script src="https://maps.googleapis.com/maps/api/js"></script>
      <script>
        function initialize() {
          var mapCanvas = document.getElementById('map');
          var mapOptions = {
            center: new google.maps.LatLng(9.996323, -84.116982),
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(mapCanvas, mapOptions)
        }
        google.maps.event.addDomListener(window, 'load', initialize);
      </script>

       <style>
        #map {
          width: 100%;
          height: 400px;
          background-color: #CCC;
        }
      </style>


    </head>
   
   

  <body>
  
       
  <div class="header">
  <section id="header" class="appear">
    
    <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-bars color-white"></span>
          </button>
          <h1><a href="{{URL::route('Home')}}" class="navbar-brand"  data-0="line-height:90px;" data-300="line-height:50px;">Pyrsa
          </a></h1>
        </div>
        <!--navbar-collapse -->
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li class="active"><a href="#index">Inicio</a></li>
            <li><a href="#section-about">Acerca</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#team">Grupo</a></li>
            <li><a href="#line-pricing">Presupuestos</a></li>
            <li><a href="#section-works">Proyectos</a></li>
            <li><a href="#section-contact">Contacto</a></li>
          </ul>
        </div> <!--/.navbar-collapse -->
      </div>
    </section>
  </div>
  

<section class="featured">
  <div id="index">
      <!-- Responsive slider - START -->
      <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
      <div class="slides" data-group="slides">
        <ul>
          <li>
            <div class="slide-body" data-group="slide">
              <img src="img/8.jpg" alt="">
              <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                <h2>Bienvenido a Pyrsa</h2>
                <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h4 class="tH"><span>Estamos para servirle a nuestros clientes</span></h4></div>
                <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h3 class="tH">Consultoría para el éxito de su construcción</h3></div>
              </div>
            </div>
          </li>
          <li>
            <div class="slide-body" data-group="slide">
              <img src="img/2.jpg" alt="">
              <div class="caption header" data-animate="slideAppearDownToUp" data-delay="500" data-length="300">
                <h2> Presupuestos de obra </h2>
                <div class="caption-sub" data-animate="slideAppearUpToDown" data-delay="800" data-length="300"><h4 class="tH"><span>Ofrecemos servicios de </span></h4></div>
                <div class="caption-sub" data-animate="slideAppearRightToLeft" data-delay="1200" data-length="300"><h3 class="tH">consultoría, presupuestacion , Asesoría y tramitología</h3></div>
              </div>
            </div>
          </li>
            <li>
              <div class="slide-body" data-group="slide">
                <img src="img/6.jpg" alt="">
                <div class="caption header" data-animate="slideAppearUpToDown" data-delay="500" data-length="300">
                  <h2>Creación de planos</h2>
                  <div class="caption-sub" data-animate="slideAppearLeftToRight" data-delay="800" data-length="300"><h4 class="tH">Servicios , orientacion y  consultoría</h4></div>
          <div class="caption-sub" data-animate="slideAppearDownToUp" data-delay="1200" data-length="300"><h3 class="tH"><span>Administración profesional de  proyectos</span></h3></div>
    
        </div>
                </div>
            </li>
      
          </ul>
    </div>
        
        <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
        <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
        
    
      </div>
      <!-- Responsive slider - END -->
  </div>
    </section>
    
  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="title">
              <div class="wow bounceIn">
            
              <h2 class="section-heading animated" data-animation="bounceInUp">Nuestra Empresa</h2>
              
            
              </div>
            </div>
          </div>
        </div>
        <div class="row">
      
          <div class="row-slider">
            <div class="col-lg-6 mar-bot30">
              <div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true">
                <div class="slides" data-group="slides">
                  <ul>
            
                    <div class="slide-body" data-group="slide">
                      <li><img alt="" class="img-responsive" src="img/9.jpg" width="100%" height="350"/></li>
                      <li><img alt="" class="img-responsive" src="img/10.jpg" width="100%" height="350"/></li>
                      <li><img alt="" class="img-responsive" src="img/11.jpg" width="100%" height="350"/></li>
              
                    </div>
                  </ul>
                    <a class="slider-control left" href="#" data-jump="prev"><i class="fa fa-angle-left fa-2x"></i></a>
                    <a class="slider-control right" href="#" data-jump="next"><i class="fa fa-angle-right fa-2x"></i></a>
                
                </div>
              </div>
            </div>
          
            <div class="col-lg-6 ">
              <div class="company mar-left10">
                <h4>Acumulamos <span>treinta años </span> de experiencias que nos han permitido conformar un grupo de apoyo seguro y confiable </h4>
                <p>Somos una empresa dedicada a cubrir una necesidad urgente en el ámbito de la construcción. Esta necesidad se proyecta como la búsqueda de  la adecuada asesoría que procura el razonable éxito de todo proceso constructivo.  Pyrsa pretende en la mejor forma, brindar al cliente -conforme a sus necesidades y requerimientos- todo el respaldo y la correcta guía que oriente en la toma de decisiones durante el proceso constructivo. Iniciando desde los conceptos preliminares y desarrollo de ideas en el anteproyecto,  así como planos, presupuestos  y  hasta el mismo final de la obra materializada.</p>
              </div>
            
            </div>
          
          </div>  
        </div>
          
      </div>
      
    </div>
  </section>
  <!--/about-->
    
  <!-- spacer section:testimonial -->
    <section id="testimonials-3" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">       
          <div class="col-lg-12">
              <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                      <h5>
                        Nuestro trabajo refleja el interes de lo que hacemos con cada proyecto
                      </h5>
                      <br/>
                      <span class="author"> &copy; Pyrsa S.A </span>
                    </div>

                </div>
              </div>
          </div>
        
      </div>  
    
    </section>
    
    <!-- services -->
    <section id="services" class="section pad-bot5 bg-white">
    <div class="container"> 
        <div class="row mar-bot5">
          <div class="col-md-offset-3 col-md-6">
            <div class="section-header">
            <div class="wow bounceIn"data-animation-delay="7.8s">
            
              <h2 class="section-heading animated"  >Nuestros Servicios</h2>
              <h4>Estamos a su lado en la busqueda de mejores presupuestos para sus proyectos </h4>
            
            </div>
            </div>
          </div>
        </div>
      <div class="row mar-bot40">
        <div class="col-lg-4" >
          <div class="wow bounceIn">
            <div class="align-center">
          
              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-home"></i></figure>
                  </div>
                    <h2><a href="#" >Planos</a></h2>
                    <ol class="rounded-list">
                      <li><p>Anteproyectos</p></li>
                      <li><p>Planos Constructivos</p></li>
                      <li><p>Perspectivas en 3D</p> </li>
                      <li><p>Especificaciones</p></li>
                      <li><p>Tramitología</p></li>                       
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
          
        <div class="col-lg-4" >
          <div class="align-center">
            <div class="wow bounceIn">
             
              <div class="wow rotateIn">
                <div class="service-col"> 
                  <div class="service-icon">
                    <figure><i class="fa fa-pencil"></i></figure>
                  </div>
                    <h2><a href="#">Control de obra y flujo de caja</a></h2>
                     <ol class="rounded-list">
                      <li><p>Programa general de construccion (flujo de caja)</p></li>
                      <li><p>Programa de inversión detallado</p></li>
                      <li><p>informe de seguimiento porcentual</p> </li>
                                            
                  </ol>
                </div>
              </div>  
            </div>
          </div>
        </div>
      
        <div class="col-lg-4" >
          <div class="align-center">
            <div class="wow bounceIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-money"></i></figure>
                </div>
                  <h2><a href="#">Presupuestos</a></h2>
                     <ol class="rounded-list">
                      <li><p>Listado de recursos</p></li>
                      <li><p>Formulario de cantidades y precios</p></li>
                      <li><p>Resumen de capitulos</p> </li>
                      <li><p>Presupuesto por frente de trabajo</p></li>
                                            
                  </ol>
              </div>
            </div>
          </div>
        </div>


<button type="button" class="btnhome" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Tambien ofrecemos Home Inspection</button>
<!-- Modal data -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <h4 style="text-align:center;">Servicio de Home inspection</h4>
     <hr/>
 <p>El home inspection ofrece al cliente que está pensando en comprar una casa, un informe detallado de la condición del inmueble en todos los sistemas; ya sean estructurales, eléctricos o mecánicos.
Cada inmueble de construcción nueva o anterior es revisado en su totalidad y detallado en un informe que además de ofrecer un listado de condición de cada elemento, es acompañado por un registro de fotografías que mostraran el estado de cada ítem revisado. Este  será una herramienta importante a la hora de decidir o negociar su compra.
PYRSA ofrece a sus clientes el compromiso de elaborar un reporte apegado a la realidad  de las condiciones del inmueble a fin de que quienes utilicen este servicio tengan en sus manos la  herramienta correcta que les ayudará a  tomar la decisión que más les conviene.</p>
 <hr/>
<h4>¿Qué incluye un home inspection?</h4>
<ol >
                      <li><p>Listado de recursos</p></li>
                      <li><p>Formulario de cantidades y precios</p></li>
                      <li><p>Resumen de capitulos</p> </li>
                      <li><p>Presupuesto por frente de trabajo</p></li>
                      <li><p>Listado de recursos</p></li>
                      <li><p>Formulario de cantidades y precios</p></li>
                      <li><p>Resumen de capitulos</p> </li>
                      <li><p>Presupuesto por frente de trabajo</p></li>
                      <li><p>Presupuesto por frente de trabajo</p></li>
 </ol>
<hr/>
<h4>Costos Home inspection</h4>
<p>Nuestros precios están basados en una relación de $ 1.00 por metro cuadrado.
El costo mínimo para casas por debajo de los  150.00 m2 es de $ 150.00.</p>
<div id="tablaModal">
<table>
  <tr>
   <td> 151 m2 a 300 m2  </td>
   <td>=</td>
  <td>$ 250.00</td>
  </tr>
  <tr>
   <td>301 m2 a 400 m2  </td>
   <td>=</td>
  <td>$ 350.00</td>
  </tr>
 <tr>
   <td> 401 m2 a 500 m2   </td>
   <td>=</td>
  <td>$ 400.00</td>
  </tr>
</table>
</div>
<p>*En áreas mayores se acordará  con el cliente el costo</p>


    </div>
  </div>
</div>


      
      </div>  

    </div>
    </section>
    <!--/services-->
    
    <!-- spacer section:testimonial -->
    <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">       
          <div class="col-lg-12">
              <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                      <h5>
                       Asesorías , estudios basicos y preliminares
                      </h5>
                      <br/>
                      <span class="author"> &copy; Pyrsa S.A </span>
                    </div>

                </div>
              </div>
          </div>
        
      </div>  
    
    </section>
      
    <!-- team -->
    <section id="team" class="team-section appear clearfix">

    <div class="container">

        <div class="row mar-bot10">
          <div class="col-md-offset-3 col-md-6">
            <div class="section-header">
            <div class="wow bounceIn">
            
              <h2 class="section-heading animated" data-animation="bounceInUp">Grupo de trabajo</h2>
              <p>Pyrsa cuenta con el más calificado  y experimentado personal que lo guiará de la mejor manera en todos los proyectos que deseé usted iniciar.</p>
            
            </div>
            </div>
          </div>
        </div>

          <div class="row align-center mar-bot45">
            <div class="col-md-4">
            <div class="wow bounceIn" data-animation-delay="4.8s">
              <div class="team-member">
                <div class="profile-picture">
                  <figure><img src="img/members3.jpg" alt=""></figure>
                  <div class="profile-overlay"></div>
                    <div class="profile-social">
                      <div class="icons-wrapper">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                </div>
                <div class="team-detail">
                  <h4>Director de proyectos</h4>
                  <span>Geovanny Guzman</span>
                </div>
                <div class="team-bio">
                <p>Teléfono 8348-4864</p>
               <p>contactopyrsa@gmail</p>
                </div>
              </div>
            </div>
            </div>
            <div class="col-md-4">
              
              <div class="wow bounceIn">
              <div class="team-member">
                <div class="profile-picture">
                  <figure><img src="img/members1.jpg" alt=""></figure>
                  <div class="profile-overlay"></div>
                    <div class="profile-social">
                      <div class="icons-wrapper">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                </div>
                <div class="team-detail">
                  <h4>Planos y presentaciones en 3D</h4>
                  <span>Johnny Rodríguez Zamora</span>
                </div>
                <div class="team-bio">
                <p>Encargado de proyectos  Álvaro Robles</p>
                </div>
              </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="wow bounceIn">
              <div class="team-member">
                <div class="profile-picture">
                  <figure><img src="img/members2.jpg" alt=""></figure>
                  <div class="profile-overlay"></div>
                    <div class="profile-social">
                      <div class="icons-wrapper">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                </div>
                <div class="team-detail">
                  <h4>Arquitecto </h4>
                  <span>Jorge Esquivel</span>
                </div>
                <div class="team-bio">
                <p>Grupo Pyrsa</p>
                </div>
              </div>
              </div>
            </div>
            
          </div>
            
    </div>
    </section>
    <!-- /team -->
    
    <!-- spacer section:stats -->
    <section id="parallax1" class="section pad-top40 pad-bot40 mar-bot20" data-stellar-background-ratio="0.5">
      <div class="container ">
            <div class="align-center pad-top40 pad-bot40">
             
       <div class="testimonial pad-top40 pad-bot40 clearfix">
               <h5>
                       Calculo de los costos unitarios en la mano de obra
                      </h5>
                      <br/>
                      <span class="author"> &copy; Pyrsa S.A </span>
        </div>

            </div>
      </div>  
    </section>
    <section id="line-pricing" class="line-section line-center">
      <div class="container pad-top50">
        <div class="row mar-bot10 ">
          <div class="col-md-offset-3 col-md-6">
            <div class="section-header">
              <div class="wow bounceIn">
            
                <h2 class="section-heading animated" data-animation="bounceInUp">Presupuesto</h2>
                <p>Le ofrecemos las mejores tasas de presupuestacion compruebelo usted mismo</p>
            
              </div>
            </div>
          </div>
        </div>
        

      <div class="CSSTableGenerator" >
                <table >
                    <tr>
                        <td>&copy;Pyrsa</td>
                        <td >
                            Tarifa Minima
                        </td>
                        <td>Tarifa de Remodelacion</td>
                    </tr>
                    <tr>
                        <td > Estudios Preliminares</td>
                        <td>0.25%</td>
                        <td> 0.50% </td>
                    </tr>
                    <tr>
                        <td >Anteproyecto </td>
                        <td> 1.00%</td>
                        <td> 1.50%</td>
                    </tr>
                    <tr>
                        <td > Planos Constructivos</td>
                        <td> 4.00%</td>
                        <td> 6.00%</td>
                    </tr>
                    <tr>
                        <td > Presupuesto</td> 
                        <td> 0.5%</td>
                        <td> 1.00%</td>
                    </tr>
                      
                        <tr>
                        <td > Inspección</td>
                        <td>3.00%</td>
                        <td> 4.5%</td>
                    </tr>


                     <tr>
                        <td > Dirección tecnica</td>
                        <td>5.00%</td>
                        <td>7.5%</td>
                    </tr>

                     <tr>
                        <td >Administración</td>
                        <td> 12.00%</td>
                        <td>18.00%</td>
                    </tr>

                     <tr>
                        <td >
                            Programa General de inversiones, 
                            Programa detallado de inversiones, 
                            informe de seguimiento(Avance %)
                        </td>
                        <td> 0.25%</td>
                        <td> 0.50%</td>
                    </tr>

                    

                    
                </table>
            </div>



      </div>
    </section>
    
    <!-- spacer section:testimonial -->
    <section id="testimonials-2" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">       
          <div class="col-lg-12">
              <div class="align-center">
                    <div class="testimonial pad-top40 pad-bot40 clearfix">
                      <h5>
                        Calidad en nuestros trabajos garantizada
                      </h5>
                      <br/>
                      <span class="author"> &copy; Pyrsa S.A</span>
                    </div>

                </div>
              </div>
          </div>
        
      </div>  
    
    </section>
    
    <!-- section works -->
    <section id="section-works" class="section appear clearfix">
      <div class="container">
        
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="section-header">
              <h2 class="section-heading animated" data-animation="bounceInUp">Proyectos</h2>
              <p>Nuestros proyectos son de calidad , contamos con personal sumamente experimentado y capaz de hacer posible la visión que el cliente tenga.</p>
            </div>
          </div>
        </div>
          
                        <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>
                              <li><a href="#" class="current btn-theme btn-small" data-filter="*">Todos</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".ex" >Exteriores</a></li>
                              <li><a href="#"  class="btn-theme btn-small" data-filter=".in">Interiores</a></li>
                              <li ><a href="#" class="btn-theme btn-small" data-filter=".o">Otro</a></li>
                            </ul>
                          </nav>
                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
                
                                <article class="col-md-4 isotopeItem in">
                  <div class="portfolio-item">
                  <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                    <img src="img/portfolio/1.jpg" alt="welcome" />
                  </div>
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/1.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem in">
                  <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/2.jpg" alt="" />
                  </div>
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/2.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>
                

                                <article class="col-md-4 isotopeItem in">
                  <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/3.jpg" alt="" />
                  </div>  
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/3.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem o">
                  <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="img/portfolio/4.jpg" alt="" />
                   </div> 
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/4.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem ex">
                  <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/5.jpg" alt="" />
                  </div>
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/5.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem in">
                  <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/6.jpg" alt="" />
                   </div>   
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/6.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem ex">
                  <div class="portfolio-item">
                  <div class="wow rotateInUpLeft">
                    <img src="img/portfolio/7.jpg" alt="" />
                  </div>
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/7.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem o">
                  <div class="portfolio-item">
                  <div class="wow bounceIn">
                    <img src="img/portfolio/8.jpg" alt="" />
                  </div>  
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/8.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>

                                <article class="col-md-4 isotopeItem o">
                  <div class="portfolio-item">
                  <div class="wow rotateInDownRight">
                    <img src="img/portfolio/9.jpg" alt="" />
                  </div>
                     <div class="portfolio-desc align-center">
                      <div class="folio-info">
                        <h5><a href="#">&copy; Pyrsa S.A</a></h5>
                        <a href="img/portfolio/9.jpg" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                       </div>                      
                     </div>
                  </div>
                                </article>
                                
</div>
   </div>
    </div>
    </div>
        
      </div>
    </section>
    <section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5"> 
            <div class="align-center pad-top40 pad-bot30">
                <div class="testimonial pad-top40 pad-bot40 clearfix">
               <h5>
                      Es un gusto atenderlo
                      </h5>
                      <br/>
                      <span class="author"> &copy; Pyrsa S.A </span>
        </div>
            </div>
    </section>

    <!-- contact -->
    <section id="section-contact" class="section appear clearfix">
      <div class="container">
        
        <div class="row mar-bot40">
          <div class="col-md-offset-3 col-md-6">
            <div class="section-header">
              <h2 class="section-heading animated" data-animation="bounceInUp">Contactanos </h2>
              <p>Gracias por comunicarse con nosotros. Responderemos a la mayor brevedad</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="cform" id="contact-form">
              
              
               <form action="contact/contact.php" method="post" role="form" class="contactForm">
              <div class="wow bounceIn">
                <div class="form-group">
                <label for="name">Tu Nombre : </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="maxlen:4" data-msg="Por favor ingrese como minimo 4 caracteres" />
                <div class="validation"></div>
                </div>
                <div class="form-group">
                <label for="email">Tu Correo :</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo " data-rule="email" data-msg="Ingrese un correo valido por favor" />
                <div class="validation"></div>
                </div>
                <div class="form-group">
                <label for="subject">Asunto :</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="maxlen:4" data-msg="El asunto debe de tener mas de 4 caracteres." />
                <div class="validation"></div>
                </div>
                <div class="form-group">
                <label for="message">Mensaje</label>
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros"></textarea>
                <div class="validation"></div>
                </div>
              </div>
                <button type="submit"  class="line-btn green">Enviar Mensaje</button>
              </form>
              
              <div id="sendmessage">
                 Tu Mensaje ha sido enviado . Muchas Gracias!
              </div>


            </div>
          </div>
          <!-- ./span12 -->
        </div>
        
      </div>
    </section>
    <!-- map -->

     <script src="https://maps.googleapis.com/maps/api/js"></script>


    <br/>
    <section id="section-map" class="clearfix">
     <p id="mapHeader">Nuestra Ubicación</p>
      <div class="container"> <div class="col-md-8 col-md-offset-2"> <div id="map" > </div></div>
    </section>
    
    
    


  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>       
        </div>
      </div>

      <div class="row align-center copyright">
          <div class="col-sm-12"><p>Copyright &copy; Pyrsa S.A </p></div>
      </div>
    </div>

  </section>
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a> 

  

  <!-- Core JavaScript Files -->
    {{ HTML::script('js/modernizr-2.6.2-respond-1.1.0.min.js') }}
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/jquery.easing.1.3.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/jquery.isotope.min.js') }}
    {{ HTML::script('js/jquery.nicescroll.min.js') }}
    {{ HTML::script('js/fancybox/jquery.fancybox.pack.js') }}
    {{ HTML::script('js/jquery.parallax-1.1.3.js') }}
    {{ HTML::script('js/skrollr.min.js') }}
    {{ HTML::script('js/jquery.scrollTo-1.4.3.1-min.js') }}
    {{ HTML::script('js/jquery.localscroll-1.2.7-min.js') }}
    {{ HTML::script('js/stellar.js') }}
    {{ HTML::script('js/responsive-slider.js') }}
    {{ HTML::script('js/jquery.appear.js') }}
    {{ HTML::script('js/validate.js') }}
    {{ HTML::script('js/grid.js') }}
    {{ HTML::script('js/main.js') }}
 


     <script src="js/wow.min.js"></script>


 
  </body>

</html>