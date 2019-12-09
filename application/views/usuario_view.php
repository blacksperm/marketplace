<?php $this->load->helper('usuario') ?>
<body>
	<button type="button" class="btn btn-success" id="nueAlu">Nuevo</button>


	<table border="1">
		<thead>
			<tr>
				<td>N°</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Edad</td>
				<td>Usuario</td>
				<td>Rol</td>
				<td>Correo</td>
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
	<div class="modal fade" id="alumno">
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
						<input type="hidden" name="id_alumno" id="id" value="0">
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
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Sexo</span>
									<select name="sexo" id="sexo" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
										<option value="">-- Seleccione un sexo --</option>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<span class="input-group-text" ><i class="fa fa-tags" >&nbsp</i>Curso</span>
									<select name="curso" id="curso" class="form-control">
										<option value="">-- Seleccione un curso--</option>
									</select>
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