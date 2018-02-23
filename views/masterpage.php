<?php if (!defined("DN-MVC")) {die("Hacking...");}
?>
<!DOCTYPE html>
<html>
<head>
	<script type="application/javascript" src="scripts/jQuery/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="styles/main.min.css" type="text/css" />
	<title><?php echo $site_name ?></title>
</head>
<body>
	<img src="img/logo.png" alt="DN-MVC Logo" />
	<?php $registry->router->loader();?>

	<div id="jquerytest"></div>
</body>
</html>

<script type="application/javascript">

if (typeof jQuery != 'undefined') {
    $("#jquerytest").html("Use jQuery version "+jQuery.fn.jquery)
}

</script>
