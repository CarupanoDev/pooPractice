<?php 

use EnigmaticNerd\User;
use EnigmaticNerd\HtmlNode;
use EnigmaticNerd\LunchBox;
use EnigmaticNerd\Food;

require '../vendor/autoload.php';


$santiago = new User(['name' => 'Santiago']);

$sofia = new User(['name' => 'Sofia']);

//School

$lunchBox = new LunchBox(['Sandwich', 'Apple', 'Orange Juice', 'Chips']);

$lunchBox = new LunchBox([
	new Food(['name' => 'Sandwich', 'beverage' => false]),
	new Food(['name' => 'Chips']),
	new Food(['name' => 'Orange Juice', 'beverage' => true]),
	new Food(['name' => 'Apple']),
	new Food(['name' => 'Mineral water', 'beverage' => true]),
]);

// House
$sofia->setLunch(($lunchBox));


//School
$sofia->eatMeal();
