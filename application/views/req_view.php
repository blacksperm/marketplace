<?php $this->load->helper('req') ?>
<?php $this->load->helper('ajax_propuesta') ?>


<body>
	<button type="button" class="btn btn-success" id="nrequerimiento">Nuevo</button>
	
	<br><br>


	<table border="1">
		<thead>
			<tr>
				<td>N°</td>
				<td>Producto</td>
				<td>Tipo de producto</td>
				<td>Marca</td>
				<td>Precio</td>
				<td>Usuario</td>
				<td>Descipcion</td>
				<td>Transacción</td>
				<td>Eliminar</td>
				<td>Actualizar</td>
				<td>Aplicar</td>
				
			</tr>
		</thead>
		<tbody id="trequerimiento">
			
		</tbody>
	</table>





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



	<!-- The Modal -->
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
						

						<div class="row my-3">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>usuario</span>
									<select name="usuario" id="usuario" class="form-control">
										<option value="">-- Seleccione un usuario--</option>
									</select>
								</div>
							</div>

							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>transaccion</span>
									<select name="transaccion" id="transaccion" class="form-control">
										<option value="">-- Seleccione un transaccion--</option>
									</select>
								</div>

							</div>
						</div>	

						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>descripcion</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion">
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
						<input type="text" name="id_requerimiento" id="idR" value="0">
						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Producto</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="producto" id="producto">
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Descripción</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="descripcion" id="descripcion">
								</div>
							</div>
						</div>







				<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Imagenes</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="img" id="img">
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Precio</span>
									<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="precio" id="precio">
								</div>
							</div>
						</div>



						<div class="row">
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Estado</span>
									<select name="estado" id="estado" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
										<option value="">--Estado de Producto --</option>
									</select>
								</div>
							</div>
						<div class="col">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>usuario</span>
									<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="usuario" id="usuario">
								</div>
							</div>


							
						</div>
					</form>							
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" id="btnGuardarP" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>	