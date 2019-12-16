<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="<?= base_url('props/bootstrap/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('props/bootstrap/js/imagenes.js') ?>"></script>
<body>
	<div class="container">
		<div class="row">
			<form enctype="multipart/form-data" action="<?php echo base_url('Upload_files/subir') ?>"" method="post" id="formSubidas">
				<div class="form-group">
					<label>Choose Files</label>
					<input type="file" class="form-control" name="userFiles[]" multiple/>
				</div>
				<div class="form-group">
					<input class="form-control" type="submit" value="subir">
				</div>
			</form>
		</div>
	</div>
</body>
</html>