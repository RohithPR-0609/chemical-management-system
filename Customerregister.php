<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Chemical store management system</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-1.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all"/>
       
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Cardo:400,400italic" rel="stylesheet" type="text/css">
        <link href="css/font-cardo.css" rel="stylesheet" type="text/css">
    </head>
<?php
		include ('config.php');
		if (isset($_POST['submit'])){
			
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$bool = true;
		if($bool) {
			mysqli_query($connection, "insert into customerdetails(name,email,password) values ('$name','$email','$password')");
			
			print '<script>alert("Successfully added !");</script>';
			print '<script>window.location.assign("Customerregister.php");</script>';
		}
		}
?>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
			
		<div class="nav-container">
			<nav class="centered-logo top-bar">
				<div class="container">
				
										
					<div class="row">
						<div class="col-sm-12 text-center">
							<a href="index.php">
							
						</div>
					</div>
				
				
					<div class="row nav-menu">
					
						<div class="col-sm-12 columns text-center">
							<ul class="menu">
								<a></a><li><a href="index.php"target="_self">login</a></li><li><a href="home.php" target="_self">home</a></li><li><a href="locations.php" target="_self">locations</a></li><li><a href="contact.php" target="_self">Contact</a></li>
								
								

								
							</ul>
		
						</div>
					</div>
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div>
				<div class="bottom-border"></div>
			</nav>
		
						
			
		
			
		
			
		
		</div>
		
		<div class="main-container">
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="img/back.jpg">
				</div>
				
				<div class="container align-vertical">
					<div class="row">
					<div class="row">
			<div class="container-fluid" style="background-image:url('img/back.jpg');padding:12%"> 
				<div class="col-md-4"></div>
					<div class="col-md-4 jumbotron">
												<p class="lead text-black"><b>Sign up</B></p>
<form action="Customerregister.php" method="post">
						Name:<input type="name" name="name" placeholder="Enter username" style="margin-bottom:2%" required><br>
						Email:<input type="email" name="email" placeholder="Enter email"  style="margin-bottom:1%" required><br>
						Password:<input type="password" name="password" placeholder="Enter password"  style="margin-bottom:1%" required><br><br>
						<input type="submit" name="submit" value="register"></a></br>
</form>
					</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<footer style="margin-top:20%;background-color:blue;">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-4">
						<p style="color:white;"  class="pull-right">All rights reserved by chemics.in</p>
					</div>
				</div>

		</footer>
						<div class="col-md-7 col-sm-8">
							
                                                                        
						</div>
					</div>
				</div>
				
				
			</header>
		</div>
		
		
						
						
					</div>
				</div>
			</footer>
		</div>
		<script src="https://www.youtube.com/iframe_api"></script>
		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/twitterFetcher_v10_min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>			
	
    </body>
</html>
				