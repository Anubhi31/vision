<!--For storing email and sending subscription mail-->
<?php
if(isset($_POST['newsletter_submit'])){
	include "database.php";
	$sql="insert into newsletter(n_email) values ('".$_POST['newsletter_input']."')";
	$result=$db->query($sql);
	if($result){
		include "mail_newsletter.php";
	}
}
?>
<!--Ends-->

<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Vision</title><link rel="icon" type="image/png" href="http://visionmanit.in/img/favicon.png">
	
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>

   
 

.holder {
	/*width: 332px;*/
	margin: 20px;
	float: left;
	overflow: hidden;
}
.topbar {
	/*border: 1px solid white;*/

	-webkit-background-clip: padding-box;
}
.topbar h1 {
	
	text-align: center;
	margin: 0px 0px 0px 0px;
	color: #fff;
	font-size: 26px;
	text-shadow: 1px 1px 0px rgba(0,0,0,0.3);
	letter-spacing: -1px;
}
.inbar {
	/*border: 1px solid white;*/
	box-shadow: inset 0px 0px 1px 1px rgba(255,255,255,0.5), 
				inset 0px -3px 15px -1px rgba(0,0,0,0.2);
    background: #FFF
}
.inbar ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
.inbar ul li { 
	margin: 0;
	padding: 0;
	clear: both;
	}
.inbar ul li span {
	float: left;
	padding: 5px 20px 5px 20px;
	/*border-right: 1px solid #eee;
	border-bottom: 1px solid #eee;*/
	font-weight: 800;
	font-size: 30px;
	color: #888;
	background: #fff;
}
.inbar ul li p {
	padding: 17px 17px 16px 17px;
	/*border-right: 1px solid #eee;*/
	border-bottom: 1px solid #ddd;
	margin: 0;
	color: #666;
	font-size: 16px;
	text-shadow: 1px 1px 0 #fff;
	box-shadow: inset 0 0 1px 1px #fff;
    text-align:center;
}
.inbar ul li:hover p {
	background: rgba(0,0,0,0.02); 
}
.inbar ul li:hover span {
	color: rgba(0,0,0,0.3);
}
/* Colors */

.blue {
background: #ABABAB;
}
    </style>

</head>
<body>
	
	<!--start: Header -->
	<header style="height:70px">
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#"><img src="img/logo.png" style="width: 170px;height: 70px;margin-top: 3px;"></a>	
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="Home.php">Home</a></li>
			              			<li><a href="About.php">About</a></li>
									<li><a href="Gallery.php">Gallery</a></li>
									<li><a href="Events.php">Events</a></li>
			              			<li><a href="Contact.php">Contact Us</a></li>
                                    
			         
			            		</ul>
			          		</div>
			        	</div>
			      	</div>

				</div>	
				<!--end: Navigation -->
					  			</div>
            </div>
			<!--end: Row -->
			
		
		<!--end: Container-->			
			
        
    </header>
	<!--end: Header-->
	<div class="baap" style="margin-bottom:140px">
		<!-- start: Slider -->
		<div class="slider-wrapper">

			<div id="da-slider" class="da-slider">
                <div class="da-slide">
					<h2>Eureka&#33;</h2>
					<p>A tribute to the crazy ones.....</p>
					<a href="Eureka/" class="da-link">Read more</a>
					<div class="da-img"><img src="img/parallax-slider/eureka1.png" alt="eureka logo" /></div>
				</div>
				<div class="da-slide">
					<h2>Noesis 2K16</h2>
					<p>Annual Mega Fest of Vision. This year it had more than 1400 participants from several colleges across the city.</p>
					<a href="Events.php" class="da-link">Read more</a>
					<div class="da-img"><img src="img/parallax-slider/NOesis.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>White Line Tracer <br> Workshop</h2>
					<p>Annual Workshop conducted by Vision. </p>
					<a href="Events.php" class="da-link">Read more</a>
					<div class="da-img"><img src="img/parallax-slider/WLT.png" alt="image02" /></div>
				</div>
				<div class="da-slide">
					<h2>Robo Fifa</h2>
					<p>Annual Event conducted in Technosearch.</p>
					<a href="Events.php" class="da-link">Read more</a>
					<div class="da-img"><img src="img/parallax-slider/RoboFifa.png" alt="image03" /></div>
				</div>
				<div class="da-slide">
					<h2>Circuit Run</h2>
					<p>Annual Event conducted in Technosearch.</p>
					<a href="Events.php" class="da-link">Read more</a>
					<div class="da-img"><img src="img/parallax-slider/circuit_run.png" alt="image04" /></div>
				</div>
				<div class="da-slide">
					<h2>Code Kriegers</h2>
					<p>Annual Event conducted in Technosearch.</p>
					<a href="Events.php" class="da-link">Read more</a>
					<div class="da-img"><img src="img/parallax-slider/CK.png" alt="image05" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
			
		</div>
		<!-- end: Slider -->
				
		<!--start: Wrapper-->
		<div id="wrapper">
					
			<!--start: Container -->
			
				
				
				
				<!-- start: Row -->
				<div class="row" style="padding-top: 30px">
					
						
						<!-- start: Icon Box Start -->
						
					<link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<div class="span6">
	<div class="holder" style="float:left;width:90%">
		<div class="topbar blue">
			<h1>News and Events</h1>
		</div>
		<div class="inbar">
			<ul >
                <li> <p><a href="Eureka/">Eureka!!</a></p></li>
				<li><p> Arduino Workshop</p></li>
				<li> <p> Web Development Workshop</p></li>
				<li><p>Python Applications Workshop</p></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
                    </div>
