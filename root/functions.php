<?php
include 'db.php';


// Sign Up
if(isset($_POST['insert_product'])){
		
		 $sql = "INSERT INTO `products`(`product_name`, `product_details`, `product_quantity`, `product_rate`) VALUES ('".$_POST['product_name']."','".$_POST['product_details']."',".$_POST['product_quantity'].",".$_POST['product_rate'].")";
		 //echo $sql;

		 if($conn->query($sql))
		 {
		 	$status = array('status' =>'true');
		 }else {
		 	$status = array('status' =>'false');
		 }
		echo json_encode($status);
}

// Login In 

if (isset($_POST['get_products'])) {
	
	//echo "hello";
	$sql = "SELECT * FROM `products`";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
			    while($row = $result->fetch_assoc()) {
		?>


		<div class="card m-2" style="width: 16rem;">
			  <div class="card-body">
			    <h5 class="card-title"><?php echo $row["product_name"]; ?></h5>	
			    <p><?php echo $row["product_details"]; ?></p>	
			    <b class="float-left text-secondary">Price : <?php echo $row["product_rate"]; ?></b>
			    <b class="float-left text-secondary">Left Quantity : <?php echo $row["product_quantity"]; ?></b> 
			    <a href="#" class="btn btn-primary float-right">Add To Cart</a>
			  </div>
		</div>

	<?php
		}
	}
}

?>