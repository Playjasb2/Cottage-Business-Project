<?php
ob_start();
require_once 'core/init.php';
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"    content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

<title>Sauble Beach All Season Cottage Rentals</title>

<link rel="shortcut icon" href="assets/images/gt_favicon.png">

<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for our template -->
<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
<link rel="stylesheet" href="assets/css/main.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<style>
#search{
	position: relative;
	left: -65px;
	top: -85px;
}
.testimonials h3{
	margin-top:25px;
} 
</style>
<body class="home">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
<div class="container">
<div class="navbar-header">
<!-- Button for smallest screens -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="index.html"></a>
</div>
<div class="navbar-collapse collapse">

<ul class="nav navbar-nav pull-right">

<?
if($user->isLoggedIn())
{
?>
<li class="active"><a href="Home.php">Home</a></li>
<li><a href="News.php">News</a></li>
<li><a href="Gallery.php">Gallery</a></li>
<li><a href="Calendar.php">Calendar</a></li>
<li><a href="Location.php">Location and Directions</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Info <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="Beach.php">Beach</a></li>
<li><a href="Contact.php">Contact</a></li>
<li><a href="Rates.php">Rates</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="profile.php?user=<?php echo escape($user->data()->username); ?>">My Profile</a></li>
<li><a href="change_password.php">Change Password</a></li>
</ul>
</li>
<li><a class="btn" href="signout.php">SIGN OUT</a></li>
<?
}
else
{
?>
<li class="active"><a href="Home.php">Home</a></li>
<li><a href="News.php">News</a></li>
<li><a href="Gallery.php">Gallery</a></li>
<li><a href="Calendar.php">Calendar</a></li>
<li><a href="Location.php">Location and Directions</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li><a href="Beach.php">Beach</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li><a href="Contact.php">Contact</a></li>
<li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
<?
}
?>
</ul>
<!--Search-->

<table id = "search" cellpadding=0 cellspacing=0 border=0 >
<tr>
<td  style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;">
<center><table width="90%" cellpadding=0 cellspacing=0 border=0  style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;">
<tr>
<td style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;" align=center >  <a href="http://www.freefind.com/searchtipspop.html" target=searchtips onclick="somewin=window.open('http://www.freefind.com/searchtipspop.html', 'searchtips','resizable=yes,scrollbars=yes,width=508,height=508')">search&nbsp;tips</a></td>
<td style="font-family: Arial, Helvetica, sans-serif; font-size: 7.5pt;" align=right><a href="http://search.freefind.com/find.html?si=24026311&amp;pid=a">advanced&nbsp;search</a></td>
</tr>
</table></center>
<form style="margin:0px; margin-top:4px;" action="http://search.freefind.com/find.html" method="get" accept-charset="utf-8" target="_self">
<input type="hidden" name="si" value="24026311">
<input type="hidden" name="pid" value="r">
<input type="hidden" name="n" value="0">
<input type="hidden" name="_charset_" value="">
<input type="hidden" name="bcd" value="&#247;">
<input type="text" id = "tfq" class = "tftextinput2" placeholder = "Search our website" name="query" size="15"> 
<input type="submit" value="search">
</form>
</td>
</tr>
</table>
<!--/Search-->
</div><!--/.nav-collapse -->
</div>
</div> 
<!-- /.navbar -->

<!-- Header -->
<header id="head">
<div class="container">
<div class="row">
<h1 class="lead">Sauble Beach All Season Cottage Rentals</h1>
<br>
<p class="tagline">Cozy, Clean, and Convenient. Go to the beach year round!</p>
<p><a href="about.php" class="btn btn-default btn-lg" role="button">MORE INFO</a> <a <? if($user->isLoggedIn()){?>href="Reservation.php"<?}else{?>href="signin.php"<?} ?>class="btn btn-action btn-lg" role="button">BOOK NOW</a></p>
</div>
</div>
</header>
<!-- /Header -->

