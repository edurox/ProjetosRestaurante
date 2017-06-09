<?php
    require_once __DIR__  . '/application/app.php';
	require_once APP_PATH . "/RequestController.php";
    $controller = new RequestController();
    $request = $controller->getRequest();
?>
<?php if($controller->isHtmlContent) { ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
        <head>
        	<?php require_once VIEWS_PATH . "/html/head.php"; ?>
        </head>
        <body>
        	<?php require_once VIEWS_PATH . "/html/header.php"; ?>
        	<main>
                <?= $controller->pageHtml ?>
        	</main>
        </body>
    </html>
<?php } else {
    echo $controller->pageHtml;
} ?>
