<?php 

class Router
{
	public $routes = [
		'GET' => [],
		'POST' => []
	];

	public static function load($file)
	{
		$router = new static; // like - new Router
		require $file;
		return $router;
	}

	public function define($routes)
	{
		$this->routes = $routes;
	}

	public function get($uri, $controller) 
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller) 
	{
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType)
	{
		/* function search key - 'about' => value - 'controllers/about.php' */
		if (array_key_exists($uri, $this->routes[$requestType])) {
			return $this->routes[$requestType][$uri]; // in our example will be ['about']
		}
		throw new Exception('No routes defined for this URI');
	}
}