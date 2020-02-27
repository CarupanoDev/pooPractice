<?php

namespace EnigmaticNerd;

class User extends Model
{
	protected $lunch;

	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
		$this->lunch = new LunchBox();
	}


	public function setLunch(LunchBox $lunch)
	{
		$this->lunch = $lunch;
	}

	public function eat()
	{
		if($this->lunch->isEmpty())
		{
			throw new \Exception("{$this->name} does not have nothing to eat");
			
		}

		echo "<p>{$this->name} lunchs {$this->lunch->shift()}</p>"; 
	}

	public function eatMeal()
	{
		
		//var_dump($this->lunch);

		$food = $this->lunch->filter(function($food){
			return !$food->beverage;
		});

		//var_dump($food);

		$beverage = $this->lunch->filter(function($food){
			return $food->beverage;
		}); 

		//var_dump($beverage, $food);

		echo "<p>{$this->name} has {$this->lunch->count()} aliments</p>";

		echo "<p>{$this->name} has {$beverage->count()} drinks</p>";

		foreach($food as $item)
		{
			echo "<p>{$this->name} eats {$item->name}</p>";
		}

		foreach($beverage as $item)
		{
			echo "<p>{$this->name} drinks {$item->name}</p>";
		}
	}
}




