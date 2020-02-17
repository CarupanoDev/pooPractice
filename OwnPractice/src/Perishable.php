<?php 

namespace enigmatic;

class Perishable extends Product
{
	protected $daysToExpired;

	public function __construct($name, $price, $daysToExpired)
	{
		parent::__construct($name, $price);
		$this->daysToExpired = $daysToExpired;
	}

	public function getDaysToExpired()
	{
		return $this->daysToExpired;
	}

	public function setDaysToExpired($daysToExpired)
	{
		$this->daysToExpired = $daysToExpired;
	}

	public function calculate($cantidad)
	{
		$finalPrice = parent::calculate($cantidad);

		switch($this->getDaysToExpired())
		{
			case 1:
					$finalPrice /= 4;
			break;

			case 2:
					$finalPrice /= 3;
			break;

			case 3:
					$finalPrice /= 2;
			break;
		}

		return $finalPrice;

	}
}


 ?>