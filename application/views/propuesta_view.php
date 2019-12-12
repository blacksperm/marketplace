</head>
<?php $this->load->helper('ajax_propuesta') ?>
<body>
	<br>
	<br>
	<div class="container">
		<table border="2">
			<tr>
				<td>N° de Propuesta</td>
				<td width="100">Solicitante</td>
				<td>Requerimiento</td>
				<td width="400">Oferto</td>
				
				<td>Precio</td>
				<td>Eliminar</td>
				<td>Actualizar</td>
				

			</tr>
	<tbody id="tabla_propuesta">
	</tbody>
			
		</table>
		<br>
		<button type="button" class="btn btn-success" id="nuevaPro">Ingresar</button>
		
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






<!-- Modal Ingresar -->


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
						<input type="hidden" name="id_propuesta" id="id" value="0">
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
					<button type="button" id="btnGuardar" class="btn btn-primary">Guardar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>	
