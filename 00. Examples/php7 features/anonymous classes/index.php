<?php

// Use it on purpose of testing

// 1 Example
interface Logger {
	public function log($message);
}

class Application {
	protected $logger;

	public function setLogger(Logger $logger)
	{
		$this->logger = $logger;

		return $this;
	}

	public function action()
	{
		$this->logger->log('Doing things.');
	}
}

$app = new Application;
$app->setLogger(new class implements Logger {
	public function log($message)
	{
		var_dump($message);
	}
});

$app->action();


/* 2 Example
$user = Mockery::mock('User');

$user->souldreceive('history')->andReturn(new class {
	public function history() {
		return 'active';
	}
});
*/

/* 3 Example
class Item {
	public function __construct($transformer)
	{
		
	}
}

$item = new Item(class {
	public function transform()
	{
		return [];
	}
});
*/




