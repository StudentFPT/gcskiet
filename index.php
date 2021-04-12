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
			
			<!--			
			<ul class="content-list">
				<li><a href="#page2" >This is link 1</a></li>
				<li><a href="#page3" >This is link 2</a></li>
				   	
			</ul>
			-->

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
			<img src="data:image/jpeg;base64,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" width="100%" height="100%" border="1" alt="This is my image">
			
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