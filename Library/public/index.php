<?php 

use EnigmaticNerd\Book;

require '../vendor/autoload.php';


$book = new Book();

$book->fill([
	'isbn' => 9781844132393,
	'title' => 'Man\'s search for meaning',
	'author' => 'Viktor Frankl',
	'pages' => 114,
]);

echo $book;


?>