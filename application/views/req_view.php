<?php $this->load->helper('req') ?>
<?php $this->load->helper('ajax_propuesta') ?>

<body>
	
	
	
	<br><br>
	<br><br>
	<div class="container">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th>N°</th>
					<th>Producto</th>
					<th>Tipo de producto</th>
					<th>Marca</th>
					<th>Precio</th>
					<th>Usuario</th>
					<th>Descipcion</th>
					<th>Transacción</th>
					<th>Eliminar</th>
					<th>Actualizar</th>
					<th>Aplicar</th>

				</tr>
			</thead>
			<tbody id="trequerimiento">

			</tbody>
		</table>
		<br><br>
		<button type="button" class="btn btn-success" id="nrequerimiento">Nuevo</button>

	</div>

<br><br>





	<div class="modal" tabindex="-1" role="dialog" id="modalBorrar">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Confirmacion de eliminar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Realmente desea eliminar el registro?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="btnBorrar">Si, borrar</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>



	<!-- The Modal Nuevo Requerimiento -->
	<div class="modal fade" id="reque">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="font-family: 'Montserrat', cursive; color: #a8834c;"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form id="formreque" action="" method="POST" style="font-family: 'Montserrat', cursive; color: #46281e;">
						<input type="hidden" name="id_reque" id="id" value="0">
						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>nombre produto</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nproducto" id="nproducto">
								</div>

							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Categoria</span>
									<select name="producto" id="producto" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
										<option value="">-- Seleccione una Categoria--</option>
									</select>
								</div>
							</div>

						</div>
						<br>

						

						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>precio</span>
									<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="precio" id="precio">
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Marca</span>
									<select name="marca" id="marca" class="form-control">
										<option value="">-- Seleccione una Marca--</option>
									</select>
								</div>
							</div>
						</div>
						
						<?php $id = $this->session->userdata('id');?>
						<div class="row my-3">


							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>transaccion</span>
									<select name="transaccion" id="transaccion" class="form-control">
										<option value="">-- Seleccione un transaccion--</option>
									</select>
								</div>

							</div>


							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>descripcion</span>
									<textarea class="form-control" style="height: 38px" name="descripcion" id="descripcion"></textarea>
								</div>
								

							</div>
						</div>

						<div class="row">
							<div class="col" style="visibility: hidden;">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>usuario</span>
									<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= $id; ?>" name="usuario" id="usuario">
								</div>
							</div>

						</div>	


						
						
					</form>							
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>	




	<!-- Modal Ingresar Propuesta -->


	<div class="modal fade" id="propuesta">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="font-family: 'Montserrat', cursive; color: #a8834c;"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form id="formPropuesta" action="" method="POST" style="font-family: 'Montserrat', cursive; color: #46281e;">
						<input type="hidden" name="id_requerimiento" id="idR" value="0">
						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Producto</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="producto" id="producto">
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Precio</span>
									<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="precio" id="precio">
								</div>

							</div>
						</div>
						<br>


						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Imagenes</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="img" id="img">
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Estado</span>
									<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
										<option value="">--Estado de Producto --</option>
									</select>
								</div>

							</div>
						</div>
						<br>



						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Descripción</span>
									<textarea class="form-control" style="height: 38px" name="descripcion" id="descripcion"></textarea>
								</div>
								<?php $id = $this->session->userdata('id');?> 
								<!-- variable de inicio de sesion -->
							</div>
							<div class="col">
								<div class="input-group">
									
									<input type="hidden" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?= $id; ?>" name="usuario" id="usuario">
								</div>
							</div>

						</div>

					</div>

				</form>							

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" id="btnGuardarP" class="btn btn-primary">Guardar</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>


