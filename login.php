<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>

<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

include("conexion.php");

$consulta = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado = mysqli_num_rows($consulta);

if($resultado!=1){
	$respuesta=mysqli_fetch_array($consulta);
		include ("index2.php");
		
} else {
	echo "No es un usuario registrado";
	include ("formRegistrarse.php");
}


?>

</body>
</html>