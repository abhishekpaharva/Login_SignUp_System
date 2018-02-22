function formValid()
{
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