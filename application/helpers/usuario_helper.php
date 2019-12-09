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

//llamada de la funcion para mostrar los roles
get_rol();


function get_rol(){
			//Definimos que trabajaremos con ajax
			$.ajax({
				//tipo de solicitud a realizar
				type: 'ajax',
				//direccion hacia donde enviaremos la informacion (controlador/metodo)
				url: '<?= base_url('usuario_controller/get_rol') ?>',
				//Tipo de respuesta que recibiremos
				dataType: 'json',

				//Si la peticion fue exitosa recibiremos una respuesta, en este caso en la variable "respuesta" recibiremos 
				//los registros de la tabla sexo
				success: function(datos){
					//Creamos una variable que servira para crear los option del select
					var op = '';
					//variable para recorrer el for
					var i;

					//agregamos a op un option vacio para que no aparezca ninguna opcion seleccionada
					op +="<option value=''>--Seleccione un rol--</option>";
					//recorremos los datos recibidos, con datos.length obtenemos la longitud del arreglo
					//osea, numero de registros recibidos
					for(i=0; i<datos.length; i++){
						//en la variable op vamos guardando cada registro obtenido del modelo
						op +="<option value='"+datos[i].id_rol+"'>"+datos[i].rol+"</option>";
					}
					//al select con el id sexo le entregamos la variable op que contiene los option
					$('#rol').html(op);
				}
			});
		}//fin de funcion para mostrar roles

//agregamos un evento al boton del modal GUARDAR
$('#btnGuardar').click(function(){

			//capturamos lo que este en el atributo action del formulario
			$url = $('#formUsuario').attr('action');
			//capturamos todos los datos del formulario
			$data = $('#formUsuario').serialize();

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
					//Ocultamos el moda, hide significa "oculto"
					$('#usuario').modal('hide');
					//si la respuesta recibida es add mostramos una alerta de ingreso exitoso
					if(respuesta=='add'){
						//si la respuesta que recibimos del modelo es ADD, mostramos una alerta indicando
						//que el registro fue ingresado exitosamente
						//success tipo de notificacion ---- 10 segundos a mostrar la alerta
						alertify.notify('Ingresado exitosamente!', 'success',10, null);
					}else if(respuesta=='edi'){
						//si la respuesta que recibimos del modelo es EDI, mostramos una alerta indicando
						//que el registro fue actualizado exitosamente
						//success tipo de notificacion ---- 10 segundos a mostrar la alerta
						alertify.notify('Actualizado exitosamente!', 'success',10, null);
					}else{
						//si la respuesta que recibimos del modelo es NO ES ADD o EDI, mostramos una alerta indicando que hubi error al realizar la accion (ya sea insertar o actualizar)
						//error tipo de notificacion ---- 10 segundos a mostrar la alerta
						alertify.notify('error al ingresar!', 'error',10, null);
					}
					//Limpiar inputs de formulario
					$('#formUsuario')[0].reset();
					//Actualizar la tabla con el nuevo registro
					mostrarUsuarios();
				}
			});

		});//fin evento del boton guardar del modal

});//fin de la estructura
</script>