<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body >
	<?php
	include 'includes/nav.php';
	 ?>
	<!--<div class="container">
		<section id="chanage_name" class="bg-warning">1	</section>
		<section id="change_email" class="bg-success">2	</section>
		<section id="change_password" class="bg-primary">3</section>
		<section id="session_manager" class="">	</section>
	</div> -->
	<h1>




<?php


session_start();

echo session_id();
echo "<br>";
echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['REMOTE_HOST'];
?>






	</h1>
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
	</script>
</body>
</html>