<!-- Intro -->
<div class="container text-center">
<br> <br>
<h2 class="thin">The most welcoming place to stay at Sauble Beach</h2>
<p class="text-muted">
When it comes to satisfying our clients, we keep in mind two key elements:<br> 
the comfort of our clients, and our most compelling prices.
</p>
</div>
<!-- /Intro-->
<br><br>
<!-- Slideshow -->
<div align = "center" id="myCarousel" class="carousel slide">
<!-- Carousel indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>

</ol>   
<!-- Carousel items -->
<div class="carousel-inner">
<div align = "center" class="item active">
<img src="Slideshow/Images/Image1.jpg" alt="First slide">
<div class="carousel-caption">You will have a great time here!</div>
</div>
<div align = "center" class="item">
<img src="Slideshow/Images/Image2.jpg" alt="Second slide">
<div class="carousel-caption">Enjoy your time here at Sauble Beach!</div>
</div>
<div align = "center" class="item">
<img src="Slideshow/Images/Image3.jpg" alt="Third slide">
<div class="carousel-caption">Get a great view of nature!</div>
</div>
<div align = "center" class="item">
<img src="Slideshow/Images/Image4.jpg" alt="Third slide">
<div class="carousel-caption">This is absolutely splendid!</div>
</div>
</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel" 
data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel" 
data-slide="next">&rsaquo;</a>
</div> 
<!--/Slideshow-->
<!-- Highlights - jumbotron -->
<div class="jumbotron top-space">
<div class="container">

<h3 class="text-center thin">Reasons to book with us</h3>

<div class="row">
<div class="col-md-3 col-sm-6 highlight">
<div class="h-caption"><h4><i class="fa fa-car fa-5"></i>Easy Transportation</h4></div>
<div class="h-body text-center">
<p>The cottage that you book from us is really close to some fantastic places. It will only take you a one minute drive to the beach, and a five minute drive to the downtable sauble with all the shops.</p>
</div>
</div>
<div class="col-md-3 col-sm-6 highlight">
<div class="h-caption"><h4><i class="fa fa-tree fa-5"></i>The Wild Experience</h4></div>
<div class="h-body text-center">
<p>Experience the outdoors when your cottage is really close to unique tourist attractions such as the Sauble Falls Provincial Park, Sauble Beach itself, and experience nature at its finest.</p>
</div>
</div>
<div class="col-md-3 col-sm-6 highlight">
<div class="h-caption"><h4><i class="fa fa-clock-o fa-5"></i>Scheduled Booking</h4></div>
<div class="h-body text-center">
<p>When you book a stay at our cottage, your account will keep a record of your date of stay, so that you will not forget. There is even a calendar section on our website, where you could view the available time.</p>
</div>
</div>
<div class="col-md-3 col-sm-6 highlight">
<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Great Customer Satisfaction</h4></div>
<div class="h-body text-center">
<p>Customer satisfaction is our number one priority, and we always continue to improve our services and our environment so that our customers can feel comfortable. We are willing to support you, if you have any questions.</p>
</div>
</div>
</div> <!-- /row  -->

</div>
</div>
<!-- /Highlights -->

<!--Testemonial-->
<div class="container" id="testimonials-row">		
<div class="row">
<div class="col-md-12 column">				
<h2 class="page-header">Testimonials <small>Our Clients Love Us!</small></h2>
<div class="carousel slide" id="testimonials-rotate">
<div class="carousel-inner">
<div class="item active">							
<div class="col-md-2"><img alt="" src="http://lorempixel.com/400/200"   class="img-circle img-responsive"/></div>
<div class="testimonials  col-md-10">

<h3>
Thanks Mitch and Leah for the great stay at Windermere. It was our first time at Sauble Beach and we loved it! We hope to be back! August 20th, 2011<small>Karlie and Katie</small>
</h3>

</div>

<div class="clearfix"></div>
</div>
<div class="item">						
<div class="col-md-2"><img alt="" src="http://lorempixel.com/400/200"   class="img-circle img-responsive"/></div>
<div class="testimonials  col-md-10">

