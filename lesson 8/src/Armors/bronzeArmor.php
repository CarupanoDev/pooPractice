<?php 

namespace enigmaticNerd\Armors;
use enigmaticNerd\Armor;

class bronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

 ?>