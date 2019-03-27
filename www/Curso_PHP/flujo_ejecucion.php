<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Flujo de Ejecucion</title>
</head>

<body>


<?php

	echo"este es el primer mensaje <br>";
	
	echo "este es el segundo mensaje <br>";
	
	include ("proporciona_datos.php");// se puede usar require en lugar del include, si el archivo no está corta el flujo de ejecucion y no muestra nada mas si no encuentra el archivo.
	
	dameDatos();	

?>


</body>
</html>