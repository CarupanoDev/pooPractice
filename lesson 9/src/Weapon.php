<?php 

namespace enigmaticNerd;

abstract class Weapon
{
	protected $damage = 0; 
	protected $magical = false;
	protected $description = ':unit attacks to :opponent';

	public function createAttack()
	{
		return new Attack($this->damage, $this->magical, $this->description);
	}

}

?>