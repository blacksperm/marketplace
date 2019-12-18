
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicia Sesion</title>
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css');?>"  />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url('assets/css/demo.css'); ?>">	
	<!-- Estilo de bootstrap -->
	<link rel="stylesheet" href="<?= base_url('props/bootstrap/css/bootstrap.css') ?>">
	<!-- Estilo de alertas -->
	<link rel="stylesheet" href="<?= base_url('props/alertifyjs/css/alertify.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('props/alertifyjs/css/themes/default.min.css') ?>">

	<!-- Libreria jquery necesaria para el funcionamiento de AJAX y demas efectos -->
	<script src="<?php echo base_url('props/bootstrap/js/jquery.js') ?>"></script>
	<script src="<?php echo base_url('props/bootstrap/js/jquery.mask.min.js') ?>"></script>
	<!-- Libreria js de bootstrap necesaria para efectos de modal -->
	<script src="<?php echo base_url('props/bootstrap/js/bootstrap.js');?>"></script>
	<!-- Libreria js de alertify necesaria para ejecutar las alertas -->
	<script src="<?php echo base_url('props/alertifyjs/alertify.min.js');?>"></script>	

	<script type="text/javascript" src="<?= base_url('props/bootstrap/js/login_val.js') ?>"></script>

</head>
<?php
if($this->session->userdata('logged')==TRUE){
	redirect('propuesta_controller/index');  

} 
?>
<body style="background: -webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);">

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