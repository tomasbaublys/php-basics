<?php 

/*
1. For loop
2. Foreach loop
3. While loop
4. Do...while loop
 */

/* 1. The for loop is used when you know in advance how many times the script should run. */

// plus one to $x
for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
}
// plus 4 till exact date 
for ($leap = 2018; $leap <2050; $leap = $leap + 4) {
	echo "<p>$leap Olimpic games</p>";
}

/* 2. The foreach loop works only on arrays, and is used to loop through each key/value pair in an array. */

// 1. Example
$sentence = array("I'm ", "learning ", "PHP! <br>");

foreach ($sentence as $word) {
    echo $word;
}

// 2. Example
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $value) {
    echo "$value" . "<br>";
}

/* 3. The while loop executes a block of code as long as the specified condition is true. */

// 1. Example
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 

// 2. Example
$loopCond = true;

while ($loopCond == true){
	echo "<p>The loop is running.</p>";
	$loopCond = false;
}
echo "<p>And now it's done.</p>";

// 3. Example
$headCount = 0;
$flipCount = 0;
while ($headCount < 3) {
  $flip = rand(0,1);
  $flipCount ++;
  if (! $flip){
    $headCount ++;
    echo "H";
  }
  else {
    $headCount = 0;
    echo "T";
  }
}

echo "<p>It took {$flipCount} flips!</p>";

/* 4. A do/while loop check the condition after each iteration before looping back. It execute its statements at least once, even if the condition is false the first time. */

// 1. Example 
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// 2. Example
$loopCond = false;
do {
echo "<p>The loop ran even though the loop condition is false.</p>";
} while ($loopCond); 
echo "<p>Now the loop is done running.</p>";



