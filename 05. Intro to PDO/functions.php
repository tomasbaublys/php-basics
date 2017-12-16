<?php 

// Connecting to PDO
function connectToDb()
{
	try {
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');	
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

function fetchAllTasks($pdo) {
	// Preparing a sql query
	$statement = $pdo->prepare('select * from todos');

	// Executing statement
	$statement->execute();

	// Saving results to variable $results
	return $tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}