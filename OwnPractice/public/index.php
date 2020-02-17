<?php 

namespace enigmatic;

require '../vendor/autoload.php';


$product = new Product('rice', 300);
$perishable = new Perishable('potatoes', 300, 2);
$nonPerishable = new NonPerishable('meat', 200, 'type 1');

$arrayProducts = array($product, $perishable, $nonPerishable);

foreach($arrayProducts as $products)
{
	echo $products->calculate(3);
	echo "<br/>";
}

 ?>