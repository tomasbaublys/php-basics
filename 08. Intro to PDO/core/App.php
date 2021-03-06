<?php 

namespace App\Core;

// just a place to bind dependency
class App 
{

	protected static $registry = [
		/* will be like
		'config' => []; */
	];

	public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}

	public static function get($key)
	{
		if (! array_key_exists($key, static::$registry)) {
			throw new Exception("No {$key} is bound in the container.");
			
		}
		return static::$registry[$key];
	}
}

