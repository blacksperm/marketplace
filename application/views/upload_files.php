
<!-- <script src="<?php //echo base_url('props/bootstrap/js/imagenes.js') ?>"></script> -->
<body>
	<div class="container">
		<div class="row">
			<form enctype="multipart/form-data" action="<?php echo base_url('Upload_files/subir') ?>"" method="post" id="formSubidas">
				<div class="form-group">
					<label>Choose Files</label>
					<input type="file" id="file" class="form-control" name="userFiles[]" multiple/>
					<div id="preview"></div>
				</div>
				<div class="form-group">
					<input class="form-control" type="submit" value="subir">
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
  	let preview = document.getElementById('preview'),
  	image = document.createElement('img');

  	image.src = reader.result;

  	preview.innerHTML = '';
  	preview.append(image);
  };
}
</script>
