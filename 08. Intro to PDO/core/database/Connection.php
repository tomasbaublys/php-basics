<?php 

// Connecting to PDO
class Connection
{
	// takes all database configuration file from config.php
	public static function make($config)
	{
		try {
			/* Incase this db configuration data:
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
			we could use this one below:*/
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']

			);		
		} catch (PDOException $e) {
			die($e->getMessage());
		}

	}
}
