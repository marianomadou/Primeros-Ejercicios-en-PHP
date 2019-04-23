<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style>
.resultado {
	color:#F00;
	font-weight:bold;
	font-size:24px;
}
</style>
</head>

<body>
<?php

	if(isset($_POST["button"])){
		
		$numero1=$_POST["num1"];
		$numero2=$_POST["num2"];
		$operacion=$_POST["operacion"];
		calcular($operacion);
	}
	
	function calcular($calculo){	
	
		if(!strcmp("Suma", $calculo)){
			global $numero1;
			global $numero2;
			$resultado=$numero1+$numero2;
			echo "<p class='resultado'> El resultado es: $resultado</p>";
		}
		if(!strcmp("Resta", $calculo)){
			global $numero1;
			global $numero2;
			$resultado=$numero1-$numero2;
			echo "<p class='resultado'> El resultado es: $resultado</p>";
		}
		if(!strcmp("Multipliación", $calculo)){
			global $numero1;
			global $numero2;
			$resultado=$numero1*$numero2;
			echo "<p class='resultado'> El resultado es: $resultado</p>";
		}
		if(!strcmp("División", $calculo)){
			global $numero1;
			global $numero2;
			$resultado=$numero1/$numero2;
			echo "<p class='resultado'> El resultado es: $resultado</p>";
		}
		if(!strcmp("Módulo", $calculo)){
			global $numero1;
			global $numero2;
			$resultado=$numero1%$numero2;
			echo "<p class='resultado'> El resultado es: $resultado</p>";
		}	
	
	}
	
?>
</body>
</html>