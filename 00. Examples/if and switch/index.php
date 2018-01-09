<?php 
/* simple if/elseif/else statement based on Lithuania alcohol control :) */

$age = 16;
if($age < 18) {
    echo "You can't go to club </br>";
} elseif($age > 18 && $age < 21) {
    echo "You can go to club, but you can't drink alcohol </br>";
} else {
    echo "You can drink in club </br>";
}

/* A switch statement is similar to an if / elseif / else statement in that you can check multiple conditions. */
$i = 4; 
switch ($i) {
    case 0:
        echo '$i is 0.';
        break;
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo '$i is somewhere between 1 and 5.';
        break;
    case 6:
    case 7:
        echo '$i is either 6 or 7.';
        break;
    default:
        echo "I don't know how much \$i is.";
}

/* alternative syntax, it only provides readability, thus it's usually used when mixing HTML and PHP code in the same file.

switch ($i): 
    ...
endswitch;

*/

