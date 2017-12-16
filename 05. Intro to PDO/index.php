<?php 

require 'bootstrap.php';

/* assign $query method slectAll() to $tasks variable to fetch exact query results */
$tasks = $query->selectAll('todos');

require 'index.view.php';