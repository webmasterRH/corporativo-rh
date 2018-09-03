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
  <div class="hero-mitad" style="background: url(img/bg-main-1.jpg) no-repeat center; height: 500px; background-color: #dd2331">
      <div class="row p-0 m-0 d-flex contenedor-texto-mitad">
        <div class="container">
          <div class="row p-0 texto-inicio-home d-flex justify-content-between">
            <div class="row col-12 col-md-7 m-0 pt-3 d-flex align-items-center" >
              <div class="col-12 p-0 m-0 texto-hero-evento">
                <img src="img/curso-big.png">
                <p class="mt-3">Conoce diferentes <b>técnicas de respiración, auto confianza, dicción, vocalización</b> y obtén las habilidades necesarias de comunicación para impactar a una audiencia, clientes, jefes, etc.</p>
                <p>Taller registrado ante la Secretaría de Trabajo y Previsión Social.</p>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary ocultar-pc ver-movil" data-toggle="modal" data-target="#exampleModal">
 Reservar 
</button>

<!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <p class="text-center" style="color: #000; font-weight: 600; font-size: 1.5em;">RESERVA TU LUGAR</p>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <form>
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="*Nombre" required>
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="*Correo electronico" required>
                          </div>
                          <div class="form-group">                 
                            <input type="text" class="form-control" placeholder="*Movil" required>
                          </div>
                          <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>-Elegir Servicio-</option>
                              <option value="Capacitación">Capacitación</option>
                              <option value="Clima Laboral">Clima Laboral</option>
                              <option value="Estudios Socioeconómicos">Estudios Socioeconómicos</option>
                              <option value="Evaluación 360">Evaluación 360</option>
                              <option value="Psicometría">Psicometría</option>
                              <option value="Reclutamiento y Selección">Reclutamiento y Selección</option>
                            </select>
                          </div>
                          <div class="d-flex row justify-content-between">
                            <div class="col-6">
                              <button type="submit" class=" p-2 boton-formulario-evento-amarillo">Reservar</button>
                            </div>
                            <div class="col-6">
                              <button type="submit" class=" p-2 boton-formulario-evento">Pagar en Linea</button>
                            </div>
                          </div>
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                  </div>
                </div>
              </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-4 p-0 contenedor-evento-hero-2 ocultar-movil" >
              <div class="col-12 p-4 mt-4" style="background-color: #fff;">
                <p class="text-center" style="color: #000; font-weight: 600; font-size: 1.5em;">RESERVA TU LUGAR</p>
                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="*Nombre" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="*Correo electronico" required>
                  </div>
                  <div class="form-group">                 
                    <input type="text" class="form-control" placeholder="*Movil" required>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>-Elegir Servicio-</option>
                      <option value="Capacitación">Capacitación</option>
                      <option value="Clima Laboral">Clima Laboral</option>
                      <option value="Estudios Socioeconómicos">Estudios Socioeconómicos</option>
                      <option value="Evaluación 360">Evaluación 360</option>
                      <option value="Psicometría">Psicometría</option>
                      <option value="Reclutamiento y Selección">Reclutamiento y Selección</option>
                    </select>
                  </div>
                  <div class="d-flex row justify-content-between">
                    <div class="col-6">
                      <button type="submit" class=" p-2 boton-formulario-evento-amarillo">Reservar</button>
                    </div>
                    <div class="col-6">
                      <button type="submit" class=" p-2 boton-formulario-evento">Pagar en Linea</button>
                    </div>
                  </div>
                </form>
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
        <div class="row">
          <div class="col-12 col-md-8">
            <div class="col-12 text-center d-flex justify-content-between titulo-detalle-evento m-0 p-0">
              <div class="col-md-3 col-6">
                <p class="h5">Expositor:</p>
                <p>Axel Moss</p>
              </div>
              <div class="col-md-3 col-6">
                <p class="h5">Duración:</p>
                <p>16 horas</p>
              </div>
            </div>
            <div class="col-12" style="border-left: solid #c0c0c0 3px;">
              <blockquote style="color: #C0C0C0">
                <p><small>- Vocal Image Designer</small></p>
                <p><small>- Especialista en el desarrollo de la personalidad a través de la voz.</small></p>
                <p><small>- Conductor del programa "The Sunny Morning" de <em>Mexico News Network</em>.</small></p>
                <p><small>- Capacitador certificado ante la SEP.</small></p>
              </blockquote>
            </div>
            <div class="col-12">
              <div class="col-12 p-0 m-0">
                <ul class="nav mb-0" style="z-index: 200">
                  <li class="nav-item">
                    <a class="nav-link nav-nosotros activo" href="#informacion">Información</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link nav-nosotros" href="#material">Material</a>
                  </li>
              </ul>
              </div>
              <div id="informacion" class="col-12 p-0 m-0 nosotros-info activo-info">
                <div role="tabpanel" class="tab-pane active" id="Temarios"> <!-- Mod 2 -->
                <div class="modulo">
                  <br>
                  <p class="h5">Fecha:</p>
                  <p>Comenzamos 3 de Septiembre.<br>
                  Todos los Lunes del mes de Septiembre de 16:00 a 20:00 hrs</p>
                </div>
                <div class="modulo mt-4">
                  <p class="h5">¿A quien va dirigido?</p>
                  <p>- Profesionistas que deseen mejorar sus herramientas de comunicación como la dicción, tonos de voz y movimiento corporales.</p>
                  <p>- Gerentes, directores y líderes que administren un grupo de personas con la finalidad de mejorar la forma de transmitir ideas y tareas.</p>
                  <p>- Estudiantes de Preparatoria y Universidad que quieran mejorar sus presentaciones, participaciones en debates, proyectos, preparación para el mundo laboral.</p>
                </div>

                <div class="modulo mt-4">
                  <p class="h5">Temario</p>
                  <p>
                    </p><ol>
                      <li>Establecer una primera impresión positiva.</li>
                      <li>Creando tu visión.</li>
                      <li>Desarrollar una personalidad como orador.</li>
                      <li>Todos somos oradores.</li>
                      <li>Aprender a realizar una autoevaluación consiente de nuestra personalidad y la forma en que nos comunicamos.</li>
                      <li>Reconocer nuestras cualidades para desarrollar aptitudes como comunicador.</li>
                      <li>Realizar conscientemente funciones físicas que hacemos inconscientes.</li>
                      <li>Tipos de lenguaje.</li>
                      <li>Aumentar la seguridad en uno mismo.</li>
                      <li>Perdiendo el miedo a hablar en publico.</li>
                      <li>Expresar sus ideas con claridad.</li>
                      <li>Entender la congruencia entre nuestras palabras y nuestros actos.</li>
                      <li>Planificar y organizar presentaciones.</li>
                      <li>Ser convincentes al comunicar sus ideas.</li>
                      <li>Proyectar entusiasmo.</li>
                      <li>Manejo de emociones.</li>
                      <li>Desarrollar empatía y contacto emocional.</li>
                      <li>Presentaciones creativas.</li>
                    </ol>
                  <p></p>
                </div>

              </div>
              </div>
               <div id="material" class=" col-12 p-0 m-0 nosotros-info">
                <div class="modulo">
                    <p class="h5">Incluye:</p>
                    <ul>
                      <li>Manual de trabajo impreso.</li>
                      <li>Diploma con valor curricular.</li>
                      <li>Constancia acreditada por la Secretaría del Trabajo y Previsión Social.</li>
                    </ul>
                  </div>
              </div>
              <div class="col-12 precio p-3" style="background-color: #F5D68A; border-radius: 8px;">
                <h6>Inversión: <strong>$1,490 mxn</strong></h6>
                  <small class="forma-pago">*Pagos en efectivo ó vía transferencia bancaria o <a href="#">paga en linea</a>.</small>
              </div>
            </div>
          </div>
          <!-- CONTENEDOR INFORMACION -->

          <div class="col-md-4 col-sm-4 mt-3 mt-md-0">
            <div class="sidebar p-3" style="background-color: #F4F4F4;">

              <h3>Nuestra ubicación</h3>
              <p class="txt_gris">Nos encontramos en Av. Bonampak. Plaza Peninsula 2do. Piso. Cancún, Quintana Roo.</p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1696.4846647521035!2d-86.82407658816344!3d21.132747214135076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2bde0b206223%3A0x7de75fc8faf732d2!2sAuditorium!5e0!3m2!1ses!2smx!4v1471552376517" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>

              <br><br><br>
              <h3>Contacto</h3>
              <p>
                 <strong>Teléfono:</strong> (998) 310 44 20 <br>
                 <strong>Whatsapp:</strong> (998) 232 74 97 <br>
                 <strong>Email:</strong> eventos@corporativo-rh.com
              </p>
              <br>
              <h3>Horarios</h3>
              <p>
                 <strong>Lunes a Viernes:</strong> 8:00 am a 17:00 pm. <br>
              </p>

            </div>
        </div>
        </div>

      </div>
    </section>
  </main>

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
           $('.nosotros-info').fadeOut(900);
           $(this).addClass('activo');
           $(id).fadeIn(900);
        });
    });
  </script>
</body>

</html>
