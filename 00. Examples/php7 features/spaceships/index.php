<?php 

// PHP 7 with spaceship operator
$games = ['Mas Effect', 'Super Mario Bros', 'Zelda', 'Fallout'];

usort($games, function($a, $b) {
	var_dump('a: ' . $a . ', b: ' . $b . '</br>');
	return $b <=> $a;
});

var_dump($games);


// Example
class User {
	protected $name;
	protected $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function name()
	{
		return $this->name;
	}

	public function age()
	{
		return $this->age;
	}
}

class UserCollection {
	protected $users;

	public function __construct(array $users)
	{
		$this->users = $users;
	}

	public function users()
	{
		return $this->users;
	}

	public function sortBy($method)
	{
		usort($this->users, function($userOne, $userTwo) {
			return $userOne <=> $userTwo;
		});
	}
}

$collection = new UserCollection([
	new User('Petras', 30),
	new User('Maryte', 31),
	new User('Birute', 50),
	new User('Simukas', 99)
]);

$collection->sortBy('age');
var_dump($collection->users());