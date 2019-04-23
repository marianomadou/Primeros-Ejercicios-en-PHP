<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POO</title>

</head>

<body>
<?php

	class Automovil{
	
		var $ruedas;
		var $color;
		var $motor;
		
		function Automovil()		//contructor
		{
			$this->ruedas=4;
			$this->color=null;
			$this->motor=1600;
			
		}
		
		
		function arrancar(){
			echo "estoy arrancando";			
		}
		
		function girar(){
			echo "estoy girando";
		}
		
		function frenar(){
			echo "<br><a href='https://github.com/koalter/Lab_Programacion_III/blob/master/PHP%20PDO.pdf'>laboratorioIII github</a>";		
		}
		
		
	}
	
	$fiat = new Automovil();
	$ford = new Automovil();
	$chevrolet = new Automovil();
	
	$fiat->girar();
	$fiat->frenar();
	
	
	
?>
</body>
</html>