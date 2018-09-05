 <div class="container"
      data-aos="fade-down"
      data-aos-duration="1200"
      data-aos-once="true">
    <div class="row">
      <div class="col-12 mt-3 pt-4" style="border-top:solid 1px #DDDDDD">
        <h3 class="titulo-1">¿TE INTERESA ALGUN SERVICIO?</h3>
      </div>
      <div><p class="text-center m-0"><small><i>Escriba sus datos y en breve un ejecutivo se comunicara con usted</i></small></p></div>
        <div class="col-12 p-4" style="border:solid 1px #DDDDDD">
              <form id="formulario-contacto" method="POST">
                <div class="row">
                  <div class="form-group col-12 col-md-6">
                     <input id="nombre" name="name" type="text" class="form-control" placeholder="*Nombre" required>
                  </div>
                  <div class="form-group col-12 col-md-6">                 
                     <input type="text" id="empresa" name="company" class="form-control" placeholder="Empresa">
                  </div>
                              <div class="form-group col-12 col-md-6">
                                <input type="email" class="form-control" id="correo" name="email" placeholder="*Correo electronico" required>
                              </div>
                              <div class="form-group col-12 col-md-6">                 
                               <input type="text" class="form-control" id="telefono" name="phone" placeholder="*Movil" required>
                              </div>
                              <div class="form-group col-12 col-md-6">
                                <textarea class="form-control" id="comentario" name="commentary" placeholder="Mensaje"></textarea>
                              </div>
                              <div class="form-group col-12 col-md-6">
                                <select class="form-control" id="servicio" name="services" required>
                                  <option value="">-Elegir Servicio-</option>
                                  <option value="Capacitación">Capacitación</option>
                                  <option value="Clima Laboral">Clima Laboral</option>
                                  <option value="Estudios Socioeconómicos">Estudios Socioeconómicos</option>
                                  <option value="Evaluación 360">Evaluación 360</option>
                                  <option value="Psicometría">Psicometría</option>
                                  <option value="Reclutamiento y Selección">Reclutamiento y Selección</option>
                                </select>
                                <button type="submit" class=" p-1 mt-4 boton-formulario">Enviar <i id="cargando-email" class="icon-spin3 faCog"></i> </button>
                              </div>
                </div>
                
              </form>
        </div> 
    </div>
  </div>