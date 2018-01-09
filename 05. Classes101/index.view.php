<!DOCTYPE html>
<html>
<head>
	<title>Classes101</title>
</head>
<body>
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