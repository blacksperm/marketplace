<?php $this->load->helper('imagen'); ?>
<body>
	<div class="container">
		<div class="row">
			<form enctype="multipart/form-data" action="" method="post" id="formSubidas">
				<div class="form-group">
					<label>Seleccione Fotografias</label>
					<input type="file" id="file" class="form-control" name="userFiles[]" multiple/>
					<div id="vista-previa"></div>
					
				</div>
				<div class="form-group">
					<input class="form-control" type="submit" value="subir" id="subir">
				</div>
			</form>
		</div>
	</div>

