<?php 

namespace enigmaticNerd\Weapons;

use enigmaticNerd\Weapon;
use enigmaticNerd\Unit;

class BasicBow extends Weapon
{
	protected $damage = 20;

	public function getDescription(Unit $attacker, Unit $opponent)
	{
		
		return "{$attacker->getName()} shoots an arrow to {$opponent->getName()}";
	}
}

 ?>