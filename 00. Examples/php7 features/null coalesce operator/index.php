<?php 

$_GET['name'] = 'Tomas';

// old php version
$name = isset($_GET['name']) ? $_GET['name'] : '';
var_dump($name);

// php 7 version
$name2 = $_GET['name2'] ?? '';
var_dump($name2);

// simple example
echo $name3 ?? 'Tomas Baublys';
