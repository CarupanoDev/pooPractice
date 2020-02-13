<?php

 namespace enigmaticNerd;
 
// use Exception; To show throw new Exception messages.

abstract class Unit{
    protected $hp = 40;
    protected $name;
    protected $weapon;
    protected $armor;


    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;  //We can set any weapon to a character.
    }

    public function setArmor(Armor $armor = null)
    {
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
        exit();
    }
        
    public function takeDamage($damage)
    {

        $this->hp = $this->hp - $this->absorbDamage($damage);
        
        show("Now {$this->name} has {$this->hp} life points.");

        if($this->hp <= 0){
            $this->die();
        }
    }

    protected function absorbDamage($damage)
    {
           if($this->armor)
        {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
    


    public function move($direction)
    {

    show($direction == 'foward' ? "$this->name goes $direction": "$this->name goes to the $direction");
    }

    public function attack(Unit $opponent)
    {

        show($this->weapon->getDescription($this, $opponent));
        
        $opponent->takeDamage($this->weapon->getDamage());
    }
}

?>