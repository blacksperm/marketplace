<script>

	$(document).ready(function(){
		mostrarMarca();
		function mostrarMarca(){

			$.ajax({
				type: 'ajax',
				url: '<?= base_url('marca_controller/get_marca') ?>',
				dataType: 'json',

				success: function(datos){
					var tabla = '';
					var i;
					var n=1;


					for(i=0; i<datos.length; i++ ){
						tabla +=
						'<tr>'+
						'<td>'+n+'</td>'+
						'<td>'+datos[i].n_marca+'</td>'+

						'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm borrar" data="'+datos[i].id_marca+'">Eliminar</a>'+'</td>'+

						'<td>'+'<a href="javascript:;" class="btn btn-info btn-sm item-edit" data="'+datos[i].id_marca+'">Actualizar</a>'+'</td>'+

						'</tr>';
						n++;


					}
					$('#tabla_marca').html(tabla);
					
				}

			});

		};// fin de funcion mostrar alumnos




			$('#tabla_marca').on('click','.borrar', function(){
			$id = $(this).attr('data');// para capturar el dato segun el dato que demos click
			$('#modalBorrar').modal('show');//para mostrar el modal
			$('#btnBorrar').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: '<?php echo base_url('marca_controller/eliminar') ?>',
					data: {id:$id},
					dataType: 'json',


					success: function(respuesta){
						$('#modalBorrar').modal('hide');
						if(respuesta == true){
							alertify.notify('Eliminado exitosamente!', 'success', 10, null);
							mostrarMarca();
						}
						else{
							alertify.notify('Error al eliminar!', 'error',10, null);
						}
					}

				});

			});

		});//FIN ELIMINAR



			$('#nueva_marca').click(function(){
			$('#formMarca')[0].reset();//Limpiar el formulario en caso de un nueva insersión
			$('#marca').modal('show');
			$('#marca').find('.modal-title').text('Nueva Marca');
			$('#formMarca').attr('action','<?= base_url('marca_controller/ingresar') ?>');

		});



			$('#btnGuardar').click(function(){
				$resp = validarMarca();//Validar formulario (función en carpeta JS)
				if($resp == true){//Según lo que devuelva la funcion (true o false) va proceder o NO
			$url = $('#formMarca').attr('action');
			$data = $('#formMarca').serialize();

			$.ajax({
				type: 'ajax',
				method: 'post',
				url: $url,
				data: $data,
				dataType: 'json',
				success: function(respuesta){

					$('#marca').modal('hide');


					if(respuesta=='add'){
						alertify.notify('Ingresado exitosamente!','success',10,null);
					}
					else if (respuesta=='edi'){
						alertify.notify('Actualizado exitosamente!','success',10,null);

					}else{
						alertify.notify('Error al Ingresar!','error',10,null);
					}
					//limpiar Inputs
					$('#formMarca')[0].reset();
					//actualizar la tabla
					mostrarMarca();

				}





			});
		}

		});



			//actualizar Datos
			$('#tabla_marca').on('click','.item-edit',function(){
			var id = $(this).attr('data');

			$('#marca').modal('show');
			$('#marca').find('.modal-title').text('Actualizar Marca');
			$('#formMarca').attr('action','<?= base_url('marca_controller/actualizar') ?>');



			$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?= base_url('marca_controller/get_datos') ?>',
				data: {id:id},
				dataType: 'json',

				success: function($datos){
					$('#id').val($datos.id_marca);
					$('#btnMarca').val($datos.n_marca);



				}

			});





		});












});

</script>