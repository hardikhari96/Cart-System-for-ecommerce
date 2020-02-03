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
	<section id="signup">
		<form id="signup-form" onsubmit="return 0">
		<div class="container">
			<div class="row justify-content-center bg">
				<div class="p-4 col-md-5 mt-lg-3 bg-transparent rounded" >
					<h1>Register Here</h1>
					<hr>
					<span>Enter Email Id</span>
					<input type="email" class="form-control mt-2" name="email" required="">
					<span>Enter New Password</span>
					<input type="password" id="newpass" class="form-control mt-2" required="">
					<span>Repeat Password</span>
					<input type="password" id="reppass" class="form-control mt-2" name="password" required="">
					<div class="text-danger" id="msg"></div>
					<button type="button" id="signup-form-btn" class="form-control btn-info mt-2">Sign Up</button>
					<hr>
					<span>If You Have Accountt, <a href="login.php"> Login here</a></span>
				</div>
			</div>
		</div>
		</form>
	</section>
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">

		$("#signup-form-btn").click(function(event) {
			
			if($("#newpass").val() === $("#reppass").val())
			{
				var form_data = $("#signup-form").serialize();
				$.ajax({
					url: 'root/functions.php',
					type: 'POST',
					dataType: 'html',
					data:form_data+"&signup_user=1",
				})
				.done(function(data) {
					var jdata = jQuery.parseJSON(data);;

					if (jdata.status === 'true') {
						alert('Succesfully Signed Up');
					}
					else{
						alert('you already Signed up');
					}
				})
				/*.fail(function() {
					//console.log("error");
				})
				.always(function() {
					//console.log("complete");
				});*/

			} else {
				$("#msg").html('Password is not same');
			}

			
			
		});
	</script>
</body>
</html>