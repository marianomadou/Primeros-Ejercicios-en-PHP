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
		
		function estableceColor($color_auto, $nombre_auto){
			
			$this->color=$color_auto;
			echo"el color del auto " . $nombre_auto . " es: " . $this->color . "</br>";
		}		
	}


//---------------------------------------------

class Camion extends Automovil{
			
		function Camion()		//contructor
		{
			$this->ruedas=8;
			$this->color=null;
			$this->motor=2600;
			
		}
		
		function estableceColor($color_camion, $nombre_camion){
		
			$this->color=$color_camion;
			echo "el color del camion " . $nombre_camion . " es: " . $this->color . "</br>";
		}
		
	
	}

	
?>
