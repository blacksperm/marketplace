function login_valid(){

	var user = document.getElementById('usr').value;
	var pw = document.getElementById('pw').value;

	if(user.length == 0){
		document.getElementById('usr').style.boxShadow = '0 0 25px red';
		return false;
	}else{
		document.getElementById('usr').style.boxShadow = '0 0 25px lime';
	}

	if(pw.length == 0){
		document.getElementById('pw').style.boxShadow = '0 0 25px red';
		return false;
	}else{
		document.getElementById('pw').style.boxShadow = '0 0 25px lime';
	}

	return true;
}