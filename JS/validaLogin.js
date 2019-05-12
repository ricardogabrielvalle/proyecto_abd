function valida_Login()  
{
	var espacio = new RegExp(/\s/);
	var correo = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	
	expresion = /\w+@\w+\.+[a-z]/;;

	if(!expresion.test(correo))
	{
		alertify.alert("Error","El Email no es valido.").set('label', 'Aceptar');
		return false;
	}

	else if(espacio.test(password))
	{
		alertify.alert("Error","No se permiten espacios en el password.").set('label', 'Aceptar');
		return false;
	}

	else if(password.length>10)
	{
		alertify.alert("Error","La Contraseña es mayor a 10 caracteres.").set('label', 'Aceptar');
		return false;
	}

	else if(password === "" || email === "")
	{
		alertify.alert("Error","Los campos son obligatorios").set('label', 'Aceptar');
		return false;
	}

	else
		return true;
}