<div class="span6">
    <div class="avatar view-team">
        
        <img src="img/upcoming_events/eureka.jpg" alt="eureka">
        <a href="Eureka/"><div class="mask" style="width:100%;height:100%">
        <div class="body-carousel-pe">
            <h2>Eureka</h2>
            <p>2K17</p>
            
            </div>
        </div>
            </a>
    </div>
                    </div>
			<div class="span4" style="float:right">
                    <!-- start: Follow Us -->
					<h2 style="text-align:center">Follow Us!</h2>
					<ul class="social-grid">
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-twitter">
											<a href="https://twitter.com/VisionNITB"></a>
										</div>
										<div class="social-info-back social-twitter-hover">
											<a href="https://twitter.com/VisionNITB"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
                        <li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-insta">
											<a href="https://www.instagram.com/visionmanit/"></a>
										</div>
										<div class="social-info-back social-insta-hover">
											<a href="https://www.instagram.com/visionmanit/"></a>
										</div>	
									</div>
								</div>
							</div>
						</li>
                         
						<li>
							<div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-facebook">
											<a href="https://www.facebook.com/visionmanit/?fref=ts"></a>
										</div>
										<div class="social-info-back social-facebook-hover">
											<a href="https://www.facebook.com/visionmanit/?fref=ts"></a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
                            <div class="social-item">				
								<div class="social-info-wrap">
									<div class="social-info">
										<div class="social-info-front social-youtube">
											<a href="https://www.youtube.com/channel/UCM1dBAT20ulLHkofolWr3uA"></a>
										</div>
										<div class="social-info-back social-youtube-hover">
											<a href="https://www.youtube.com/channel/UCM1dBAT20ulLHkofolWr3uA"></a>
										</div>	
									</div>
								</div>
							</div>

                        </li>
                        					</ul>
					<!-- end: Follow Us -->
				
					<!-- start: Newsletter -->
				<!-- start: Newsletter -->
					<form id="newsletter" method="POST">
						<h3>Newsletter</h3>
						<p>Please leave us your email</p>
						<label for="newsletter_input">@:</label>
						<input type="text" id="newsletter_input" name="newsletter_input" required >
						<input type="submit" id="newsletter_submit" name="newsletter_submit" value="submit">
					</form>
					<!-- end: Newsletter -->
					<!-- end: Newsletter -->
                    </div>			
							
								
            	
								
								
				
								
								
					
					
					<!-- end: Icon Boxes -->
					<div class="clear"></div>
				</div>
				<!-- end: Row -->
				
				
				
    </div>
			<!--end: Container-->
		
		</div>
		<!-- end: Wrapper  -->			
	<div class="footer-bottom" style="text-align:center;padding-bottom: 3rem;padding-top: 24px;padding-bottom: 10px;font-size: 16px ;font-family: raleway-medium,sans-serif;background: #14181E;">
    <div class="row" >
        <div class="span3"><span>Sponsored by</span><br><img src="img/drrmztech.png"></div>
        <div class="copyright"> <span>&copy; Copyright Vision.</span><br><span>Designed and Maintained by Vision Web Team</span></div>
        
      </div>
    </div>
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>
