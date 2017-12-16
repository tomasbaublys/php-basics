<?php 

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table) {
	// Preparing a sql query
	$statement = $this->pdo->prepare("select * from {$table}");

	// Executing statement
	$statement->execute();

	// Saving results to variable $results
	return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}