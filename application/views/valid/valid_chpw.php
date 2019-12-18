<script>
	$(document).ready(function(){
		$("#clave").keyup(function(){
			$pw = $("#clave").val();
			$user = $("#usuario").val();
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?= base_url('user_comps/validar_clave') ?>',
				data: {contra:$pw, user:$user},
				dataType: 'json',
				success: function(resp){
					var clave = $("#clave").val();
					if(resp==true){
						$("#clave").css('boxShadow', '0 0 25px lime');
						$("#infocontra").text('Contraseña correcta para su Usuario').css('color', 'lime');
						// $("#sender").attr('disabled', false);
						$("#contra1").removeAttr("readOnly");
						$("#contra1").css('boxShadow', '0 0 25px purple');
						$("#clave").attr('readOnly', true);
						$("#contra1").focus();
					}else if(clave.length ==0){
						$("#clave").css('boxShadow', '0 0 25px red');
						$("#infocontra").text('Campo obligatorio').css('color', 'red');
						$("#sender").attr('disabled', true);
						$("#contra1").attr('readOnly', true);
						$("#contra2").attr('readOnly', true);

					}else{
						$("#clave").css('boxShadow', '0 0 25px red');
						$("#infocontra").text('Contraseña incorrecta, continúe hasta que coincida con su usuario').css('color', 'red');
						$("#sender").attr('disabled', true);
						$("#contra1").attr('readOnly', true);
					}
				},
			});
		});

		$("#contra1").keyup(function(){

			var clave = $("#clave").val();
			var contra1 = $("#contra1").val();
			var contra2 = $("#contra2").val();

			if(contra1 == contra2){

				$("#infocontrarep").text('OK').css('color', 'lime');
				$("#infocontrarep2").text('OK').css('color', 'lime');
				$("#contra1").css('boxShadow', '0 0 25px lime');
				$("#contra2").css('boxShadow', '0 0 25px lime');
				$("#contra2").removeAttr("readOnly");
				$("#contra2").css('boxShadow', '0 0 25px lime');
				$("#contra_master").val(contra2);
				$("#sender").attr('disabled', false);

				
				// if(contra1 == contra2){
				// }


			}else{

				$("#sender").attr('disabled', true);
				$("#contra1").css('boxShadow', '0 0 25px red');
				$("#contra2").css('boxShadow', '0 0 25px red');
				$("#infocontrarep").text('').css('color', 'red');
				$("#infocontrarep2").text('').css('color', 'red');
				$("#contra2").attr('readOnly', true);
			}

			if(clave == contra1){
				$("#sender").attr('disabled', true);
				$("#contra1").css('boxShadow', '0 0 25px red');
				$("#infocontrarep").text('No puede repetir su contraseña actual').css('color', 'red');
				$("#contra2").attr('readOnly', true);

			}else{

				if(contra1.length > 7){
					$("#infocontrarep").text(' ').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					// $("#contra2").removeAttr("readOnly");
					$("#min_char").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#min_char").css('color', 'red');
					$("#min_char").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}


				if(contra1.length < 15){
					$("#infocontrarep").text(' ').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					// $("#contra2").removeAttr("readOnly");
					$("#max_char").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#max_char").css('color', 'red');
					$("#max_char").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}

				if(/^(?=.*[A-Z])/.test(contra1)){
					$("#infocontrarep").text(' ').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					// $("#contra2").removeAttr("readOnly");
					$("#mayus").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#mayus").css('color', 'red');
					$("#mayus").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}


				if(/^(?=.*[a-z])/.test(contra1)){
					$("#infocontrarep").text(' ').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					// $("#contra2").removeAttr("readOnly");
					$("#minus").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#minus").css('color', 'red');
					$("#minus").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}

				if(/^(?=.*\d)/.test(contra1)){
					$("#infocontrarep").text(' ').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					// $("#contra2").removeAttr("readOnly");
					$("#numb").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#numb").css('color', 'red');
					$("#numb").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}

				if(!(/\s/.test(contra1))){
					$("#infocontrarep").text(' ').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					// $("#contra2").removeAttr("readOnly");
					$("#ns").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#ns").css('color', 'red');
					$("#ns").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}

				if(/(?=.*[$@$!%*?&])/.test(contra1)){
					$("#infocontrarep").text('...').css('color', 'lime');
					$("#contra1").css('boxShadow', '0 0 25px white');
					$("#esp_char").css('color', '#5FEE0E').removeClass('fa fa-close').addClass('fa fa-check');
					// $("#contra2").removeAttr("readOnly");

				}else{
					$("#infocontrarep").text('Contraseña inválida').css('color', 'red');
					$("#contra2").attr('readOnly', true);
					$("#esp_char").css('color', 'red');
					$("#esp_char").addClass('fa fa-close');
					$("#sender").attr('disabled', true);
				}
			}
		});

