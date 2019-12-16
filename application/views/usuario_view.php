<?php $this->load->helper('usuario'); ?>
<?php $this->load->helper('validacionesUsuario'); ?>
<body>
	<div class="container">
		<button type="button" class="btn btn-success" id="nueUsu">Nuevo</button>


		<table border="1" style="margin-top: 10px;">
			<thead>
				<tr>
					<td>N°</td>
					<td>Nombres</td>
					<td>Edad</td>
					<td>Usuario</td>
					<td>Rol</td>
					<td>Correo</td>
					<td>N° de telefono</td>
					<td>Eliminar</td>
					<td>Editar</td>
				</tr>
			</thead>
			<tbody id="tabla_usuarios">

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
		<div class="modal fade" id="usuario">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title" style="font-family: 'Montserrat', cursive; color: #a8834c;"></h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<form id="formUsuario" action="" method="POST" style="font-family: 'Montserrat', cursive; color: #46281e;">
							<input type="hidden" name="id_usuarios" id="id" value="0">
							<div class="row">
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Nombres</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="nombres" id="nombre">
									</div>
								</div>
								<div class="col">
									<div class="input-group">
										<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Apellidos</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="apellidos" id="apellido">
									</div>
								</div>
							</div>

							<div class="row my-3">
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Edad</span>
										<input type="number" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="edad" id="edad">
									</div>
								</div>
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Usuario</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="usuario" id="usuarios">
									</div>
								</div>
							</div>
							<div class="row my-3">
								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Rol</span>
										<select name="rol" id="rol" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
											<option value="">-- Seleccione un rol --</option>
										</select>
									</div>
								</div>


								<div class="col">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Correo</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="correo" id="correo">
									</div>
									<div id="infoCorreo"></div>
								</div>
							</div>
							<div class="row my-3">
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Telefono</span>
										<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="telefono" id="telefono">
									</div>
								</div>


								<div class="col-md-6" id="oculto">
									<div class="input-group">
										<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Contraseña</span>
										<input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="clave" id="clave">
									</div>
								</div>
								
							</div>
							
						</div>
					</form>							

					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</div>	
		</div>
	</div>