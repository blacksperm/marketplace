<script type="text/javascript">
	$(document).ready(function(){
//se llama la funcion de mostrar usuarios desde la tabla
mostrarUsuarios();

function mostrarUsuarios(){
//se define que se trabaja con ajax
$.ajax({
//tipo de solicitud que se hace
type:'ajax',
	//se define el controlador y al metodo a ejecutar
	url:'<?php echo base_url('usuario_controller/get_usuario') ?>',
	//tipo de respuesta que se recibe
	dataType:'json',

//si la peticion fue exitosa se recibira una repuesta, en una variable, la cual tendra todos los registros
success: function($datos){
//se crea una variable que recibira el cuerpo de la tabla
$tabla = '';
	//variable que recorre la cantidad de registros
	$i;
	//variable para mostrar un correlativo de registro(opcinal)
	$n=1;

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
		'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm BORRAR" data"'+datos[i].id_usuario+'">ELIMINAR</a>'+'</td>'+
		'<td>'+'<a href="javascript:;" class=btn btn-info btn-sm item-edit" data"'+datos[i]id_usuario+'">EDITAR</a>'+'</td>'
		'</tr>'
	}

}

});

};//fin de la funcion mostrarUsuarios


});//fin de la estructura
</script>