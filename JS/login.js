function showregister() {
	document.getElementById('login').style.display = "none";
	document.getElementById('register').style.display = "block";
	document.getElementById('showregister').style.backgroundColor = "#37C1FD";
	document.getElementById('showlogin').style.backgroundColor = "#1E6584";

}
function showlogin(){
	document.getElementById('login').style.display = "block";
	document.getElementById('register').style.display = "none";
	document.getElementById('showlogin').style.backgroundColor = "#37C1FD";
	document.getElementById('showregister').style.backgroundColor = "#1E6584";
}



function formValid()
{
	var x = document.form1.phoneNo.value;
	var phoneno = /^\d{10}$/;
	if(x.match(phoneno))
	{

	}
	else{
		document.getElementById('errorPh').innerHTML="invalid Phone No";
		return false;
	}
	var y = document.form1.password.value;
	var z = document.form1.repassword.value;
	if(y == z)
	{

	}
	else{
		document.getElementById('errorpass').innerHTML = "Password must be same";
		return false;
	}
	return true;
}