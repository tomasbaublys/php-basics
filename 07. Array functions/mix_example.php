<?php 

// Example how to push, sort and print at random strings from array 
$family = array();
array_push($family, "Obuolys", "Citrina", "Pacukas", "Katynelis");

sort($family);

print strtoupper($family[rand(0, count($family) - 1)]);