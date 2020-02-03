<!DOCTYPE html>
<html>
<head>
	<title>Session Manager</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php
	include 'includes/nav.php';
	?>

	<section id="welcome">
			<div class="container-fluid mt-5" >
				<div class="row" id="products"></div>
			</div>
	</section>
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/main.js"></script>
	<script type="text/javascript">getProducts();</script>
</body>
</html>