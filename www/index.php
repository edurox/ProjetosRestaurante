<?php
	require_once __DIR__ . "/source/application/DefinePath.php";
	require_once APP_PATH . "/Connection.php";
	require_once APP_PATH . "/Default.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once HTML_PATH . "/head.php"; ?>
</head>
<body>
	<?php require_once HTML_PATH . "/header.php"; ?>
	<main>
		<?php
			$request = explode('/',$_SERVER['REQUEST_URI'])[3];
			if($request)
				require_once "source/views/" .$request. ".php";
			else
				require_once "source/views/index.php";
		?>
	</main>
</body>
</html>
