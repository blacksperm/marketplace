</head>
<?php $this->load->helper('marca') ?>
<body>
	<br><br>
	<div class= "container">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">N°</th>
					<th scope="col">Marca</th>
					<th scope="col">Borrar</th>
					<th scope="col">Actualizar</th>
				</tr>
				
			</thead>
			<tbody id="tabla_marca">
			</tbody>			
		</table>
		<button type="button" class="btn btb-success" id="nueva_marca">Nueva Marca</button>
	</div>

<!-- -------------------------------------------------------------------------------------------------
										MODAL ELIMINAR -->


	<div class="modal fade" tabindex="-1" role="dialog" id="modalBorrar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Configuracion de Borrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Realmente Desea eliminar está marca?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" id="btnBorrar">Si, Borrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal Ingresar -->


	<div class="modal fade sm" id="marca" style="width:500px;margin-left: 500px">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title" style="font-family: 'Montserrat', cursive; color: #a8834c;"></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form id="formMarca" action="" method="POST" style="font-family: 'Montserrat', cursive; color: #46281e;">
						
						<div class="row">

							<div class="col-sm-12">
								<div class="input-group">
									<span class="input-group-text"><i class="fa fa-tags">&nbsp</i>Marca</span>
									<input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="marca" id="btnMarca">
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




		