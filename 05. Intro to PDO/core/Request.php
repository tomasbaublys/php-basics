<?php 

class Request
{
	public static function uri()
	{
		// function to trim an element, in this case '/'
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}