// $("#contra1").blur(function(){
// 	$("#contra1").attr('readOnly', true);
// });




		// $("#contra1").change(function(){
		// 	var contra1 = $("#contra1").val();
		// 	var contra2 = $("#contra2").val();

		// 	if(contra1 == contra2){

		// 		$("#infocontrarep").text('OK').css('color', 'lime');
		// 		$("#infocontrarep2").text('OK').css('color', 'lime');
		// 		$("#contra1").css('boxShadow', '0 0 25px lime');
		// 		$("#contra2").css('boxShadow', '0 0 25px lime');

		// 		$("#contra2").css('boxShadow', '0 0 25px lime');
		// 		$("#contra_master").val(contra2);
		// 		$("#sender").attr('disabled', false);
		// 		// if(contra1 == contra2){
		// 		// }


		// 	}else{
		// 		$("#sender").attr('disabled', true);
		// 		$("#contra1").css('boxShadow', '0 0 25px red');
		// 		$("#contra2").css('boxShadow', '0 0 25px red');
		// 		$("#infocontrarep").text('').css('color', 'red');
		// 		$("#infocontrarep2").text('').css('color', 'red');

		// 	}

		// });





		$("#contra2").keyup(function(){
			var contra1 = $("#contra1").val();
			var contra2 = $("#contra2").val();

			if(contra1 == contra2){

				$("#infocontrarep").text('OK').css('color', 'lime');
				$("#infocontrarep2").text('OK').css('color', 'lime');
				$("#contra1").css('boxShadow', '0 0 25px lime');
				$("#contra2").css('boxShadow', '0 0 25px lime');

				$("#contra2").css('boxShadow', '0 0 25px lime');
				$("#contra_master").val(contra2);
				$("#sender").attr('disabled', false);
				$("#contra1").removeAttr("readOnly");
				// if(contra1 == contra2){
				// }

			}else{

				$("#sender").attr('disabled', true);
				$("#contra1").css('boxShadow', '0 0 25px red');
				$("#contra2").css('boxShadow', '0 0 25px red');
				$("#infocontrarep").text('').css('color', 'red');
				$("#infocontrarep2").text('').css('color', 'red');
				$("#contra1").attr('readOnly', true);

			}


		});

		$("#contra1").blur(function(){
			$contra1 = $("#contra1").val();

			if($contra1.length == 0){
				$("#contra1").css('boxShadow', '0 0 25px red');
				$("#infocontrarep").text('Campo obligatorio').css('color', 'red');
				$("#sender").attr('disabled', true);
			}
		});


		$("#contra2").blur(function(){
			$contra2 = $("#contra2").val();

			if($contra2.length == 0){
				$("#contra2").css('boxShadow', '0 0 25px red');
				$("#infocontrarep2").text('Campo obligatorio').css('color', 'red');
				$("#sender").attr('disabled', true);

			}
		});

		$("#contra2").mouseover(function(){
			$min_char = $("#min_char").attr('class');
			$max_char = $("#max_char").attr('class');
			$mayus = $("#mayus").attr('class');
			$minus = $("#minus").attr('class');
			$numb = $("#numb").attr('class');
			$ns = $("#ns").attr('class');
			$esp_char= $("#esp_char").attr('class');

			if($min_char == "fa-check fa" && $max_char == "fa-check fa" && $mayus == "fa-check fa" && $minus == "fa-check fa" &&
				$numb == "fa-check fa" && $ns == "fa-check fa" && $esp_char == "fa-check fa"){
				// $("#infocontra").text($min_char);
			$("#contra2").removeAttr("readOnly");
			}
			
		});


		// $("#contra2").focus(function(){
		// 	$("#sender").attr('disabled', true);

		// });


		// $("#th1").click(function(){
		// 	$("#min_char").css('color', '#5FEE0E');
		// });



	});
</script>