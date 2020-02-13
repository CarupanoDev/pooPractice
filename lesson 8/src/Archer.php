<?php 

namespace enigmaticNerd;

use enigmaticNerd\Weapons\Bow;

class Archer extends unit
{

	public function __construct($name, Bow $bow)
	{
		parent:: __construct($name, $bow);
	}

}

 ?>