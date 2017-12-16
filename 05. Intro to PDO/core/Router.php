<?php 

class Router
{
	protected $routes = [];

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

	public function direct($uri)
	{
		/* function search key - 'about' => value - 'controllers/about.php' */
		if (array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri]; // in our example will be ['about']
		}
		throw new Exception('No routes defined for this URI');
	}
}