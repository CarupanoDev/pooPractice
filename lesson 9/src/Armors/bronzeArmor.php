<?php 

namespace enigmaticNerd\Armors;
use enigmaticNerd\Armor;
use enigmaticNerd\Attack;

class bronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}

 ?>