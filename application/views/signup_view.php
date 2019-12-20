<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>

	<link rel="stylesheet" type="text/css" href="../props/bootstrap/font/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../props/bootstrap/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>
<body style="background: url(../props/img/bg_signup.jpg) no-repeat; background-size: 100% 4800px">
	<?php $this->load->helper('signup'); ?>
	<br>
	<font color="white">
		<h1 align="center" style="font-family: Verdana; font-size: 52px">Regístrate</h1>
	</font>
	<center>
		<div class="card card-signin my-5 col-md-4" style="border-radius: 5% ;border: solid; background-color:#00A9AC" align="center">
			<form action="" method="post" id="signup_form">
				<div class="card-body">
					<div>
						<label style="font-family: Arial Black; font-size: 20px">Nombre: </label>
						<input type="text" class="text-center" name="nombre" id="nombre" placeholder="--Digite sus Nombres--" autocomplete="off">
					</div>
					<div class="my-2">
						<label style="font-family: Arial Black; font-size: 20px">Apellido: </label>
						<input type="text" class="text-center" name="apellido" id="apellido" placeholder="--Digite sus Apellidos--" autocomplete="off">
					</div>
					<div class="my-2">
						<label style="font-family: Arial Black; font-size: 20px">Edad: </label>
						<input type="number" class="text-center" name="edad" id="edad" placeholder="--Digite su edad--" autocomplete="off">
					</div>
					<div class="my-2">
						<label style="font-family: Arial Black; font-size: 20px">Usuario: </label>
						<input type="text" class="text-center" name="usuario" id="usuario" placeholder="--Digite su Número--" autocomplete="off">
					</div>
					<div class="my-2">
						<label style="font-family: Arial Black; font-size: 20px">Contraseña: </label>
						<input type="text" class="text-center" name="pass" id="pass" placeholder="--Nombre de Usuario--" autocomplete="off">
						<div id="info_pass" style="font-size: 15px"></div>
						<br>
					</div>
					<div class="my-2">
						<label style="font-family: Arial Black; font-size: 20px">Correo: </label>
						<input type="text" class="text-center" name="correo" id="correo" placeholder="--Digite su Clave--" autocomplete="off">
					</div>
					<div class="my-2">
						<label style="font-family: Arial Black; font-size: 20px">Contacto: </label>
						<input type="number" maxlength="8" class="text-center" name="contacto" id="contacto" placeholder="--Nombre de Usuario--" autocomplete="off"></form>
						<br>
					</div>
					<div>
						<button type="button" id="btnSignup" class="btn btn-danger">
						Registrarse</button>
					</div>
				</div>
			
		</div>
	</center>
	
	</body>
	</html>