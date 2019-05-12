function valida() 
{
	var espacio = new RegExp(/\s/);
	var validaNombre = document.getElementById('nombre').value;
	var validaApellido = document.getElementById('apellido').value;
	var email = document.getElementById("email").value;
	var password  = document.getElementById("password").value;
	var direccion = document.getElementById("direccion").value;

	
	expresion = /\w+@\w+\.+[a-z]/;

	if(validaNombre === "" || validaApellido === "" || email === "" || password === "" ||  direccion === "")
	{
		alertify.alert("Error","Los campos son obligatorios").set('label', 'Aceptar');
		return false;
	}

	else if(validaNombre.length>25)
	{
		alertify.alert("Error","El Nombre es muy largo").set('label', 'Aceptar');
		return false;
	}

	else if(validaApellido.length>30)
	{
		alertify.alert("Error","El Apellido es muy largo").set('label', 'Aceptar');
		return false;
	}

	else if(email.length>50)
	{
		alertify.alert("Error","El Email es muy largo").set('label', 'Aceptar');
		return false;
	}

	else if(!expresion.test(email))
	{
		alertify.alert("Error","El Email no es valido").set('label', 'Aceptar');
		return false;
	}

	else if(direccion.length>30)
	{
		alertify.alert("Error","La Direccion es muy larga").set('label', 'Aceptar');
		return false;
	}

	else
		return true;
}