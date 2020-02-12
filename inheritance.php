<?php 

abstract class Unit{
	protected $alive = true;
	protected $name;

	public function __construct($name){
		$this->name = $name;
	}

	public function move($direction){

	echo $direction == 'foward' ? "<p>$this->name goes $direction</p>": "<p>$this->name goes to the $direction</p>";
	}

	//Abstract function thas has to be expand in its childs
	    abstract public function attack($opponent);
}


class Soldier extends Unit
{
	public function attack($opponent){
		echo "<p>{$this->name} cuts {$opponent} in two</p>";
	}
}

class Archer extends unit{
	public function attack($opponent){
		echo "<p>{$this->name} shoots an arrow to {$opponent}</p>";
	}
}



$san = new Soldier('San');


$san->move('right');


$san->attack('Krilin');


$trent = new Archer('Trent');

$trent->move('foward');

$trent->attack('Cthulhu');

 ?>