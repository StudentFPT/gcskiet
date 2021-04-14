<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INVOICE</title>
</head>
<body>
    <h2>INVOICE - ATN COMPANY</h2>
    <p>This form is filled every time a customer purchases an item</p>
    <form action="process_form.php" method="post">
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
            <label for="description">Descriptions<sup>*</sup></label>
            <textarea name="desc" id="description" rows="5" cols="30"></textarea>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">

        </div><!-- /content -->
		<!--
		<script>
			$('#myform').on('submit', function (e) {

				e.preventDefault();
				$.ajax({
				  method: "POST",
				  url: "dbconnect.php",
				  data:$("#myform").serialize(),
					success: function(result){
						console.log(result);
					}
				 });
				
			});
			
		</script>
		<script>
			$(document).ready(function(){
				$("#btnsubmit").click(function(){
					//alert("Form being submitted");
					$("#myform").submit();
				});
			});
		</script>
		-->
					
		<div data-role="footer" data-position="fixed">
			<h4>Page Footer</h4>
			<div data-role="navbar">
				<ul>
					<li><a href="#home" data-role="button">Home</a></li>
					<li><a href="#invoice" data-role="button">Invoice</a></li>
				</ul>
				
			</div>
			
				  
		</div><!-- /footer -->
	</div><!-- /page -->

	<!--This is the 2nd page-->
	<div data-role="page" id="invoice">

		<div data-role="header">
			<h1>PRODUCT</h1>
		</div><!-- /header -->

		<div data-role="main" class="ui-content">
			<p>Product content goes here.</p>
			<p>This form is used to add a INVOICE item</p>
			<form id="productform" action="product.php" method="post">
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
					<label for="price">Price</label>
					<input type="text" name="price" id="price">
				</p>

				<p>
					<label for="description">Descriptions<sup>*</sup></label>
					<textarea name="desc" id="description" rows="5" cols="30"></textarea>
				</p>
				<input type="submit" value="Add this product">
				<input type="reset" value="Reset">
				<!--<input type="button" name="submit" id="submit" value="Submit Here">
				-->
			</form>
			
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed">
			<h4>Navigation</h4>
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" >Home</a></li>
						<li><a href="#invoice" data-role="button" >Invoice</a></li>
					</ul>
				</div>  
		</div><!-- /footer -->
	</div><!-- /page -->

	<!--This is 3rd page-->
	<div data-role="page" id="customer">

		<div data-role="header">
			<h1>CUSTOMER</h1>
		</div><!-- /header -->

		<div data-role="main" class="ui-content">
			<p>Customer content goes here.</p>
			<div data-role="collapsible" data-collapsed="false">
		    <h4>This is a collapsible list items</h4>
		    <ul data-role="listview">
		        <li><a href="#">List item 1</a></li>
		        <li><a href="#">List item 2</a></li>
		        <li><a href="#">List item 3</a></li>
		    </ul>
		</div>
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed">
			<h4>Navigation</h4>
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" >Home</a></li>
						<li><a href="#invoice" data-role="button" >Invoice</a></li>
					</ul>
				</div>  
		</div><!-- /footer -->
	</div><!-- /page -->
    </form>
</body>
</html>