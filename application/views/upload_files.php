
<script src="<?php echo base_url('props/bootstrap/js/imagenes.js') ?>"></script>
<body>
	<div class="container">
		<div class="row">
			<form enctype="multipart/form-data" action="<?php echo base_url('Upload_files/subir') ?>"" method="post" id="formSubidas">
				<div class="form-group">
					<label>Choose Files</label>
					<input type="file" id="uploadImage" class="form-control" name="userFiles[]" onchange="previewImage(7);" multiple/>
					<img id="uploadPreview1" width="150" height="150">
				</div>
				<div class="form-group">
					<input class="form-control" type="submit" value="subir">
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		function previewImage(nb) {        
			var reader = new FileReader();         
			reader.readAsDataURL(document.getElementById('uploadImage'+nb).files[0]);         
			reader.onload = function (e) {             
				document.getElementById('uploadPreview1'+nb).src = e.target.result;         
			};     
		}
	</script>