<h3>
Thanks so much for letting us stay at your wonderful cottage. We hope to be back soon! July 16th 2011. <small>Zelia Inaccio</small>
</h3>

</div>

<div class="clearfix"></div>
</div>
<div class="item">
<div class="col-md-2"><img alt="" src="http://lorempixel.com/400/200"   class="img-circle img-responsive"/></div>
<div class="testimonials  col-md-10">

<h3>
Thanks again Mitch to you and Leah for making the week so amazing. The cottage was fantastic, clean and very comfortable! We will book again next year!! September 2nd, 2011 <small>Shaun Knowles</small>
</h3>

</div>

<div class="clearfix"></div>
</div>
</div> 					
</div>
<div class="pull-right">
<a class="left" href="#testimonials-rotate" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> 
<a class="right" href="#testimonials-rotate" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a><div class="clearfix"></div>					
</div>
</div>
</div>
</div><!--end of container-->
<div class="clearfix"></div>
<!--/Testimonial-->


<!-- container -->
<div class="container">

<h2 class="text-center top-space">Frequently Asked Questions</h2>
<br>

<div class="row">
<div class="col-sm-6">
<h3>Where do I get the keys and directions to the cottage</h3>
<p>You would receive a message from the administrators on how you will be retrieving your keys and direction.</p>
</div>
<div class="col-sm-6">
<h3>How do I reserve a cottage?</h3>
<p>You can reserve a cottage by clicking on this <a href="Reservation.php">link</a>, once you are signed in. If you are not, then you can <a href="signin.php">sign in here</a>.</p>
</div>
</div> <!-- /row -->

<div class="row">
<div class="col-sm-6">
<h3>What do we have to bring to the cottage?</h3>
<p>You have to bring in your receipt or a screenshot of your booking that you had purchased on Paypal.</p>
</div>
<div class="col-sm-6">
<h3>Can we bring pets to the cottage?</h3>
<p>No, you cannot.</p>
</div>
</div> <!-- /row -->

</div>	<!-- /container -->

<!-- Social links. @TODO: replace by link/instructions in template -->
<section id="social">
<div class="container">
<div class="wrapper clearfix">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_linkedin_counter"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
</div>
<!-- AddThis Button END -->
</div>
</div>
</section>
<!-- /social links -->




<!--Bottom-->
<footer id="footer">

<div class="footer1">
<div class="container">
<div class="row">

<div class="col-md-3 widget">
<h3 class="widget-title">Contact</h3>
<div class="widget-body">
<p>289.799.0740<br> 
<a href="mailto:#">mitchgrant@hotmail.com</a><br>
<br>
1228 
Sauble Falls Road 
Sauble Beach Ontario Canada
</p>    
</div>
</div>

<div class="col-md-3 widget">
<h3 class="widget-title">Follow me</h3>
<div class="widget-body">
<p class="follow-me-icons clearfix">
<a href=""><i class="fa fa-twitter fa-2"></i></a>
<a href=""><i class="fa fa-dribbble fa-2"></i></a>
<a href=""><i class="fa fa-github fa-2"></i></a>
<a href=""><i class="fa fa-facebook fa-2"></i></a>
</p>    
</div>
</div>

</div> <!-- /row of widgets -->
</div>
</div>

<div class="footer2">
<div class="container">
<div class="row">

<div class="col-md-6 widget">
<div class="widget-body">
<p class="simplenav">
<a href="#">Home</a> | 
<a href="about.html">About</a> |
<a href="sidebar-right.html">Sidebar</a> |
<a href="contact.html">Contact</a> |
<b><a href="signup.html">Sign up</a></b>
</p>
</div>
</div>

<div class="col-md-6 widget">
<div class="widget-body">
<p class="text-right">
Copyright &copy; 2014, FarGames. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
</p>
</div>
</div>

</div> <!-- /row of widgets -->
</div>
</div>
</footer>   
<!--/Bottom-->








<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>