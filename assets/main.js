function getProducts(){

	$.ajax({
		url: 'root/functions.php',
		type: 'POST',
		dataType: 'html',
		data: {get_products: '1'},
	})
	.done(function(data) {
		$("#products").html(data);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
}