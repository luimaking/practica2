<!DOCTYPE html>

<html>

<head>
	<title>Programacion PHP</title>


</head>

<body>


<?php
session_start();
include("conexion.php");

	

	mysqli_query($con, "UPDATE registro SET Nombre='$_POST[uno]' WHERE User = '$_SESSION[username]'");
	echo "Actualizado";
 
 
?>


</body>


</html> 


