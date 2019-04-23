<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POO</title>

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
	
	$query="SELECT * FROM artículos";
	
	$resultados=mysqli_query($conexion,$query);
	
	while(($fila=mysqli_fetch_row($resultados))==true){	//$fila=mysqli_fetch_row($resultados); //mira fila a fila el resulset y lo almacena en un array
		
	echo $fila[0] . " ";
	echo $fila[1] . " ";
	echo $fila[2] . " ";
	echo $fila[3] . " ";
	echo "<br>";

	}
	mysqli_close($conexion);//cierra la funcion de conexion

?>
</body>
</html>