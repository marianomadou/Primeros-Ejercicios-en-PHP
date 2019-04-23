<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POO</title>

<style>

	table{
		width: 50%;
		border:1px dotted #FF0000;
		margin:auto;
		}
	.td{alignment-adjust:central;}

</style>

</head>

<body>
<?php

	require("datos_conexionDB.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass);
	
	if(mysqli_connect_errno()){ //esta funcion se ejecuta si hay un error en la conexion con la base de datos
		
		echo "<strong>fallo la conexion con la BBDD</strong>";
		exit();
	}
	
	mysqli_select_db($conexion,$db_nombredb) or die("No se encontró la base de datos");
	
	mysqli_set_charset($conexion,"utf8");
	
	$query="SELECT * FROM artículos WHERE PAÍS_DE_ORIGEN='ESPAÑA'";	//$query="SELECT * FROM artículos";
	
	$resultados=mysqli_query($conexion,$query);
	
	while(($fila=mysqli_fetch_row($resultados))==true){	//$fila=mysqli_fetch_row($resultados); //mira fila a fila el resulset y lo almacena en un array
	echo"<table><tr><td>";
		
	echo $fila[0] . "</td><td>";
	echo $fila[1] . "</td><td>";
	echo $fila[2] . "</td><td>";
	echo $fila[3] . "</td><td>";
	echo $fila[4] . "</td><td></tr></table>";
	echo "<br>";

	}
	mysqli_close($conexion);//cierra la funcion de conexion

?>
</body>
</html>