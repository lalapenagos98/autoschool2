<?php 

class persona {
	public $estatura;
	public $color_piel;
	public $edad;

public function_construct($estatura, $color_piel, $edad){
	$this->estatura = $estatura;
	$this ->color_piel = $color_piel;
	$this ->edad = $edad
}

	public function saludar () {
		return 'hola mi estatura es' .$this ->estatura . ' ' .'mi color de piel es ' . $this ->color_piel . 'y tengo' .$this ->edad. 'años';


	}
	
}