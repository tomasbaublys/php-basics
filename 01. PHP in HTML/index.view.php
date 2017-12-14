<!DOCTYPE html>
<html>
<head>
	<title>PHP in HTML</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1><?php echo $greeting; ?></h1>
		<h2><?= $greeting; ?></h2> <!-- short example -->
	</header>
</body>
</html>
