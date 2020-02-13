<?php 

namespace enigmaticNerd\Weapons;

use enigmaticNerd\Weapon;
use enigmaticNerd\Unit;

class CrossBow extends Bow
{
	protected $damage = 40;

	public function getDescription(Unit $attacker, Unit $opponent)
	{
		
		return "{$attacker->getName()} shoots an arrow to {$opponent->getName()}";
	}
}

 ?>