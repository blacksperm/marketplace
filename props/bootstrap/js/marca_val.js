function validarMarca(){
	var marca = document.getElementById('btnMarca').value;

	if(marca.length == 0){

		document.getElementById("btnMarca").style.boxShadow = "0 0 15px red";
		document.getElementById("btnMarca").placeholder = "Este campo es obligatorio";   
		return false;
	}else{
		document.getElementById("btnMarca").style.boxShadow = '0 0 15px green';
	}

	return true;

}


