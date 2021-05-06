<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRODUCT</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="jquery mobile 1.4.5/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="jquery mobile 1.4.5/jquery-1.11.1.min.js"></script>
    <script src="jquery mobile 1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body> 
	
	<div data-role="page" id="atn_home">
		<div data-role="header">
			<h2>PRODUCT - ATN COMPANY</h2>
			<p>Please input a new product here</p>
		</div>

		<div data-role="main" class="ui-content">
			<form action="product_create.php" method="post">
				<p>
					<label for="productid">Product ID<sup>*</sup></label>
					<input type="text" name="id" id="productid">
				</p>
				<p>
					<label for="productname">Product Name<sup>*</sup></label>
					<input type="text" name="name" id="productname">
				</p>
				<p>
					<label for="productcat">Category</label>
					<input type="text" name="cat" id="productcat">
				</p>
				<p>
					<label for="date">Date</label>
					<input type="date" name="date" id="date">
				</p>
				<p>
					<label for="price">Price</label>
					<input type="text" name="price" id="price">
				</p>
				<p>
					<label for="description">Descriptions<sup>*</sup></label>
					<textarea name="desc" id="description" rows="5" cols="30"></textarea>
				</p>
				<input type="submit" value="Submit">
				<input type="reset" value="Reset">
			</form>
		</div>

		<div data-role="footer" data-position="fixed">
			<h4>Navigation</h4>
					<div data-role="navbar">
						<ul>
							<li><a href="product.php" data-role="button" >Home</a></li>
							<li><a href="invoice.php" data-role="button" >Invoice</a></li>
							<li><a href="customer.php" data-role="button" >Customer</a></li>
							<li><a href="category.php" data-role="button" >Category</a></li>
						</ul>
					</div>  
		</div>
	</div> 
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>