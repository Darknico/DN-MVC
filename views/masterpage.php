<?php if (!defined("DN-MVC")) die("Hacking..."); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles/main.css" type="text/css" />
	<title><?php echo $site_name ?></title>
</head>
<body>
	<img src="img/logo.png" alt="DN-MVC Logo" />
	<?php $registry->router->loader(); ?>
</body>
</html>
