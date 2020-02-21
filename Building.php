<?php 

class Building
{
	private function exploded($you)
	{
		echo "{$you} you made this building explode!! Shame on you";
	}

	public function __call($method, $params)
	{
		call_user_func_array([$this, $method], $params);
	}

	public static function __callStatic($method, $arr)
	{
		foreach($arr as $array)
		{
			echo "$array\n";
		}
	}

}

$tower = new Building();

$tower->exploded('Santiago');

echo "<br/>";

Building::demolish('FIRE', 'EXPLOSION'); //Undefined method invoke through "callStatic" magic method.


 ?>