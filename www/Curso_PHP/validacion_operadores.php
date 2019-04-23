<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	h1{
		text-align:center;
	}
	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	.validado{
		font-size:18px;
		color: #0C3;
		font-weight:bold;
	}
</style>

</head>

<body>

<?php


	
	if(isset($_POST["enviando"]))
	{
		$usuario=$_POST["nombre_usuario"];
		$edad=$_POST["edad_usuario"];
		
		if($usuario=="Mariano" && $edad>=18){
			echo "<p class='validado'>Bienvenido</p>";
		}
		else{
			echo "<p class='no_validado'>Acceso denegado</p>";
		}
		
	}
	
	

?>


</body>
</html>