<!DOCTYPE html>
<html>
<head>
	<title>Classes101</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/about.php">About Page</a></li>
			<li><a href="/about.php">Cntact Page</a></li>
		</ul>
	</nav>
	<h1>My Tasks</h1>
	<?php foreach ($tasks as $task) :?>
		<li>
			<?php if ($task->completed) : ?>
				<strike><?= $task->description ?></strike>
			<?php else: ?>
				<?= $task->description ?>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</body>
</html>