<?php 

namespace enigmaticNerd\Armors;
use enigmaticNerd\Armor;
use enigmaticNerd\Attack;

class MissingArmor extends Armor
{
	public function absorbDamage(Attack $attack)
	{
		return $attack->getDamage();
	}
}

 ?>