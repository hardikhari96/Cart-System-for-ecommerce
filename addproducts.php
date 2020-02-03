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
		<form id="add_product_form" onsubmit="return false">
		
		<div class="container mt-5">
			
			<div class="row justify-content-center bg">
				<div class="col-md-6">
					<h4> Add Products</h4>
					<hr>
					<span>Product Name</span>
					<input class="form-control" type="text" name="product_name">
					<span>Product Details</span>
					<input class="form-control" type="text" name="product_details">
					<span>Product Quantity</span>
					<input class="form-control" type="text" name="product_quantity">
					<span>Product Rate</span>
					<input class="form-control" type="text" name="product_rate">
					<br>
					<button id="add_product_form_btn" class="btn btn-info form-control" type="button">Add Product</button>
				</div>
			</div>
			
		</div>
		</form>
	</section>
	<script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#add_product_form_btn").click(function() {

			var formData = $("#add_product_form").serialize();

			$.ajax({
				url: 'root/functions.php',
				type: 'POST',
				dataType: 'html',
				data: formData + "&insert_product=1",
			})
			.done(function(data) {
				//console.log("success");
				var jdata = jQuery.parseJSON(data);

				if(jdata.status === 'true'){
					alert("Product Added");
					//$("#add_product_form").removeData();
			
				}else{
					alert("Error");
				}
				
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		});
	</script>
</body>
</html>