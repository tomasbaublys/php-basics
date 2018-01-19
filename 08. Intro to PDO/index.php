<?php 

// in PHP 7 we could do like this: use App\Core\{Router, Request};
use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('app/routes.php')
	->direct(Request::uri(), Request::method());

/*
1.	Class Router laod() method returns $router form file routes.php;
2.  Calss Router get() or post() method assign routes $uri key to $controller value and saves to array $routes[];
3.	Class Router direct() method takes $uri from Request uri() method and $requestType from method() method and returns callAction method by exploding controller in 2 parts, for example $controller->UserController and $action->index;
4.	Class Router callAction() method assign and returns relevant action for controller, which we describe in given ...Controller.php file;
 */

