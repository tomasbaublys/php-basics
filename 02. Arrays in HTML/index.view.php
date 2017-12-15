<!DOCTYPE html>
<html>
<head>
	<title>PHP in HTML</title>

</head>
<body>
	<ul>
		<?php 
			foreach ($names as $name) {
				echo "<li>$name</li>";
			}
		 ?>
	</ul>
<!-- alternative sintax -->
	<hr>
	<ul>
		<?php foreach ($names as $name) : ?>
				<li><?= $name; ?></li>
		<?php endforeach; ?>
	</ul>
<!-- echo person from associative array -->
	<hr>
	<ul>
		<?php foreach ($person as $feature => $value) : ?>
				<li><strong><?= $feature; ?></strong> <?= $value; ?></li>
		<?php endforeach; ?>
	</ul>
	<hr>
	<h3>With foreach</h3>
	<ul>
		<?php foreach ($task as $heading => $value) :?>
			<li>
				<strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>
			</li>
		<?php endforeach; ?>
	</ul>
	<hr>
	<h3>Separate way</h3>
	<ul>
		<li>
			<strong>Title: </strong> <?= $task['title']; ?>
		</li>
		<li>
			<strong>Due: </strong> <?= $task['due']; ?>
		</li>
		<li>
			<strong>Assigned_to: </strong> <?= $task['assigned_to']; ?>
		</li>
<!-- 1. ong way to check if statement is true or false  -->
		<li>
			<strong>Status: </strong>
			<?php 
				if ($task['completed']) {
					echo '&#9989';
				} else {
					echo 'Incomplete';
				}
			?>
		</li>
<!-- 2. ong way to check if statement is true or false  -->
		<li>
			<strong>Status: </strong>
			<?php if ($task['completed']) :?>
				<span>&#9989</span>
			<?php else: ?>
				<span>Incomplete</span>
			<?php endif;  ?>
		</li>
<!-- short way to check if statement is true or false  -->
		<li>
			<strong>Completed: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
		</li>
	</ul>
</body>
</html>
