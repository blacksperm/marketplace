<script type="text/javascript">
 function disponibilidadCorreo($correo){
      //Creamos una variable llamada $id en la cual guardaremos el valor digitado en el input
      //dicha variable sera la enviada a la consulta para validar si existe un correo similar

      $.ajax({  
        //Especificamos el tipo de peticion que haremos
        type: 'ajax',
        // especifica si será una petición POST o GET
        method: 'post', 
        // la URL para la petición   
        url: '<?php echo base_url('usuario_controller/validarCorreo') ?>',
        // la información a enviar
        // (también es posible utilizar una cadena de datos)  
        //En este caso correo seria el parametro y $id es el valor que se capturo anteriomente del input  
        data: {correo:$correo},
        // el tipo de información que se espera de respuesta
        dataType: 'json',
        
        // código a ejecutar si la petición es satisfactoria;
        success: function(respuesta){  

          //el modelo devolvera con return ya sea false o true el cual evaluamos con el if
          if (respuesta==true) {
            $r = true; 
            //Si nos devuelve true es porque SI EXISTE UN CORREO como el escrito en el input
            $("#infoCorreo").text('Correo ya registrado').css({color: 'red', fontSize: '10px'});
            $("#correo").css('boxShadow', '0 0 15px red');
        }else{
            $r = false; 
            //Si nos devuelve false es porque NO EXISTE UN CORREO como el escrito en el input
            $("#infoCorreo").text('Correo disponible').css({color: 'green', fontSize: '10px'});
        }
    },
});
      return $r;
  };

  function validarFormulario(){

      $nombre      = $('#nombre').val();
      /*$apellido    = $('#apellido').val();
      $edad        = $('#edad').val();
      $usuarios     = $('#usuarios').val();
      $clave       = $('#clave').val();
      $rol         = $("#rol option:selected").val();
      $correo      = $('#correo').val();
      $telefono    = $('#telefono').val();*/


    //Validar campo obligatorio
    if($nombre.length == 0){
        //document.getElementById("nombre").style.borderColor = "red"; 
        document.getElementById("nombre").style.boxShadow = '0 0 5px red'; 
        /*document.getElementById("nombre").style.borderColor = 'red'; */
        document.getElementById("nombre").placeholder = "Este campo es obligatorio";   
        return false;
    }else{
    	document.getElementById("nombre").style.boxShadow = '0 0 5px blue';
    	/*document.getElementById("nombre").style.borderColor = 'blue'*/
    }

    /*//Validar campo obligatorio
    if($apellido.length == 0){
    	document.getElementById("apellido").style.boxShadow = '0 0 5px red'; 
    	document.getElementById("apellido").style.borderColor = 'red'; 
    	document.getElementById("apellido").placeholder = "Este campo es obligatorio";
    	return false;
    }else{
    	document.getElementById("apellido").style.boxShadow = '0 0 5px blue';
    	document.getElementById("apellido").style.borderColor = 'blue'
    }

    if(isNaN($edad) || $edad.length == 0){
    	document.getElementById("edad").style.boxShadow = '0 0 5px red'; 
    	document.getElementById("edad").style.borderColor = 'red'; 
    	return false;
    }else{
    	document.getElementById("edad").style.boxShadow = '0 0 5px blue';
    	document.getElementById("edad").style.borderColor = 'blue'
    }

    //Validar comboBox
    if($usuarios.length == 0){
        document.getElementById("usuarios").style.boxShadow = '0 0 5px red'; 
        document.getElementById("usuarios").style.borderColor = 'red'; 
        document.getElementById("usuarios").placeholder = "Este campo es obligatorio";
        return false;
    }else{
        document.getElementById("usuarios").style.boxShadow = '0 0 5px blue';
        document.getElementById("usuarios").style.borderColor = 'blue'
    }

     //Validar comboBox
     if($clave.length == 0){
        document.getElementById("clave").style.boxShadow = '0 0 5px red'; 
        document.getElementById("clave").style.borderColor = 'red'; 
        document.getElementById("clave").placeholder = "Este campo es obligatorio"; 
        return false;
    }else{
        document.getElementById("clave").style.boxShadow = '0 0 5px blue';
        document.getElementById("clave").style.borderColor = 'blue'
    }


    //Validar comboBox
    if($rol == 0){
        document.getElementById("rol").style.boxShadow = '0 0 5px red'; 
        document.getElementById("rol").style.borderColor = 'red'; 
        return false;
    }else{
        document.getElementById("rol").style.boxShadow = '0 0 5px blue';
        document.getElementById("rol").style.borderColor = 'blue'
    }

    //Validar correo
    if(!(/\S+@\S+\.\S+/.test($correo))){
    	document.getElementById("correo").style.boxShadow = '0 0 5px red'; 
    	document.getElementById("correo").style.borderColor = 'red';  
    	document.getElementById("correo").placeholder = "Debe digitar un correo valido";
    	$("#infoCorreo").text('Debe digitar un correo valido').css({color: 'red', fontSize: '10px'});
    	return false;
    }else{
    	document.getElementById("correo").style.boxShadow = '0 0 5px blue';
    	document.getElementById("correo").style.borderColor = 'blue'
    }

    $resp = disponibilidadCorreo($correo);
    if($resp == true){
    	return false;
    };

    //Validar campo obligatorio
    if($telefono == ""){
        document.getElementById("telefono").style.boxShadow = '0 0 5px red'; 
        document.getElementById("telefono").style.borderColor = 'red';   
        return false;
    }else{
        document.getElementById("telefono").style.boxShadow = '0 0 5px blue';
        document.getElementById("telefono").style.borderColor = 'blue'
    }*/
    return true;


};



$(document).ready(function(){
        //FORMATO DE MASCARAS
        $('#telefono').mask('0000-0000', {placeholder: '0000-0000'});
    });
</script>