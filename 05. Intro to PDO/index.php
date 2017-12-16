<?php 

require 'Task.php';
require 'functions.php';

// connectToDb function retuns PDO, we saving it to $pdo variable
$pdo = connectToDb();

// fetchAllTasks($pdo) function retuns tasks, we saving it to $tasks variable
$tasks = fetchAllTasks($pdo);

// var_dump($tasks[1]->showTasks());

require 'index.view.php';