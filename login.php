<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php
	include 'includes/nav.php';
	 ?>
	<section id="login" class="">
		<form id="login-form" >
		<div class="container">
			<div class="row justify-content-center bg">
				<div class="p-4 col-md-5  mt-lg-5 bg-transparent rounded" >
					<h1>login Here</h1>
					<hr>
					<span>Enter Email Id</span>
					<input type="email" class="form-control mt-2" name="email">
					<span>Enter Password</span>
					<input type="password" class="form-control mt-2" name="password">
					<button type="button" id="login-form-btn" class="form-control btn-info mt-2">Sign In</button>
					<hr>
					<span>If You Don't Have Account, <a href="signup.php"> Sign Up here</a></span>
				</div>
			</div>
		</div>
		</form>
	</section>
	<section id="loggedin" class=" container justify-content-center invisible">
		<div class="rounded border font-weight-bold text-center border-info p-2 "> You Logged in </div>

	</section>
	<section id="">
		
	</section>
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#login-form-btn").click(function(event) {
			var formdata = $("#login-form").serialize();

			$.ajax({
				url: 'root/functions.php',
				type: 'POST',
				dataType: 'html',
				data: formdata+"&login_user=1",
			})
			.done(function(data) {
				console.log("success");
			})
			/*.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});*/
			
		});
	</script>
</body>
</html>