<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POO</title>

</head>

<body>
<?php

	//en php no hay herencia multiple

	include("POO3.php");
	
	$fiat = new Automovil();
	$ford = new Automovil();
	$volvo= new Camion();
	
	$fiat->estableceColor("rojo", "Fiat");
	$ford->estableceColor("azul", "Ford");
	$volvo->estableceColor("blanco", "Volvo");
	
	echo "el volvo tiene " . $volvo->ruedas . " ruedas. </br>"; 
	echo "el fiat tiene " . $fiat->ruedas . " ruedas";
	
	
?>
</body>
</html>