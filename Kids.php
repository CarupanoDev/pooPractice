<?php 

class Kids
{

	public function __set($property, $value)
	{
		if ($value > 30):
			
			$this->property= $value;

		endif;
	}

	public function __get($property)
	{
		return "The child's height is " . $this->property . " inches tall";
	}

}

$kid1= new Kids;

$kid1->height= 45;

echo $kid1->height;

?>
