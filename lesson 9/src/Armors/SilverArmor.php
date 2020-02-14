<?php 

namespace enigmaticNerd\Armors;
use enigmaticNerd\Armor;
use enigmaticNerd\Attack;

class SilverArmor implements Armor
{
	public function absorbDamage(Attack $attack)
	{

		if($attack->isPhysical())
		{
			return $attack->getDamage() / 3;	
		}

		return $attack->getDamage();
	}
}

 ?>