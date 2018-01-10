<?php 

/* takes two arguments: an array, and an element to add to the end of that array. */
$carModel = [];
array_push($carModel, "Simca", "BMC", "Proton", "Dacia", "Jencen");
var_dump($carModel); 

// An array with string keys: 
$a = array("a"=>"red","b"=>"green");
array_push($a,"blue","yellow");
var_dump($a);