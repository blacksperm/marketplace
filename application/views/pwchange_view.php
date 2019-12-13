<link rel="stylesheet" href="<?= base_url('props/bootstrap/font/css/font-awesome.css') ?>">
<?php $this->load->view('navbar'); ?>
<?php $this->load->view('valid/valid_chpw'); ?>
</head>
<body style="background: -webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);">
	<br><br>
	<?php $user = $this->session->userdata('id'); ?>
	<br>
	<form id="form" action="<?php echo base_url().'user_comps/change_pw' ?>" method="POST" autocomplete="off">
		<center>
			<div class="card card-signin my-5 col-md-4" style="background-color: #009AC0;">
				<br>
				<div>
					<h3 style="font-size: 40px; color: white;">Cambiar la contraseña</h3>
				</div>
				<hr>
				<div class="card-body">
					<div>
						<label style="font-family: 'verdana', cursive; font-size: 20px;">Digite su contraseña actual</label>

						<div class="row">
							<div class="col">
								<input type="password" id="clave" name="clave" placeholder="--Contraseña--" style="box-shadow: 0 0 25px red; margin-left: 60px;width: 360px; margin-top: 5px" class="form-control">
							</div>
							<div class="col">
								<button title="Mostrar/Ocultar clave" style="margin-top: 6px;margin-bottom: 5px;margin-right: 35px" class="btn btn-secondary" type="button" onclick="mostrarPasswordAct()"> <span class="fa fa-eye-slash icon" id="show_pw"></span></button>
							</div>
						</div>
						<div style="color: red;" id="infocontra">Primero complete este campo</div>


					</div>
					<br><br><br><br>

					<label style="font-family: 'verdana', cursive; font-size: 20px;">Digite su nueva contraseña</label>
					<input type="password" name="contra1" id="contra1" placeholder="--Contraseña--" class="form-control" readonly>
					<div id="infocontrarep"></div><br>

					<label style="font-family: 'verdana', cursive; font-size: 20px;margin-top: 30px;">Compruebe su nueva contraseña</label>
					<input type="password" name="contra2" id="contra2" placeholder="--Contraseña--" class="form-control" readonly>
					<div id="infocontrarep2"></div>

					<input type="text" id="contra_master" name="contra_master" style="visibility: hidden;">
					<div>

						<input type="text" value="<?= $user ?>" name="usuario" id="usuario" style="width: 15px;height: 20px;visibility: hidden;">
					</div>
					<div class="my-2">
						<input type="submit" id="sender" value="Cambiar contraseña" class="btn btn-success" disabled>
						<a class="btn btn-danger" style="margin-left: 10px;" href="<?= base_url('login_cont/index') ?>">Volver</a>
					</div>
				</div>
				<div>
				</div>
			</div>
		</center>
	</form>



	<div style="position: absolute; top: 300px;right: 180px;">
		<h5 align="center" style="color: purple">Características que debe <br> cumplir la nueva contraseña:</h5>
		<div>
			<table>
				<tr><th id="th1">-Mínimo de 8 caracteres <li id="min_char" class="fa fa-check" style="color: transparent;"></li> </th></tr>
				<tr><th>-Máximo de 15 caracteres <li id="max_char"class="fa fa-check" style="color: transparent;"></li></th></tr>
				<tr><th>-Al menos una letra mayúscula <li id="mayus" class="fa fa-check" style="color: transparent;"></li></th></tr>
				<tr><th>-Al menos una letra minúscula <li id="minus" class="fa fa-check" style="color: transparent;"></li></th></tr>
				<tr><th>-Al menos un dígito <li id="numb" class="fa fa-check" style="color: transparent;"></li></th></tr>
				<tr><th>-Sin espacios en blanco <li id="ns" class="fa fa-check" style="color: transparent;"></li></th></tr>
				<tr><th>-Al menos un caracter especial (ej, $@$!%*?&) <li id="esp_char" class="fa fa-check" style="color: transparent;"></li></th></tr>
			</table>
		</div>
	</div>


	<script>
		function mostrarPasswordAct(){
			var cambio = document.getElementById("clave");
			if(cambio.type == "password"){
				cambio.type = "text";
				document.getElementById("show_pw").className = "fa fa-eye";
			}else{
				cambio.type = "password";
				document.getElementById("show_pw").className = "fa fa-eye-slash";
			}
		} 
	</script>