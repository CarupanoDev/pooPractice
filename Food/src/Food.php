<?php 

namespace EnigmaticNerd;

class Food extends Model
{
	public function getBeverageAttribute()
	{
		return $this->attributes['beverage'] ?? false;
	}
}

 