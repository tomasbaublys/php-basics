<?php 

/* Indexed arrays - Arrays with a numeric index */
$names = [
	'Janina',
	'Jonas',
	'Ona',
];

// pushing new item into array
$names[] = 'Zose';

// An item can be changed by specifying its position and providing a new value:
$names[1] = 'Jonelis';

/* Associative arrays - Arrays with named keys */
$person = [
	'age' => 98,
	'hair' => 'gray',
	'career' => 'web developer',
	'experience' => 60
];

// pushing new item into associative array
$person['name'] = 'Zose';

// delete item form associative array
unset($person['experience']);

// You can even delete the whole array - unset($person)

// true or false, using booleans
$task = [
	'title' => 'Finish homework',
	'due' => 'today',
	'assigned_to' => 'Jonas',
	'completed' => true
];

// you can also store other arrays in array! This is called a multidimensional array.
$deck = array(array('2 of Diamonds', 2),
              array('5 of Diamonds', 5),
              array('7 of Diamonds', 7),
              array('8 of Diamonds', 8));

require 'index.view.php';