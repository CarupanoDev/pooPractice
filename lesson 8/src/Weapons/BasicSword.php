<?php 

namespace enigmaticNerd\Weapons;

use enigmaticNerd\Weapon;
use enigmaticNerd\Unit;

class BasicSword extends Weapon
{
	protected $damage = 40;

	public function getDescription(Unit $attacker, Unit $opponent)
	{
		
		return "{$attacker->getName()} attacks with sword to {$opponent->getName()}";
	}
}

 ?>