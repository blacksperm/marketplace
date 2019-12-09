<script>
	$(document).ready(function(){
		mostrar_propuesta();
		function mostrar_propuesta(){
			$.ajax({
				type: 'ajax',
				url: '<?= base_url('propuesta_controller/get_propuesta') ?>',
				dataType: 'json',
				success: function(datos){
					var tabla = '';
					var i;
					var n=1;

					for(i=0; i<datos.length; i++){
						tabla +=
						'<tr>'+
						'<td>'+n+'</td>'+
						'<td>'+datos[i].usuario+'</td>'+
						'<td>'+datos[i].nombre_producto+'</td>'+
						'<td>'+datos[i].descripcion+'</td>'+
						'<td>'+datos[i].contacto+'</td>'+

						'<td>'+datos[i].precio+'</td>'+
						'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm borrar" data="'+datos[i].id_requerimiento_propuesta+'">Eliminar</a>'+'</td>'+

						'<td>'+'<a href="javascript:;" class="btn btn-info btn-sm item-edit" data="'+datos[i].id_requerimiento_propuesta+'">Actualizar</a>'+'</td>'+
						'</tr>';
						n++;


					}
					$('#tabla_propuesta').html(tabla);
				}
			});
		};





		//eliminar Aqui me quede 


				$('#tabla_propuesta').on('click','.borrar', function(){
			$id = $(this).attr('data');// para capturar el dato segun el dato que demos click
			$('#modalBorrar').modal('show');//para mostrar el modal
			$('#btnBorrar').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: '<?php echo base_url('propuesta_controller/eliminar') ?>',
					data: {id:$id},
					dataType: 'json',


					success: function(respuesta){
						$('#modalBorrar').modal('hide');
						if(respuesta == true){
							alertify.notify('Eliminado exitosamente!', 'success', 10, null);
							mostrarAlumnos();
						}
						else{
							alertify.notify('Error al eliminar!', 'error',10, null);
						}
					}

				});

			});

		});
	});
</script>