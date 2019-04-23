<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
	define("AUTOR", "Mariano", true);//el true dice si es lo mismo llamar a la constante con mayusculas o minusculas
	
	echo "El autor es : " . AUTOR;
	echo "<br>El autor es : " . autor;

?>

</body>
</html>