<?php 

// Scalar Type Hints
function setAge(int $age)
{
	var_dump($age);
}
setAge(30);


function sumOfInts(int ...$ints)
{
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));


function setIsValid(bool $valid) 
{
	var_dump($valid);
}

setIsValid('true');