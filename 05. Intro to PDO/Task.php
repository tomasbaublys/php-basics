<?php 

class Task 
{

	public $description;

	public $completed;

	public function showTasks()
	{
		return $this->description;
	}

}