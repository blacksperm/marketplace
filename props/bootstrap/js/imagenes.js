$(document).on("ready", function(){
	$("#formSubidas").submit(function(e){
		e.preventDefault();
		var formadata = new formData($("#formSubidas")[0]);
		$.ajax({
			url:$(this).attr("action"),
			type:$(this).attr("method"),
			data:formadata,
			contenType:false,
			processData:false,
			cache:false,
			success: function(resp){
				alert(resp);
			}
		});
	});
});