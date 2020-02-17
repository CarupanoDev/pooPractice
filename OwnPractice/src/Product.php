<?php 

namespace enigmatic;

class Product
{
	protected $name;
	protected $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function calculate($cantidad)
	{
		return $this->getPrice() * $cantidad;
	}	
}


 ?>