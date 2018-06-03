<?php if (!defined("DN-MVC")) {die("Hacking...");}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styles/main.min.css" type="text/css" />
	<title><?php echo $site_name ?></title>
</head>
<body>
	<header>
		<img src="img/logo.png" alt="DN-MVC Logo" />
	</header>

	<main>
		<?php $registry->router->loader(); ?>
	</main>

	<footer>
		<?php echo $copy; ?>
	</footer>
</body>
</html>

<script type="application/javascript" src="scripts/jQuery/jquery-3.3.1.min.js"></script>
<script type="application/javascript" src="scripts/scripts.min.js"></script>
<script type="application/javascript"> var jsdnmvc = new js_dnmvc(); </script>
