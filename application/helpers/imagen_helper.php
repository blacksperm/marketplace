  <script>
   $(function(){   
     $("#file").on("change", function(){
       /* Limpiar vista previa */
       $("#vista-previa").html('');
       var archivos = document.getElementById('file').files;
       var navegador = window.URL || window.webkitURL;
       /* Recorrer los archivos */
       for(x=0; x<archivos.length; x++)
       {
         /* Validar tamaño y tipo de archivo */
         var size = archivos[x].size;
         var type = archivos[x].type;
         var name = archivos[x].name;
         if (size > 1024*1024)
         {
           $("#vista-previa").append("<p style='color: red'>El archivo "+name+" supera el máximo permitido 1MB</p>");
         }
         else if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png' && type != 'image/gif')
         {
           $("#vista-previa").append("<p style='color: red'>El archivo "+name+" no es del tipo de imagen permitida.</p>");
         }
         else
         {
           var objeto_url = navegador.createObjectURL(archivos[x]);
           $("#vista-previa").append("<img src="+objeto_url+" width='100' height='100' style='margin:2px;'>");
         }
       }
     });
     


     $('#file').click(function(){
      //modificamos el atributo action, le agregamos la ruta del controlador y modelo para ingresar
      $('#formSubidas').attr('action','<?= base_url('Upload_files/subir')?>');
    });



     $('#btnGuardarP').click(function(){


      //capturamos lo que este en el atributo action del formulario
      $url = $('#formSubidas').attr('action');
      //capturamos todos los datos del formulario
      $data = $('#formSubidas').serialize();

      //Definimos que trabajaremos con ajax
      $.ajax({
        //tipo de solicitud a realizar
        type: 'ajax',
        //metodo de envio de los datos (puede ser get)
        method: 'post',
        //direccion hacia donde enviaremos la informacion (controlador/metodo)
        url: $url,
        //datos a enviar, $data contiene TODA la informacion del formulario
        data: $data,
        //Tipo de respuesta que recibiremos
        dataType: 'json',

        //Si la peticion fue exitosa recibiremos una respuesta, en este caso en la variable "respuesta" recibiremos la palabra add o edi
        //add la recibiremos cuando una insercion fue exitosa
        //edi la recibiremos cuando una actualizacion fue exitosa
        success: function(respuesta){
          //si la respuesta recibida es add mostramos una alerta de ingreso exitoso
          if(respuesta=='add'){
            //si la respuesta que recibimos del modelo es ADD, mostramos una alerta indicando
            //que el registro fue ingresado exitosamente
            //success tipo de notificacion ---- 10 segundos a mostrar la alerta
            alertify.notify('Imagen subida exitosamente!', 'success',10, null);
          }else{
            //si la respuesta que recibimos del modelo es NO ES ADD o EDI, mostramos una alerta indicando que hubi error al realizar la accion (ya sea insertar o actualizar)
            //error tipo de notificacion ---- 10 segundos a mostrar la alerta
            alertify.notify('error al Subir imagen!', 'error',10, null);
          }
          //Limpiar inputs de formulario
          $('#formSubidas')[0].reset();
          //Actualizar la tabla con el nuevo registro
          mostrarImagenes();

        }
      });

    });//fin evento del boton guardar del modal
     
   });
 </script>