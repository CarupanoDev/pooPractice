<?php 

function show($message){
		echo "<p>$message</p>";
	}

	//Soldier armor 1/4
	$armor = 4;

abstract class Unit{
	protected $hp = 40;
	protected $name;

	public function __construct($name, $armor = null){
		$this->name = $name;
		$this->armor = $armor;
	}

	
	public function getHp(){
		return $this->hp;	
	}

	public function getName(){
		return $this->name;
	}

	public function die()
    {
        show("{$this->name} dies");
    }

    public function takeDamage($damage){
    	$this->setHp($this->hp = $this->hp - $damage);

    	if($this->hp <= 0){
			$this->die();
		}
    }

    private function setHp($points){
		$this->hp = $points;
		show("Now {$this->name} has {$this->hp} life points.");
	}


	public function move($direction){

	show($direction == 'foward' ? "$this->name goes $direction": "$this->name goes to the $direction");
	}

	//Abstract function thas has to be expand in its childs
	    abstract public function attack(Unit $opponent);
}


class Soldier extends Unit
{
	protected $damage = 40;

	public function attack(Unit $opponent){
		show("{$this->name} cuts {$opponent->getName()} in two");
		$opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		return parent::takeDamage($damage / $this->armor);
	}
}

class Archer extends unit{

	protected $damage = 20;

	public function attack(Unit $opponent){
		 

		 show("
		 	{$this->name} shoots an arrow to {$opponent->getName()}
		 	");

        
        $opponent->takeDamage($this->damage);
	}

	public function takeDamage($damage)
    {
        if (rand(0, 1)) {
            return parent::takeDamage($damage);
        }
    }
}


$trent = new Soldier('trent', $armor);

$san = new Archer('San');

$san->attack($trent);

$san->attack($trent);

$san->attack($trent);

$trent->attack($san);
 ?>