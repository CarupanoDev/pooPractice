<?php 

namespace enigmaticNerd\Armors;
use enigmaticNerd\Armor;
use enigmaticNerd\Attack;

class SilverArmor extends Armor
{
	public function absorbPhysicalDamage(Attack $attack)
	{

		return $attack->getDamage() / 3;	

	}
}

 ?>