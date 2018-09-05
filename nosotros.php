<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/bt-4.css">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="js/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="css/sweetalert2.min.css">

</head>

<body>
  
  
  <!-- Header -->
  <div class="hero-mitad" style="background: url(img/nosotros.jpg) no-repeat center fixed; ">
      <div class="row p-0 m-0 d-flex align-items-center contenedor-texto-mitad text-center">
        <div class="container">
          <div class="row texto-inicio-home">
            <div class="col-12">
              <h2 data-aos="fade-up"
                  data-aos-duration="1200"
                  data-aos-once="true">CONÓCENOS</h2>
            </div>
          </div>
        </div>
      </div>
     <?php include('includes/menu.php') ?>
  </div>
  <!-- Hero -->

  <main class="mt-5">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6"
              data-aos="fade-left"
              data-aos-duration="1200"
              data-aos-once="true">
            <div class="col-12 p-4" style="background-color: #eee;">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/r_t8q2NKgdA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
          </div>
          <div class="row col-md-12 col-lg-6 mt-md-4 mt-lg-1 p-0 m-0"
                data-aos="fade-right"
                data-aos-duration="1200"
                data-aos-once="true">
            <div class="col-12 col-md-6 col-lg-12 mt-3 mt-md-1">
              <p class="text-justify description-corporativo-home" style="color: #4f4e4e;">Somos una <b>empresa mexicana</b> integrada por profesionales de amplia experiencia en Capital Humano, dedicados a proporcionar asesoría estratégica a las empresas <b>optimizando sus recursos humanos, financieros y activos.</b></p>
              <p class="text-justify description-corporativo-home" style="color: #4f4e4e;" >Trabajamos en sinergia con nuestros clientes para lograr <b>resultados efectivos y duraderos</b>, que representen para sus empresas importantes cambios de <b>estructura y cultura de trabajo, permitiendo un sano desarrollo dentro de un ámbito de competencia.</b></p>
            </div>
            <div class=" col-12 col-md-6 col-lg-12">
              <ul class="nav mb-0">
                <li class="nav-item">
                  <a class="nav-link nav-nosotros activo" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-nosotros" href="#mision">Misión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-nosotros" href="#vision">Visión</a>
                </li>
              </ul>
              <div class="col-12 pt-2 m-0 nosotros-info activo-info" id="servicios" style="border-top: solid 1px #EEEEEE; color: #737373;">
                <p>Contamos con una variedad de servicios para brindarle una mejora empresarial de acuerdo a sus necesidades.</p>

                <ul>
                  <li><a href="#">Capacitación</a></li>
                  <li><a href="#">Clima Laboral</a></li>
                  <li><a href="#">Estudios Socioeconómicos</a></li>
                  <li><a href="#">Evaluación 360</a></li>
                  <li><a href="#">Reclutamiento y Selección</a></li>
                  <li><a href="#">Psicometria</a></li>
                </ul>
              </div>
              <div class="col-12 pt-2 m-0 nosotros-info" id="mision" style="border-top: solid 1px #EEEEEE; color: #737373;">
                <p>Brindar asesoría y servicios de la más alta calidad, enfocados en la administración y desarrollo integral del Capital Humano, contribuyendo a fortalecer la cultura organizacional y el entorno laboral de nuestros clientes y el mejor desarrollo humano y profesional de sus colaboradores, favoreciendo consecuentemente el logro de sus objetivos.</p>
              </div>
              <div class="col-12 pt-2 m-0 nosotros-info" id="vision" style="border-top: solid 1px #EEEEEE; color: #737373;">
                <p>Trascender como empresa confiable en la <b>administración y prestación de servicios del Capital Humano</b>, con base en estrategias innovadoras y con los más altos niveles de calidad y eficiencia en la gestión del talento humano, que le permita a nuestros clientes, los colaboradores y la sociedad alcanzar con plenitud sus objetivos.</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <?php include('includes/formulario-contacto.php') ?>
  <!-- Formulario Contacto -->

 <?php include('includes/footer.php') ?>
  <!-- FOOTER -->

  <script>
      AOS.init();
  </script>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  <script type="text/javascript">
    $( document ).ready(function() {
      $('.nosotros-info').hide();
      $('.nosotros-info.activo-info').show();
        $('.nav-nosotros').click(function(event){
          event.preventDefault();
          var id = $(this).attr('href');
           $('.nosotros-info').hide();
           $('.nav-nosotros').removeClass("activo");
           $(this).addClass('activo');
           $(id).fadeIn(900);
        });
    });
  </script>
</body>

</html>
