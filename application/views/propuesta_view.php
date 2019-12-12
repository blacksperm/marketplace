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
				<td>Producto</td>
				<td width="400">Descripción</td>
				<td>Contacto</td>
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







