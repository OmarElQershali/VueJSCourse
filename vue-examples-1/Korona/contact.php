<?php
/*
Free Bootstrap Themes : http://www.365bootstrap.com
*/

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$message=$_POST['message'];

	$to = "youremail@gmail.com";
	$subject = "365bootstrap - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "365bootstrap.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes designed by 365bootstrap.com" />
    <meta name="author" content="www.365bootstrap.com" />
	<title>Korona - Free Bootstrap Themes</title>
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-default navbar-static-top text-center" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>

				</button>
				<a class="navbar-brand" href="#">
					<img src="images/logo.png" class="hidden-xs" alt="">
					<h3 class="visible-xs">Korona</h3>
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="archive.html">Staff</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="contact.html">Contact Us</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
	<header>
		<!-- Carousel -->
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img src="images/1.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>Welcome to Us !</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <div class="item">
			    	<img src="images/2.jpg" alt="Second slide">
			    	<!-- Static Header -->
                    <div class="header-text">
                        <div class="col-md-12 text-center">
                            <h2>Sed diam nonumy eirmod tempor invidunt</h2>
                            <br>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            <br>
                        </div>
                    </div><!-- /header-text -->
			    </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div><!-- /carousel -->
	</header>
	<!-- Header -->
	
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archive-page">
	
		<!-- ////////////Content Box -->
		<section class="box-content box-bg-white">
			<div class="box-form">
				<div class="heading">
					<h2>Contact Us</h2>
				</div>
				<div class="google-map-container " style="height:600px;" data-map-id="google-map-1486202921" data-lat-value="40.7127837" data-lng-value="-74.0059413" data-zoom-value="14" data-scroll-wheel="" data-pan-control="1" data-zoom-control="1" data-map-draggable="1" data-map-marker="[&quot;http:\/\/ld-wp.template-help.com\/wordpress_57758\/wp-content\/uploads\/2016\/03\/map_marker.png&quot;,56,56,false]" data-map-style="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#46bcec&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]"><div id="google-map-1486202921" class="google-map" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);"></div>
				</div>
				
				<!--Warning-->
				<center><?php echo $text;?></center>
				<!---->
				
				<form name="form1" method="post" action="contact.php" id="ff">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Your Name" required="required" />
							</div>
							<div class="form-group">
								<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Your Email" required="required" />
							</div>
							<div class="form-group">
								<input type="number" class="form-control input-lg" name="phone" id="phone" placeholder="Your Phone Number" required="required" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
								placeholder="Message"></textarea>
							</div>	
						</div>
					</div>
					<button type="submit" class="btn btn-2 btn-sm" name="submitcontact">send</button>
				</form>
			</div>
		</section>
		
	</div>

	<footer>
		<div class="wrap-footer">
			<div class="no-gutter">
				<div class="col-md-6">
					<div class="box-text">
						<div class="footer-heading">
							<h2>Text Heading</h2>
						</div>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
						<br>
						<p>Copyright @ Korona - <a href="http://www.365bootstrap.com" target="_blank" rel="nofollow">Bootstrap Themes</a> Designed by 365Bootstrap.com</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-text">
						<h5>Financial Planning</h5>
						<ul class="quick-link list-group">
							<li><a href="#">Investment Management</a></li>
							<li><a href="#">Retirement Planning</a></li>
							<li><a href="#">Long Term Care</a></li>
							<li><a href="#">Estate Planning</a></li>
							<li><a href="#">Social Security</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-text">
						<h5>Investment Help</h5>
						<ul class="quick-link list-group">
							<li><a href="#">Wealth Management</a></li>
							<li><a href="#">Retirement & College Savings</a></li>
							<li><a href="#">Business Owners</a></li>
							<li><a href="#">Insurance & Annuities</a></li>
							<li><a href="#">Cash & Credit</a></li>
							<li><a href="#">Stocks, Bonds & Mutual Funds</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'green',
			});
		});
	</script>
	
	<!-- Google Map -->
	<script type="text/javascript">
	/* <![CDATA[ */
	var wp_load_style = ["cherry-social.css","cherry-testimonials.css","contact-form-7.css","font-awesome.css","swiper.css","magnific-popup.css","cherry-shortcodes-all.css","cherry-charts.css","theme57758-grid-base.css","theme57758-grid-responsive.css","slick.css","cherryframework4-drop-downs.css","theme57758-main.css","theme57758-main-responsive.css","cherryframework4-add-ons.css","theme57758-style.css","theme26118_material_icon.css","cherry-google-fonts.css","booked-gf.css","booked-fontawesome.css","booked-tooltipster.css","booked-tooltipster-theme.css","booked-animations.css","booked-styles.css","booked-responsive.css","mpce-theme.css"];
	var wp_load_script = ["cherry-api.js","jquery.js","booked-spin-js.js","booked-spin-jquery.js","booked-tooltipster.js","booked-functions.js","comment-reply.js","magnific-popup.js","cherry-script.js","theme57758-script.js"];
	var cherry_ajax = "a180e8e82f";
	/* ]]> */
	</script>
	<script type="text/javascript" src="js/Gmap/cherry-api.min.js"></script>
	<script type="text/javascript" src="js/Gmap/forms-api.min.js"></script>
	<script type="text/javascript" src="js/Gmap/init.min.js"></script>
	<script type="text/javascript" src="js/Gmap/js"></script>
	<script type="text/javascript" src="js/Gmap/google-map.min.js"></script>
	
</body>
</html>
	
