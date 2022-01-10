<?php require_once "router.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?= $routes['url']; ?></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link rel="stylesheet" href="css/style.css">
		
	</head>
	<body>
		
		<?php require_once "views/header.php"; ?>
		
		<?php require_once "views/" . $view; ?>
	</body>
</html>