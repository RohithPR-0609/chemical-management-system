<!DOCTYPE html>

<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>chemical store management system</title>
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
		<style>

body{
    background-color:#f2f2f2;
}
.table{
    background-color:#fff;
    box-shadow:0px 2px 2px #aaa;
    margin-top:50px;
}

		</style>
    </head>

    <body>
	<?php
	include('config.php');
	if (isset($_POST['delete']))
	{
		$id=$_POST['delete'];
		mysqli_query($connection, "DELETE from appratus WHERE id='$id'");
	}
	?>
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
							<a href="index.html">
							
						</div>
					</div>
				
				
					<div class="row nav-menu">
					
					<div class="row nav-menu">
					
						<div class="col-sm-12 columns text-center">
							<ul class="menu">
							<li class="dropdown">
							<a></a><li><a href="uploadproduct2.php" class="dropdown-toggle" data-toggle="dropdown"> Product  <span class="caret"></span></a>
								<ul class="dropdown-menu">
								<li><a href="chemical.php">Chemical</a></li>
								</ul>
							</li>
							
								<li><a href="home1.php">home</a></li>
								<li><a href="home.php">logout</a></li>

								

								
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
		
		
		<form action="home1.php" method="post">
		<div class="main-container">
			<header class="fullscreen-element no-pad centered-text">
				<div class="background-image-holder parallax-background overlay">
					<img class="background-image" alt="Background Image" src="img/back.jpg">
				</div>
				
				<div class="container">
	<div class="row">
		<table class="table table-bordered">
    <thead>
      <tr>
    
												<th>#</th>
												<th>Appratus Id</th>
												<th>Appratus name</th>
												<th>Price</th>
												<th>Quantity</th>											
												<th>Appratus type</th>
												<th>Action</th>
												
      </tr>
    </thead>
    <tbody>
		<?php
												include("config.php");
												$query= mysqli_query($connection, "select * from appratus" );
												while ($row = mysqli_fetch_array($query))  {
												echo'<tr">';
												echo '<td>'.$row['id'].'</td>';
												echo '<td>'.$row['aid'].'</td>';
												echo '<td>'.$row['aname'].'</td>';
												echo '<td>'.$row['acost'].'</td>';
												echo '<td>'.$row['aavalability'].'</td>';
												echo '<td>'.$row['atype'].'</td>';  
												echo '<td><button type="submit" name="book" class="btn btn-primary" value='.$row['id'].'>book </button></td>';
												echo '</tr>';
												}
											?>
    </tbody>
  </table>
	</div>
</div>
				
				
				
				
				
			</div>   
</form>			
				
			</header>
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
				