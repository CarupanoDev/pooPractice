<?php

class Person{
	protected $firstName;
	protected $lastName;
	protected $nickName;
	protected $birthDate;
	public $changedNickName = 0;

	public function __construct($firstName, $lastName, $birthDate)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->birthDate = $birthDate;
	}

	public function getFirstName()
	{
		return $this->firstName;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}


	public function getLastName()
	{
		return $this->lastName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	public function setNickName($nickName)
	{
		if($this->changedNickName >= 2){
			throw new Exception ("You have changed the nickName twice.");
		}	

		/*Input new nickName*/
		$this->nickName = $nickName;

		/*$length contains an integer with the string lentgh*/
		$length = strlen($this->nickName);
		
		if(($length < 2)){
			throw new Excepcion ("Nickname must has two letter minumum");
		}

		if($this->nickName === $this->getFirstName() || $this->nickName === $this->getLastName()){

			throw new Exception("Nickname must be different to your first and last name");
		}

		
		$this->changedNickName++;
	}

	public function getNickName()
	{
		return $this->nickName;
	}

	public function getAge()
	{

	$birthDate = new Datetime($this->birthDate);
	$actualDate = new Datetime();

	$age = $actualDate->diff($birthDate);

	return $age->y;
	}

	public function getFullName()
	{
		return $this->firstName. ' '. $this->lastName;
	}
}

$person = new Person('Santiago', 'Medina','07/03/1994');

echo "The citizen, {$person->getFullName()}, has {$person->getAge()} years old.";


?>