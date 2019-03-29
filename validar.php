<?php
	$pinvl = "4455221";

	$pin = $_POST['pin'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	if($pin == $pinvl)
	{
		if($password == $repassword){
			$mensaje = 'Bienvenido al sistema!';
		}
		else{
			$mensaje = 'Contraseñas ingresadas no coinciden!.';
		}
	}
	else
	{
		$mensaje = 'Pin ingresado es Invalido!, verifique y vuelva a intentar.';
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Datos Extraido desde el Ingreso</h1>
	<p>Mensaje: <?php echo $mensaje ?></p>
</body>
</html>
