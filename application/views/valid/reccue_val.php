<script>
	$(document).ready(function(){

		$("#correo")blur(function(){
			var correo = $("#correo").val();
			if(correo.length == 0){
				$("#sender").attr('disabled', true);
				$("#infocorreo").text('Este Campo es Obligatorio').css('color', 'red');
				$("#correo").css('boxShadow', '0 0 25px red');
			}else{
				$("#sender").attr('disabled', false);
				$("#infocorreo").text(' ').css('color', 'lime');
				$("#correo").css('boxShadow', '0 0 25px lime');
			}
		});

	});
</script>