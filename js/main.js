$( document ).ready(function() {
         $('#cargando-email').hide();
      });
$('#icono-menu').click(function(){
  
  $('.icono-menu-movil').toggleClass("rotar");
  $('#contenedor-menu-movil').toggleClass("ocultar");
});

    $("#formulario-contacto").on('submit', function(evt){
        evt.preventDefault();
        $('#cargando-email').show();
        $.ajax({
              url : 'email.php',
              data : $("#formulario-contacto").serialize(), 
              type : 'POST',
              success : function(json) {
                $('#cargando-email').hide();
                  swal(
                      'E-mail enviado correctamente.',
                      'Nos pondremos en contacto con usted tan pronto como sea posible.',
                      'success'
                    )
              },
           
              // código a ejecutar si la petición falla;
              // son pasados como argumentos a la función
              // el objeto de la petición en crudo y código de estatus de la petición
              error : function(xhr, status) {
                  alert('Disculpe, existió un problema');
              },
           
              // código a ejecutar sin importar si la petición falló o no
              // complete : function(xhr, status) {
              //     alert('Petición realizada');
              // }
        });
        
    });