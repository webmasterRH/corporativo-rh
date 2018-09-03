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

</head>

<body>
  
  <?php include('includes/header.php') ?>
  <!-- Header -->
  <div class="hero-mitad" style="background: url(img/Servicios.jpg) no-repeat center fixed; ">
      <div class="row p-0 m-0 d-flex align-items-center contenedor-texto-mitad text-center">
        <div class="container">
          <div class="row texto-inicio-home">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                   <h2 data-aos="fade-up"
                  data-aos-duration="1200"
                  data-aos-once="true">Servicios Corporativos</h2>
                </div>
                 <div class="col-8">
                    <p data-aos="fade-up"
                       data-aos-duration="1800"
                       data-aos-once="true">Corporativo RH es una empresa dedicada a la mejora y crecimiento empresarial, contamos con una gama de servicios profesionales diseñados para llevar a tu empresa hacia el éxito.</p>
                 </div>
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
        <div class="row d-flex justify-content-center text-center">
          <div class="col-md-4 col-12 mt-1 mt-md-1 contenedor-servicio"
                data-aos="fade-right"
                data-aos-duration="1200"
                data-aos-once="true">
            <img src="img/reclutamiento-personal.png" class="img-fluid icono-servicio">
            <h2><a href="servicios/reclutamiento-de-personal.php">Reclutamiento de personal</a></h2>
            <p>Te presentamos a los mejores candidatos en el plazo más corto posible; reduciendo la rotación de personal en tu empresa.</p>
            <a href="servicios/reclutamiento-de-personal.php" class=" p-1 pl-4 pr-4 mt-2 btn-mas-info-servicios">Mas información</a>
          </div>
          <div class="col-md-4 col-12 mt-5 mt-md-1 contenedor-servicio"
                data-aos="fade-up"
                data-aos-duration="1200"
                data-aos-once="true">
            <img src="img/socioeconomico.png" class="img-fluid">
            <h2><a href="servicios/estudio-socioeconomico.php">Estudio socioeconómico</a></h2>
            <p>Verificamos los datos de cada uno de tus candidatos de forma confidencial y oportuna, realizando una inspección en su domicilio.</p>
            <a href="servicios/estudio-socioeconomico.php" class=" p-1 pl-4 pr-4 mt-2 btn-mas-info-servicios">Mas información</a>
          </div>
          <div class="col-md-4 col-12 mt-5 mt-md-1 contenedor-servicio"
                data-aos="fade-left"
                data-aos-duration="1200"
                data-aos-once="true">
            <img src="img/capacitacion.png" class="img-fluid">
            <h2><a href="#">Capacitación</a></h2>
            <p>Somos especialistas en diseñar e impartir programas de capacitación para todos los niveles, elevando la productividad.</p>
            <a href="#" class=" p-1 pl-4 pr-4 mt-2 btn-mas-info-servicios">Mas información</a>
          </div>

          <div class="w-100 mt-5"></div>

          <div class="col-md-4 col-12 mt-5 mt-md-1 contenedor-servicio"
                data-aos="fade-right"
                data-aos-duration="1200"
                data-aos-once="true">
            <img src="img/psicometrico.png" class="img-fluid">
            <h2><a href="servicios/pruebas-psicometricas.php">Pruebas psicométricas y de Confianza</a></h2>
            <p>Protegemos tu inversión mediante la aplicación de evaluaciones que te permiten detectar las habilidades y capacidades del candidato.</p>

            <a href="servicios/pruebas-psicometricas.php" class="p-1 pl-4 pr-4 mt-2 btn-mas-info-servicios">Mas información</a>
          </div>
          <div class="col-md-4 col-12 mt-5 mt-md-1 contenedor-servicio"
                data-aos="fade-up"
                data-aos-duration="1200"
                data-aos-once="true">
            <img src="img/clima-organizacional.png" class="img-fluid">
            <h2><a href="servicios/clima-organizacional">Clima organizacional</a></h2>
            <p>Mediante la aplicación de un cuestionario vía online identificamos los factores que influyen en el nivel de productividad de tu empresa.</p>
            <a href="servicios/clima-organizacional" class=" p-1 pl-4 pr-4 mt-2 btn-mas-info-servicios">Mas información</a>
          </div>
          <div class="col-md-4 col-12 mt-5 mt-md-1 contenedor-servicio"
                data-aos="fade-left"
                data-aos-duration="1200"
                data-aos-once="true">
            <img src="img/360.png" class="img-fluid">
            <h2><a href="servicios/evaluacion-de-desempeno.php">Evaluación de desempeño 360º</a></h2>
            <p>Conoce el desempeño profesional, debilidades y áreas a mejorar en el colaborador mediante la autoevaluación y retroalimentación de jefes.</p>
            <a href="servicios/evaluacion-de-desempeno.php" class=" p-1 pl-4 pr-4 mt-2 btn-mas-info-servicios">Mas información</a>
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
</body>

</html>
