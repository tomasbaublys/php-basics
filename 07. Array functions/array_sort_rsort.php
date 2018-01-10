<?php 

// sort() - sort arrays in ascending order:
$numbers = array(5, 4, 9, 1);
sort($numbers);
print join(", ", $numbers) . '<br>';

// rsort() - sort arrays in descending order:
$numbers = array(1, 7, 6, 9);
rsort($numbers);
print join(", ", $numbers);

// asort() sorts an associative array in ascending order, according to the value:
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

// ksort() sorts an associative array in ascending order, according to the key:
$age2 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age2);

// arsort() sorts an associative array in descending order, according to the value:
$age3 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age3);

// krsort() sorts an associative array in descending order, according to the key:
$age4 = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age4);

var_dump($age);







