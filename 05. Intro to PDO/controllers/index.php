<?php 

$users = App::get('database')->selectAll('users');
$tasks = App::get('database')->selectAll('todos');

require 'views/index.view.php';