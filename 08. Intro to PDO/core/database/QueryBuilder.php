<?php 

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	
	public function selectAll($table) 
	{
	// Preparing a sql query
	$statement = $this->pdo->prepare("select * from {$table}");

	// Executing statement
	$statement->execute();

	// Saving results to variable $results
	return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{
		// insert into %s (%s) values (%s) we using sprint function for that:
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);

		try {
			$statement = $this->pdo->prepare($sql);

			$statement->execute($parameters);
		} catch (Exception $e) {
			die('Somethig went wrong');
		}
	}
}