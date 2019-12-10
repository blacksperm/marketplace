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
							mostrar_propuesta();
						}
						else{
							alertify.notify('Error al eliminar!', 'error',10, null);
						}
					}

				});

			});

		});

				$('#nuevaPro').click(function(){
					$('#propuesta').modal('show');
					$('#propuesta').find('.modal-title').text('Nueva Propuesta');
					$('#formPropuesta').attr('action','<?= base_url('propuesta_controller/ingresar') ?>');


				});

				get_estado();
				function get_estado(){
					$.ajax({
						type: 'ajax',
						url: '<?= base_url('propuesta_controller/get_estado') ?>',
						dataType: 'json',

						success: function(datos){
							var op = '';
							var i;
							op +="<option value=''>--Seleccione un Estado--</option>";
							for(i=0; i<datos.length; i++){
								op +="<option value='"+datos[i].id_estado+"'>"+datos[i].estado+"</option>";
							}
							$('#estado').html(op);
						}
					});
				}


				$('#btnGuardar').click(function(){
					$url = $('#formPropuesta').attr('action');
					$data = $('#formPropuesta').serialize();

					$.ajax({

						type: 'ajax',
						method: 'post',
						url: $url,
						data: $data,
						dataType: 'json',
						success: function(respuesta){
						$('#propuesta').modal('hide');


						if(respuesta=='add'){
							alertify.notify('Aplico al requerimiento exitosamente','success',10,null);
						}
						else if (respuesta=='edi'){
							alertify.notify('Propuesta actualizado exitosamente!','success',10,null);
						}
						else{
							alertify.notify('Error al Ingresar!','error',10,null);
						}
						$('#formPropuesta')[0].reset();
						mostrar_propuesta();
						
				}
				});
				});


				$('#tabla_propuesta').on('click','.item-edit',function(){
					var id= $(this).attr('data');
					$('#propuesta').modal('show');
					$('#propuesta').find('.modal-title').text('Actualizar Propuesta');
					$('#formPropuesta').attr('action','<?= base_url('propuesta_controller/actualizar') ?>');


				$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?= base_url('propuesta_controller/get_datos') ?>',
				data: {id:id},
				dataType: 'json',

				success: function($datos){
					$('#id').val($datos.id_propuesta);
					$('#id').val($datos.usuario);
					$('#producto').val($datos.producto);
					$('#descripcion').val($datos.descripcion);
					$('#estado').val($datos.id_estado);
					$('#img').val($datos.id_propuesta_imagen);
					$('#precio').val($datos.precio);
				}

				});
			});



	});
</script>