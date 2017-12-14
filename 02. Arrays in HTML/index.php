<?php 

/* Indexed arrays - Arrays with a numeric index */
$names = [
	'Janina',
	'Jonas',
	'Ona',
];

// pushing new item into array
$names[] = 'Zose';

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

// true or false, using booleans
$task = [
	'title' => 'Finish homework',
	'due' => 'today',
	'assigned_to' => 'Jonas',
	'completed' => true
];

require 'index.view.php';