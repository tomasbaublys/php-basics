<?php 

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

// $router = new Router;

// we load routes
// require 'routes.php';

// use class Router to call method direct()
// require $router->direct($uri);

Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());


