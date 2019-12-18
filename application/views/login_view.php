<link rel="stylesheet" href="<?= base_url('props/bootstrap/font/css/font-awesome.css') ?>">
<script type="text/javascript" src="<?= base_url('props/bootstrap/js/login_val.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body style="background: -webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%); -webkit-user-select:none;">
	<br><br><br><br>
	<?php $this->load->view('valid/login_val_xtnd') ?>
	<center>
		<div class="card container" style="background-color: #009AC0;width: 450px;">
			<br>
			<div style="color: white;">
				<label><h3 style="font-size: 40px">Iniciar Sesión</h3></label>
			</div>
			<hr>
			<div>					
				<table>
					<tr>
						<form id="login_form" action="<?= base_url().'login_cont/Ingresar' ?>" method="post" onsubmit="return login_valid();">
							<td><label style="font-family: 'Verdana', font-size: 15px;"><center><h6>Digite su Usuario</h6></center></label></td>
							<td><input type="text" style="border-radius: 5px;width: 75%;height: 5%;" name="usr" id="usr" placeholder="--Username--" class="form-control"></td>
							<div id="info_usr"></div>
						</tr>
						<tr>
							<td><label style= "font-family: 'Verdana',font-size: 15px;margin-top: 20px;"><center><h6>Digite su Contraseña</h6></center></label></td>
							<td><input type="password" style="border-radius: 5px;width: 35%;height: 70%;width: 100%" name="pw" id="pw" placeholder="--Contraseña--" class="form-control"></td>
							<td><button title="Mostrar/Ocultar clave" style="margin-top: 6px;margin-bottom: 5px;margin-left: 5px" class="btn btn-secondary" type="button" onclick="mostrarPasswordAct()"> <span class="fa fa-eye-slash icon" id="show_pw"></span> </button></td>
						</tr>
					</table>
					<input style="width:15px; height:15px" type="checkbox" class="form-check-input" id="dropdownCheck2">
					<label class="form-check-label" for="dropdownCheck2">
						Mantener sesión activa
					</label>
					<br>
					<input type="submit" id="send" name="" class="btn btn-success" style="font-size: 80%;  margin-top: 9px; width: 25%; height: 7%; border-radius: 10px;margin-bottom: 10px;" Value="INGRESAR">
				</form>
			</div>



		</center>
		<br>
		<center>
			<font ><p align="center">¿Olvidó su contranseña?
				<a style="margin-top: 10px;color: red;" href="<?= base_url('email/Account_reset');?>">Click aquí</a>
			</p></font>
		</center>

		<?php if(isset($invalid)){ ?>
			<div style="-webkit-user-select:none;">
				<script>
					Swal.fire({
						icon: 'error',
						title: 'Error al validar sus credenciales',
						html: 'Su Email y Contraseña no coinciden<br> Lamentamos los inconvenientes',
						showConfirmButton: false,
						// allowOutsideClick: false,
						footer: '<button type="button" class="btn btn-primary btn-lg" id="invalid">Enterado</button>'
					})
				</script>
			</div>
<!-- 			<script type="text/javascript">
				document.getElementById('send').disabled = true;
			</script> -->
		<?php } ?>


		<script>
			function mostrarPasswordAct(){
				var cambio = document.getElementById("pw");
				if(cambio.type == "password"){
					cambio.type = "text";
					document.getElementById("show_pw").className = "fa fa-eye";
				}else{
					cambio.type = "password";
					document.getElementById("show_pw").className = "fa fa-eye-slash";
				}
			} 
		</script>



	</body>
	</html>