<?php 

class Post 
{
	public $title;
	public $author;
	public $published;

	public function __construct($title, $author, $published)
	{
		$this->title = $title;
		$this->author = $author;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', 'JW', true),
	new Post('My Second Post', 'OB', true),
	new Post('My Third Post', 'JW', false),
	new Post('My Fourth Post', 'TB', false),
];

/* if we want to get only array of titles, we could ues array_map function,
but another way to use array_column (just lesss code), just property could be public */

$posts = array_map(function ($post) {
	return (array) $post;
}, $posts);

$titles = array_column($posts, 'title');
$authors = array_column($posts, 'author', 'title');

var_dump($titles);
var_dump($authors);



