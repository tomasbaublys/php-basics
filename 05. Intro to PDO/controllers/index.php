<?php 

$users = $app['database']->selectAll('users');
$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php';