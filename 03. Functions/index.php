<?php 

require 'functions.php';

$animals = ['suniukas', 'katyce', 'ziurkenukas'];

// Using functions verifyAge() functions.php file
verifyAge("Courier", 2, 18);

// Using functions selfMultiply() functions.php file
$mynum = 5;
echo $mynum . '</br>';
selfMultiply($mynum);
echo $mynum . '</br>';

// Using functions whatIsToday() functions.php file
whatIsToday();

// Using functions whatIsToday() functions.php file
$name = "Tomas";
letterFromName($name);

// Using functions dd() functions.php file
dd($animals);


