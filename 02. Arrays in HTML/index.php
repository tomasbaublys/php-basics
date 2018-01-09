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

require 'index.view.php';