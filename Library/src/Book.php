<?php 

namespace EnigmaticNerd;

class Book extends Model
{
	

	public function __toString()
	{
		return "The book {$this->title} with ISBN: {$this->isbn} created by the author: {$this->author} has {$this->pages} pages.";
	}


}

 ?>