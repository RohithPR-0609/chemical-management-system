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
    </head>
<style>

.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}
</style>
<head></head>

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
							<a href="index.html">
							
						</div>
					</div>
				
				
					<div class="row nav-menu">
					
						<div class="col-sm-12 columns text-center">
							<ul class="menu">
															<a></a><li><a href="admin.php">Admin</a></li><li></li><li><a href="uploadProduct.php"  class="active" target="_self">Upload Product</a></li><li><a href="viewProduct.php" target="_self">View product</a></li><li><a href="home.php" target="_self">Logout</a></li>
								
								

								
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
				<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form action="uploadProduct.php" method="post">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Upload Product</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="cid" placeholder="Customer Id" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="email" name="cname" placeholder="Customer Name" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="caddress" placeholder="customer address" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="pproduct" placeholder=" purchased product" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="subject" name="pid" placeholder="Product Id" required>
					</div>
					
            
					<button type="submit" name="submit" class="btn btn-primary pull-right" style="margin-top:3%">Submit Form</button>
        </form>
    </div>
</div>
</div>
					<div class="row">
				<div class="col-md-4"></div>
			</div>                             
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
<script>
$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

</script>	
    </body>
</html>
				