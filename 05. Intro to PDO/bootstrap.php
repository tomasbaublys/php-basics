<?php 

require 'database/Connection.php';
require 'database/QueryBuilder.php';

/* class Connection static method make() returns PDO, we saving it to $pdo variable */
$pdo = Connection::make();

/* we initiate new QueryBuilder and giving $pdo variable */
$query = new QueryBuilder($pdo);

/* we also could use short way:
$query = new QueryBuilder(Connection::make()); */


