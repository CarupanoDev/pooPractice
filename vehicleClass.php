<?php

class Vehiculo{
	public $modelo;
	public $año;
	public $color;

	public function __construct($modelo, $año, $color){
		$this->modelo = $modelo;
		$this->año = $año;
		$this->color = $color;
	}

	public function acelerar(){
		return 'acelerando';
	}

	public function frenar(){
		return 'frenando';
	}

	public function tocarBocina(){
		return 'tocando bocina';
	}

	public function mensaje(){
		return $this->modelo. ' '. $this->año. ' '. ' color: '. $this->color;
	}
}

$toyota = new Vehiculo(ucwords('toyota'), 2016, 'azul', 4);

echo "El auto, {$toyota->mensaje()}, está {$toyota->frenar()}.";
echo "</br>";
echo "El auto, {$toyota->mensaje()}, está {$toyota->tocarBocina()}.";

