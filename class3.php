<?php 
	
	class Loteria{

		//Atributos 
		public $numero;
		public $intentos;
		public $resultado = false;

		//metodo
		public function __construct($numero,$intentos){
			$this -> numero = $numero;
			$this -> intentos = $intentos;
		}

		public function sortear(){
			$minimo = $this -> numero / 2;
			$maximo = $this -> numero * 2;
			for ($i = 0; $i < $this -> intentos ; $i++) { 
				$int 	= rand($minimo,$maximo);
				self::intentos($int);
			}
		}

		public function intentos($int){
			if ($int == $this -> numero) {
				echo "<b>" . $int . " == " . $this -> numero . "</b><br>";
				$this -> resultado = true;
			}else{
				echo $int . "!=" . $this->numero ."<br>";
			}
		}

		public function __destruct(){
			if ($this -> resultado) {
				echo "Felicidades has acertado en". $this -> intentos;
			}else{
				echo "Que lastima, has perdido" . $this -> intentos;
			}
		}
	}

	$loteria = new Loteria(10,10);
	$loteria -> sortear();
 ?>