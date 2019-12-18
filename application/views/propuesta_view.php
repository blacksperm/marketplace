
<?php $this->load->helper('ajax_propuesta') ?>

<body>
	<?php $this->load->view('navbar') ?>

	<div class="container" style="margin-top: 30px; width: 100%;">
		<h4 style="font-size: 150%; font-family: Georgia;">Propuestas</h4>
		<table class="table"  style="margin-top: 10px; width: 100%;">
			<thead  style="background-color: #8762A7;">
				<tr>
					<th  style="color: white;">N° de Propuesta</th>
					<th  style="color: white;" width="100">Solicitante</th>
					<th  style="color: white;">Requerimiento</th>
					<th  style="color: white;" width="400">Oferto</th>

					<th  style="color: white;">Imagen</th>
					<th  style="color: white;">Precio</th>
					<th  style="color: white;">Eliminar</th>
					<th  style="color: white;">Actualizar</th>
				</tr>
			</thead>
			<tbody id="tabla_propuesta">
			</tbody>
			
		</table>

		
		
	</div>

	<!-- Modal para eliminar -->

	<div class="modal fade" tabindex="-1" role="dialog" id="modalBorrar">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">El siguiente cambio es Irreversible</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Realmente Desea eliminar su propuesta?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" id="btnBorrar">Si, Borrar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>







