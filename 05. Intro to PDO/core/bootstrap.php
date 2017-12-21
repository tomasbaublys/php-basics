<?php
$app = [];
$app['config'] = require 'config.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';


/* class Connection static method make() returns PDO, we saving it to $pdo variable, it gets db configuration parameter from config.php database array
$pdo = Connection::make($config['database']); */

/* we initiate new QueryBuilder and giving $pdo variable 
$query = new QueryBuilder($pdo) */

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);