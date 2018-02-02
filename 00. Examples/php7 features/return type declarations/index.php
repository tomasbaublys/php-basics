<?php 

// Return Type Declarations
function getTotal(float $a, float $b) : int {
      return $a + $b;
}

var_dump(getTotal(2.8, 3.1));

class User {

}

// by declaraiting type of return we avoiding to retturn array or boolean in this case
function getUser() : User {
	return new User;
}

var_dump(getUser());

interface SomeInterface {
	public function getUser2() : User;
}

class SomeClass implements SomeInterface {
	public function getUser2() : User // Declaration of SomeClass::getUser2() must be compatible with SomeInterface::getUser2()
	{
		// return [];  in C:\xampp\htdocs\phplaracast\php_basics\00. Examples\php7 features\index.php:52 Stack trace: #0 C:\xampp\htdocs\phplaracast\php_basics\00. 
		
		return new User;
	}
}

var_dump((new SomeClass)->getUser2());








