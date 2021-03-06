<?php 

function dd($value)
{
	echo '<pre>';
	die(var_dump($value));
	echo '</pre>';
}

function verifyAge($font, $size, $age){
	if($age >= 18) {
		echo "<p style=\"font-family: $font; font-size: {$size}em;\">You can go to Club!</p>";
	} else {
		echo "<p style=\"font-family: $font; font-size: {$size}em;\">You are to young!</p>";
	}
}

function whatIsToday(){
    echo "Today is " . date('l', mktime()) . '</br>';
}

// Passing an argument by reference is done by prepending an ampersand (&) to the argument name in the function definition, as shown in the example below:
function selfMultiply(&$number){
    $number *= $number;
    return $number;
}

// print a random character from your name to the screen.
function letterFromName($name) {
    echo substr($name, (rand(0, strlen($name) - 1)), 1);
}
 



