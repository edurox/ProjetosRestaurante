<?php
	require_once __DIR__ . "/source/application/DefinePath.php";
	require_once APP_PATH . "/Connection.php";
	require_once APP_PATH . "/Default.php";
	require_once APP_PATH . "/NoobController.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once HTML_PATH . "/head.php"; ?>
</head>
<body>
	<?php require_once HTML_PATH . "/header.php"; ?>
	<main>
		<?php new NoobController(); ?>
	</main>
</body>
</html>
