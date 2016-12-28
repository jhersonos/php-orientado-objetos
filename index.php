<?php 

	class Persona{

		//Atributos 
		public $nombre = "Pedro";

		//Metodos 
		public function hablar($mensaje){
			echo $mensaje;
		}
	}

	$persona = new Persona();
	$persona -> nombre;
	$persona -> hablar("saludos :3");

 ?>