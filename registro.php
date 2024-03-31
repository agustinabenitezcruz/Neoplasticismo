<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registro</title>
</head>

<body>

<?php
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$password=md5($_POST['password']);

include("conexion.php");



$consulta = mysqli_query($conexion, "INSERT INTO usuarios VALUES(0, '$nombre','$email','$usuario','$password')");

if($consulta===true){
    header("Location:iniciarSesion.php");
}else{
    echo "No se ha podido hacer el regstro, intente de nuevo más tarde";
}


?>	
    

</body>
</html>