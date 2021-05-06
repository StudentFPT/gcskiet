<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INVOICE</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="jquery mobile 1.4.5/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="jquery mobile 1.4.5/jquery-1.11.1.min.js"></script>
    <script src="jquery mobile 1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body> 	
		
			<div data-role="header">
				<h2>CUSTOMER - ATN COMPANY</h2>
				<p>This form is filled everytime a customer purchases an item</p>
			</div>

			<form action="customer_create.php" method="post">
				<p>
					<label for="customeremail">Customer Email<sup>*</sup></label>
					<input type="text" name="email" id="customeremail">
				</p>
				<p>
					<label for="customerid">Customer ID<sup>*</sup></label>
					<input type="text" name="id" id="customerid">
				</p>
				<p>
					<label for="customername">Customer Name</label>
					<input type="text" name="name" id="customername">
				</p>
				<p>
					<label for="customerphone">Customer Phone</label>
					<input type="text" name="phone" id="customerphone">
				</p>
				<p>
					<label for="customeraddress">Customer Address</label>
					<input type="text" name="address" id="customeraddress">
				</p>
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>

			<div data-role="footer" data-position="fixed">
			<h4>Navigation</h4>
					<div data-role="navbar">
						<ul>
							<li><a href="product.php" data-role="button" >Home</a></li>
							<li><a href="invoice.php" data-role="button" >Invoice</a></li>
							<li><a href="customer.php" data-role="button" >Customer</a></li>
							<li><a href="category.php" data-role="button" >Categories</a></li>
						</ul>
					</div>  
			</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>