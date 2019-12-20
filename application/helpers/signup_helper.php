<script>
	$(document).ready(function(){

		$("#btnSignup").mouseover(function(){
			$("#signup_form").attr('action', '<?= base_url('signup/Registrarse') ?>');
		});

		$("#btnSignup").click(function(){
			$confirmation = validate_signup();
			if($confirmation == true){

				$url = $("#signup_form").attr('action');
				$data = $("#signup_form").serialize();

				$.ajax({
					type: 'ajax',
					method: 'post',
					url: $url,
					data: $data,
					dataType: 'json',

					success: function(resp){
						if(resp == 'added'){

							Swal.fire({
								icon: 'success',
								title: 'Cuenta Registrada correctamente',
								showConfirmButton: false,
								text: 'Inicie Sesión con su nueva cuenta!!',
								allowOutsideClick: false,
								footer: '<button class="btn btn-primary" id="goto_lg">Continuar</button>'
							});
							$("#signup_form")[0].reset();
						}else{
							alertify.notify('Ha ocurrido un ERROR!!', 'error', 17, null);
						}
					},

					error: function(){
						alert('ERROR!! JODEEEEER!!');
					}
				});
			}

		});


		$("#goto_lg").click(function(){
			window.location = "index";
		});


		function validate_signup(){
			$nombre = $("#nombre").val();
			$apellido = $("#apellido").val();
			$edad = $("#edad").val();
			$usuario = $("#usuario").val();
			$pass = $("#pass").val();
			$correo = $("#correo").val();
			$contacto = $("#contacto").val();

			if($nombre.length == 0){
				$("#nombre").css('boxShadow', '0 0 25px red');
				return false;
				$("#nombre").attr('placeholder', 'Campo Obligatorio');
			}else{
				$("#nombre").css('boxShadow', '0 0 25px lime');
			}


			if($apellido.length == 0){
				$("#apellido").css('boxShadow', '0 0 25px red');
				return false;
				$("#apellido").attr('placeholder', 'Campo Obligatorio');
			}else{
				$("#apellido").css('boxShadow', '0 0 25px lime');
			}


			if($edad.length == 0){
				$("#edad").css('boxShadow', '0 0 25px red');
				return false;
				$("#edad").attr('placeholder', 'Campo Obligatorio');
			}else{
				$("#edad").css('boxShadow', '0 0 25px lime');
			}


			if($usuario.length == 0){
				$("#usuario").css('boxShadow', '0 0 25px red');
				return false;
				$("#usuario").attr('placeholder', 'Campo Obligatorio');
			}else{
				$("#usuario").css('boxShadow', '0 0 25px lime');
			}

			/*****************************************************************************/
			if($pass.length > 7){
				$("#pass").css('boxShadow', '0 0 25px lime');
				$("#info_pass").text(' ').css('color', 'lime');

			}else{
				$("#pass").css('boxShadow', '0 0 25px red');
				$("#info_pass").text('La contraseña debe tener al menos 8 caracteres').css('color', 'red');
				return false;
			}

			if(/^(?=.*[A-Z])/.test($pass)){
				$("#pass").css('boxShadow', '0 0 25px lime');
				$("#info_pass").text(' ').css('color', 'lime');

			}else{
				$("#pass").css('boxShadow', '0 0 25px red');
				$("#info_pass").text('Debe agregar al menos una letra mayúscula').css('color', 'red');
				return false;
			}


			if(/^(?=.*[a-z])/.test($pass)){
				$("#pass").css('boxShadow', '0 0 25px lime');
				$("#info_pass").text(' ').css('color', 'lime');

			}else{
				$("#pass").css('boxShadow', '0 0 25px red');
				$("#info_pass").text('Debe agregar al menos un letra minúscula').css('color', 'red');
				return false;
			}

			if(/^(?=.*\d)/.test($pass)){
				$("#pass").css('boxShadow', '0 0 25px lime');
				$("#info_pass").text(' ').css('color', 'lime');
			}else{
				$("#pass").css('boxShadow', '0 0 25px red');
				$("#info_pass").text('Debe agregar al menos un dígito').css('color', 'red');
				return false;
			}

			if(!(/\s/.test($pass))){
				$("#pass").css('boxShadow', '0 0 25px lime');
				$("#info_pass").text(' ').css('color', 'lime');

			}else{
				$("#pass").css('boxShadow', '0 0 25px red');
				$("#info_pass").text('Sin espacios en blanco').css('color', 'red');
				return false;
			}

			if(/(?=.*[$@$!%*?&])/.test($pass)){
				$("#pass").css('boxShadow', '0 0 25px lime');
				$("#info_pass").text(' ').css('color', 'lime');

			}else{
				$("#pass").css('boxShadow', '0 0 25px red');
				$("#info_pass").text('Al menos un caracter especial, solo estos: $!%*?&').css('color', 'red');
				return false;
			}

			/***********************************************************************************/

			if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($correo) || /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test($correo)){
				$("#correo").css('boxShadow', '0 0 25px lime');
			}else{
				$("#correo").css('boxShadow', '0 0 25px red');
				return false;
			}


			if(/^([0-9]{5})+(-){0,1}([0-9]{6})$/i.test($contacto)){
				$("#contacto").css('boxShadow', '0 0 25px lime');
			}else{

				$("#contacto").css('boxShadow', '0 0 25px red');
				return false;	
			}

			return true;

		}


	});
</script>