<script>
	$(document).ready(function(){
//se llama la funcion de mostrar usuarios desde la tabla
mostrarUsuarios();

function mostrarUsuarios(){
//se define que se trabaja con ajax
$.ajax({
//tipo de solicitud que se hace
type:'ajax',
	//se define el controlador y al metodo a ejecutar
	url:'<?= base_url('usuario_controller/get_usuario') ?>',
	//tipo de respuesta que se recibe
	dataType:'json',

//si la peticion fue exitosa se recibira una repuesta, en una variable, la cual tendra todos los registros
success: function(datos){
//se crea una variable que recibira el cuerpo de la tabla
var tabla = '';
	//variable que recorre la cantidad de registros
	var i;
	//variable para mostrar un correlativo de registro(opcinal)
	var n=1;

	for (i=0; i<datos.length; i++) {
		//con la variable tabla creada anteriormente se llena la estructura
		tabla +=
		'<tr>'+
		'<td>'+n+'</td>'+
		'<td>'+datos[i].nombre+' '+datos[i].apellido+'</td>'+
		'<td>'+datos[i].edad+'</td>'+
		'<td>'+datos[i].usuario+'</td>'+
		'<td>'+datos[i].password+'</td>'+
		'<td>'+datos[i].rol+'</td>'+
		'<td>'+datos[i].correo+'</td>'+

		//se crea  las funciones de eliminar y editar
		'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm borrar" data="'+datos[i].id_usuario+'">ELIMINAR</a>'+'</td>'+
		'<td>'+'<a href="javascript:;" class=btn btn-info btn-sm item-edit" data="'+datos[i].id_usuario+'">EDITAR</a>'+'</td>'+
		'</tr>';
		//se inicia la variable de correlativo
		n++;
	}

	$('#tabla_usuarios').html(tabla);

}

});

};//fin de la funcion mostrarUsuarios


	//cuando damos click al boton eliminar de cada registro de la tabla_alumnos se ejecutara lo siguiente
	$('#tabla_usuarios').on('click', '.borrar', function(){

			$id = $(this).attr('data');//para capturar el dato segun el boton que demos click

			$('#modalBorrar').modal('show'); //Para mostrar el modal de confirmacion de eliminar

			//con unbind().click lo que estamos definiendo es que ESPERE a que presionemos el boton
			//del modal confirmando la eliminacion
			$('#btnBorrar').unbind().click(function() {
				//Definimos que trabajaremos con ajax
				$.ajax({
					//tipo de solicitud a realizar
					type: 'ajax',
					//metodo de envio de los datos (puede ser get)
					method: 'post',
					//direccion hacia donde enviaremos la informacion (controlador/metodo)
					url: '<?php echo base_url('usuario_controller/eliminar')?>',
					//datos a enviar, $id es el valor capturado anteriomente del boton
					data: {id:$id},
					//Tipo de respuesta que recibiremos
					dataType: 'json',

				//Si la peticion fue exitosa recibiremos una respuesta, en este caso en la variable "respuesta" recibiremos 
				//TRUE o FALSE que nos devolvera el modelo
				success: function(respuesta){
						$('#modalBorrar').modal('hide'); //Para ocultar el modal
						//si la respuesta que recibimos del modelo es TRUE, mostramos una alerta indicando
						//que el registro fue eliminado exitosamente
						//success tipo de notificacion ---- 10 segundos a mostrar la alerta
						if(respuesta==true){
							alertify.notify('Eliminado exitosamente!', 'success', 10, null);
							//Llamamos a la funcion para mostrar los alumnos y asi actualizar SOLO LA TABLA y NO TODA LA PAGINA
							mostrarAlumnos();
						}else{
						//si la respuesta que recibimos del modelo es FLASE, mostramos una alerta indicando
						//que el registro no se pudo eliminar
						//error tipo de notificacion ---- 10 segundos a mostrar la alerta							
						alertify.notify('Error al eliminar!', 'error', 10, null);
					}
				}
			});
				
			});

		});


//agregamos un evento al boton para agregar nuevo alumno
$('#nueUsu').click(function(){
			//mostramos el modal que tiene el formulario para ingresar un alumno
			$('#usuario').modal('show');
			//modificamos el titulo del modal
			$('#usuario').find('.modal-title').text('Nuevo Usuario');
			//modificamos el atributo action, le agregamos la ruta del controlador y modelo para ingresar
			$('#formUsuario').attr('action','<?= base_url('usuario_controller/ingresar')?>');
		});

});//fin de la estructura
</script>