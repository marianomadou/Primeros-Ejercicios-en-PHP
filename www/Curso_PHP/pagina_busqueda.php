<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>buscador</title>

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
	
	$busqueda=$_GET["buscar"];
	
	require("datos_conexionDB.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_pass);
	
	if(mysqli_connect_errno()){ //esta funcion se ejecuta si hay un error en la conexion con la base de datos
		
		echo "<strong>fallo la conexion con la BBDD</strong>";
		exit();
	}
	
	mysqli_select_db($conexion,$db_nombredb) or die("No se encontró la base de datos");
	
	mysqli_set_charset($conexion,"utf8");
	
	$query="SELECT * FROM ARTÍCULOS WHERE NOMBRE_ARTÍCULO LIKE'%$busqueda%'";
	
	$resultados=mysqli_query($conexion,$query);
	
	while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){	//$fila=mysqli_fetch_row($resultados); //mira fila a fila el resulset y lo almacena en un array
	echo"<table><tr><td>";
		
	echo $fila['SECCIÓN'] . "</td><td>";
	echo $fila['NOMBRE_ARTÍCULO'] . "</td><td>";
	echo $fila['PAÍS_DE_ORIGEN'] . "</td><td>";
	echo $fila['PRECIO'] . "</td><td></tr></table>";
	echo "<br>";

	}
	//comodines para busquedas
	//% reemplaza o sustituye una cadena de caracteres
	//_ reemplaza o sustituye un caracter
	mysqli_close($conexion);//cierra la funcion de conexion

?>

</body>
</html>