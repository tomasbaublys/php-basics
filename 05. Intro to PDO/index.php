<?php 

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// $router = new Router;

// we load routes
// require 'routes.php';

// use class Router to call method direct()
// require $router->direct($uri);

Router::load('routes.php')
	->direct(Request::uri(), Request::method());


