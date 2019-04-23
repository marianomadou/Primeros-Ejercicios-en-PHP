<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	.resaltar{
		color:#F00;
		font-weight:bold;
	}
</style>

</head>

<body>


<?php
	
	$variable1="Casa";
	$variable2="CASA";
	
	$resultado=strcasecmp($variable1,$variable2); // devuelve 1 si no son iguales y 0 si son iguales
	//$resultado=strcmp($variable1,$variable2); // devuelve 1 si no son iguales y 0 si son iguales
	
	if(!$resultado)//es booleano, por defecto es un 1 (true)
	{
		echo "son iguales";
	}else
	{
		echo "no son iguales";
	}
	
	
	
	//echo "El resultado es " . $resultado;
	
	
	
	//$nombre="Mariano";
	//echo "Hola $nombre";
	//echo "<p class=\"resaltar\"> Esto es un ejemplo de string</p>";

?>

</body>
</html>