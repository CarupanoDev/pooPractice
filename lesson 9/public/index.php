<?php 

//To avoid use the namespace each time that a class is instantiated.
namespace enigmaticNerd;

require '../vendor/autoload.php';


$trent = new Unit('trent', new Weapons\BasicSword);

$trent->setArmor(new Armors\SilverArmor());

$san = new Unit('San', new Weapons\FireBow);

$san->attack($trent);

$san->attack($trent);

$trent->attack($san);
 ?>