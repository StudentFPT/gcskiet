<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./jquery mobile 1.4.5/jquery.mobile-1.4.5.css">
    <script src="./jquery mobile 1.4.5/jquery-1.11.1.min.js"></script>
    <script src="./jquery mobile 1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div data-role="page" id="home">

		<div data-role="header">
			<h1>Home page</h1>
		</div><!-- /header -->
		<div data-role="main" class="ui-content">
			<p>Page content goes here.</p>
			<div data-role="collapsible" data-collapsed="false">
				<h4>This is a collapsible list items</h4>
				<ul class="content-list" data-role="listview">
					<li><a href="#">List item 1</a></li>
					<li><a href="#">List item 2</a></li>
					<li><a href="#">List item 3</a></li>
				</ul>
			</div>
			
			

			<a id="btnAddApple" href="#" class="ui-btn ui-btn-inline">Add an Apple</a>
			<button id="btnAddOrange" class="ui-btn ui-btn-inline">Add an Orange</button>
		</div><!-- /content -->

<script>
	$(document).ready(function(){
		//alert("The document is ready");

		//var newli = '<li><a href="" >The document is ready</a></li>';
		//$("ul.content-list").append(newli);
			
		$("#btnAddApple").click(function(){
			//alert("The button Add Apple is clicked");
			var newli = '<li><a href="" >This is a link to Apple</a></li>';
			$("ul.content-list").append(newli);
			$("ul.content-list").listview("refresh");
			
		});

		$("#btnAddOrange").click(function(){
			//alert("The button Add Orange is clicked");
			var newli = '<li><a href="" >This is a link to Orange</a></li>';
			$("ul.content-list").append(newli).listview("refresh");
		});


		
	});
</script>
		<div id="rectangle" style="width:200px; height:100px;">
		</div>
		<a id="btnBlue" href="#" class="ui-btn ui-btn-inline">Blue</a>
			<button id="btnRed" class="ui-btn ui-btn-inline">Red</button>
<script>
	$("#btnBlue").click(function(){
			$("#rectangle").css({'background-color':'blue'});
	});

	$("#btnRed").click(function(){
			$("#rectangle").css({'background-color':'red'});
	});
</script>
		<div data-role="footer" data-position="fixed">
			<h4>Page Footer</h4>
			<div data-role="navbar">
				<ul>
					<li><a href="#home" data-role="button">Page1</a></li>
					<li><a href="#page2" data-role="button">Page2</a></li>
				</ul>
				
			</div>
			
				  
		</div><!-- /footer -->
	</div><!-- /page -->

	<!--This is the 2nd page-->
	<div data-role="page" id="page2">

		<div data-role="header">
			<h1>Page 2</h1>
		</div><!-- /header -->

		<div data-role="main" class="ui-content">
			<p>Page 2 content goes here.</p>
			<img src="https://en.wikipedia.org/wiki/File:Beckswimbledon.jpg" width="100%" height="100%" border="1" alt="This is my image">
			
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed">
			<h4>Page Footer</h4>
				<div data-role="navbar">
					<ul>
						<li><a href="#home" data-role="button" >Page1</a></li>
						<li><a href="#page2" data-role="button" >Page2</a></li>
					</ul>
				</div>  
		</div><!-- /footer -->
	</div><!-- /page -->

	<!--This is 3rd page-->
	<div data-role="page" id="page3">

		<div data-role="header">
			<h1>Page 3</h1>
		</div><!-- /header -->

		<div data-role="main" class="ui-content">
			<p>Page 3 content goes here.</p>
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
			<h4>Page Footer</h4>
				<div data-role="navbar">
					<ul>
						<li><a href="1.html" data-role="button" >Page1</a></li>
						<li><a href="2.html" data-role="button" >Page2</a></li>
					</ul>
				</div>  
		</div><!-- /footer -->
	</div><!-- /page -->
</body>
</html>