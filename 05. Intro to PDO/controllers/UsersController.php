<?php 

class UsersController
{
	public function index()
	{
		$users = App::get('database')->selectAll('users');
		// $tasks = App::get('database')->selectAll('todos');

		return view('users', compact('users'));
	}

	public function store()
	{
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		]);

		return redirect('users');
	}
}