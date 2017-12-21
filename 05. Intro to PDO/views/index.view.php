<?php require ('partials/head.php'); ?>

<?php foreach ($users as $user) : ?>
	<li><?= $user->name; ?></li>
<?php endforeach; ?>

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

<?php require ('partials/footer.php'); ?>