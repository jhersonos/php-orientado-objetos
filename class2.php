<?php 
	
	class Persona{
		//Atributos
		public $nombre = array();
		public $apellido = array();

		//Metodos
		public function guardar($nombre, $apellido){
			$this -> nombre[] = $nombre;
			$this -> apellido[] = $apellido;
		}

		public function mostrar(){
			for ($i=0; $i < count($this -> nombre); $i++) { 
				self::formato($this -> nombre[$i] , $this -> apellido[$i]);
			}
		}

		public function formato($nombre,$apellido){
			echo "nombre:" . $nombre . "| apellido: " . $apellido . "<br>";
		}
	}

	$persona = new Persona();
	$persona -> guardar("jherson","onairam");
	$persona -> guardar("camila","taminche");
	$persona -> mostrar();
 ?>