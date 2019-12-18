	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<?php $this->load->view('valid/reccue_val') ?>
</head>
<body style="background: -webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);">
	<br><br>
	<form action="<?php echo base_url().'email/send' ?>" method="POST" autocomplete="off">
		<center>
			<div class="card card-signin my-5 col-md-4" style="background-color: #009AC0">
				<br>
				<div>
					<h3 style="font-size: 40px; color: white;">Recuperar su cuenta</h3>
				</div>
				<hr>
				<div class="card-body">
					<div>
						<label style="font-family: 'verdana', cursive; font-size: 20px;">Digite su correo de recuperación</label>
						<input type="email" id="correo" name="correo" placeholder="--Email--" class="form-control">
						<div id="infocorreo"></div>
					</div>
					<div class="my-2">
						<input id="sender" type="submit" value="Recuperar" class="btn btn-success">
						<a class="btn btn-danger" style="margin-left: 10px" href="<?= base_url('login_cont/index') ?>">Volver</a>
					</div>
				</div>
				<div>
				</div>
			</div>
		</center>
	</form>


	<script src="<?php echo base_url('props/bootstrap/js/jquery.js');?>"></script>
	<script src="<?php echo base_url('props/bootstrap/js/bootstrap.js');?>"></script>
	<?php if (isset($msj)) { ?>
		<script>
			Swal.fire({
				title: 'El email que ha ingresado no existe en nuestra Base de Datos',
				text: "Puede que no lo haya escrito correctamente, lamentamos los inconvenientes",
				icon: 'warning',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: '<a style="text-decoration:none;color: white;" href="Account_reset">Aceptar</a>'
			})
		</script>
	<?php } ?>

	<?php if (isset($msj2)) { ?>
		<script>
			Swal.fire({
				title: 'Cuenta Recuperada',
				text: "Revise la Bandeja de Entrada de su correo",
				icon: 'success',
				showCancelButton: false,
				confirmButtonColor: '#3085d6',
				confirmButtonText: 'Aceptar'
			})
		</script>
	<?php } ?>

	<font style="color: transparent;">
		<?php if(isset($compr)){echo $compr;} ?>
		<?php if(isset($pwgen)){echo $pwgen;} ?>
	</font>

</body>
</html>