<script>
	$(document).ready(function(){

		$("#usr").keyup(function(){
			$usr = $("#usr").val();
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?= base_url('login_cont/cons_account') ?>',
				data: {usr:$usr},
				dataType: 'json',

				success: function(respuesta){
					if(respuesta == 'usr_exists'){
						$("#usr").css('boxShadow', '0 0 25px lime');
						$("#pw").focus();
					}else{
						$("#usr").css('boxShadow', '0 0 25px red');
					}

				},
			});

			$usr = $("#usr").val();
			if($usr == "OR 1=1" || $usr == "'OR 1=1; /*" || $usr == "'OR 1=1; /*" || $usr == "'or '1'='1 /*" || $usr == "'or '1'='1" || $usr == "'or'1'='1" || $usr == "'OR '1'=1" || $usr == "'or '1'=1" || $usr == "'or 1='1 /*'"){
				$("#send").attr('disabled', true);

				Swal.fire({
					icon: 'error',
					title: 'Acceso Restringido',
					html: '¡No compartimos ese tipo de humor!!<br> Resérveselo porfavor',
					allowOutsideClick: false,
					showConfirmButton: false,
					footer: '<button type="button" onclick="location.reload();" class="btn btn-primary btn-lg" id="invalid">Enterado</button>'
					
				})

			}else{
				$("#send").attr('disabled', false);
			}
		});

		$("#pw").keyup(function(){
			$pw = $("#pw").val();
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: '<?= base_url('login_cont/cons_pass') ?>',
				data: {pw:$pw},
				dataType: 'json',

				success: function(respuesta){
					if(respuesta == 'pw_exists'){
						$("#pw").css('boxShadow', '0 0 25px lime');
					}else{
						$("#pw").css('boxShadow', '0 0 25px red');
					}

				},
			});

			$pw = $("#pw").val();
			if($pw == "OR 1=1" || $pw == "'OR 1=1; /*" || $pw == "'OR 1=1; /*" || $pw == "'or '1'='1 /*" || $pw == "'or '1'='1" || $pw == "'or'1'='1" || $pw == "*/--" || $pw == "'OR '1'=1" || $pw == "'or '1'=1" || $pw == "'or 1='1 /*'"){
				$("#send").attr('disabled', true);

				Swal.fire({
					icon: 'error',
					title: 'Acceso Restringido',
					html: '¡No compartimos ese tipo de humor!!<br> Resérveselo porfavor',
					allowOutsideClick: false,
					showConfirmButton: false,
					footer: '<button type="button" onclick="location.reload();" class="btn btn-primary btn-lg" id="invalid">Enterado</button>'
					
				})

			}else{
				$("#send").attr('disabled', false);
			}
		});


		$("#invalid").click(function(){
			window.location = "index";
		});
	});
</script>