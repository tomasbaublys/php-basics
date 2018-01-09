<?php 

class Post 
{
	public $title;
	public $published;

	public function __construct($title, $published)
	{
		$this->title = $title;
		$this->published = $published;
	}
}

$posts = [
	new Post('My First Post', true),
	new Post('My Second Post', true),
	new Post('My Third Post', false),
	new Post('My Fourth Post', false),
];

foreach ($posts as $post) {
	$post->published = true;
}

/* We using array_map function when it needs to modify whats was returned,
in this case we use this function incase foreach */

$modified = array_map(function ($post) {
	$post->published = true;
	return $post;
}, $posts);

$modified2 = array_map(function ($post) {
	return (array) $post;
}, $posts);

$modified3 = array_map(function ($post) {
	return ['title' => $post->title];
}, $posts);


var_dump($modified);
var_dump($modified2);
var_dump($modified3);



