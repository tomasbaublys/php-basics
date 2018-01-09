<?php

use App\Core\App;

App::bind('config', require 'config.php');

/* for example:
App::bind('foo', 'bar');
die(var_dump('foo')); */

/* class Connection static method make() returns PDO, we saving it to $pdo variable, it gets db configuration parameter from config.php database array
$pdo = Connection::make($config['database']); */

/* we initiate new QueryBuilder and giving $pdo variable 
$query = new QueryBuilder($pdo) */

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
	extract($data);
	return require "app/views/{$name}.view.php";
}

function redirect($path)
{
	header("Location: /{$path}");
}