<!DOCTYPE>
<?php

include("functions/functions.php");

?>

<html>
    <head>
	       <title>Buy Online</title>
		   
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		   
		   <link rel="stylesheet" href="styles/style.css" media="all" />	
	</head>
	
	<body>
	
	<!--Main Container starts here-->
	<div class="main_weapper">
		 
		         <!--Header starts here-->
				  <div class="row header_wrapper"> 
			 
			     <img id="logo" class="col" style="height:150px" src="images/logo.jpg" />
				 <img id="banner" class="col"  style="height:150px" src="images/ad_banner.jpg" />
			     <img id="logo" class="col" style="height:150px" src="images/logo.jpg" />

				 </div>
				 <br/>
				 <!--Header ends here--> 

			     <!--Navigation Bar starts here -->
				 
				 <div class="menubar">
					
				     <ul id="menu">

						 <li><a href="#">Home</a></li>
						 <li><a href="#">All Products</a></li>
						 <li><a href="#">My Account</a></li>
						 <li><a href="#">Sign up</a></li>
						 <li><a href="#">Shopping Cart</a></li>
						 <li><a href="#">Contact Us</a></li>
						</ul>

				<div id="form">
					<form method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="user_query" placeholder="Search a Product" />
						<input type="submit" name="search" value="Search" /> 
					</form>
				 </div>
				 </div>
				 <!--Navigation Ends here --> 

				 <!--Content wrapper starts-->
				 <div class="content_wrapper">
			 
				  <div id="sidebar">

				      <div id="sidebar_title">Categories</div>
					  
					  <ul id="cats">

					    <?php getCats(); ?>
						 
					     <ul>
						
						 <div id="sidebar_title">Brands</div>
					  
					  <ul id="cats">

					     <li><a href="#">Pandora</a></li>
						 <li><a href="#">Tiffany & Co</a></li>
						 <li><a href="#">Cartier</a></li>
						 <li><a href="#">Bvlgari</a></li>
						 
					     <ul>

					  </div>
			  
			      <div id="content_area">This is content area</div>
			 
			 </div>
			     <!--Content wrapper ends-->

			 
			 
			 
			 <div>This is the foofedfeter</div>
			 
			 
			 
			 
			 
			 </div>
		 
		 
			
	
	
	
	
	</body>
	</html>