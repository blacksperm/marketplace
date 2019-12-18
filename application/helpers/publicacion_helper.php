<script>
	$(document).ready(function(){

		
		publicacion();

		function publicacion(){
			$.ajax({
				type: 'ajax',
				url: '<?= base_url('req_controller/requerimiento') ?>',
				dataType: 'json',
				success: function(datos){
					var data = '';
					var i;

					for(i=0; i<datos.length; i++){
						data +=
						datos[i].nombre_producto
						datos[i].tipo_producto
						datos[i].n_marca
						datos[i].precio
						datos[i].usuario
						datos[i].descripcion
						datos[i].transaccion
						'<td>'+'<a href="javascript:;" class="btn btn-danger btn-sm borrar" data="'+datos[i].id_requerimiento+'">Eliminar</a>'+
						'</td>'+
						'<td>'+'<a href="javascript:;" class="btn btn-info btn-sm item-edit" data="'+datos[i].id_requerimiento+'">Editar</a>'+
						'</td>'+
						'<td>'+'<a href="javascript:;" class="btn btn-primary btn-sm aply" data="'+datos[i].id_requerimiento+'">Aplicar</a>'+
						
					}
					$('.titulo').html(datos[i].nombre_producto);
				}
			});
		};
		
