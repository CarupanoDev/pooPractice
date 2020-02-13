<?php 

//To avoid use the namespace each time that a class is instantiated.
namespace enigmaticNerd;

require '../vendor/autoload.php';


$trent = new Soldier('trent', new Weapons\BasicSword);

$trent->setArmor(new Armors\bronzeArmor());

$san = new Archer('San', new Weapons\CrossBow);

$san->attack($trent);

$san->attack($trent);

$trent->attack($san);
 ?>