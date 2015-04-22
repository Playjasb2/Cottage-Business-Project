<!DOCTYPE html>
<?php
ob_start();
require_once 'core/init.php';
$user = new User();
?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport"    content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

<title>Location and Direction</title>

<link rel="shortcut icon" href="assets/images/gt_favicon.png">

<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

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
#text{
    font-size: 20px;
    font-weight: bold;
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
<li><a href="Home.php">Home</a></li>
<li><a href="News.php">News</a></li>
<li><a href="Gallery.php">Gallery</a></li>
<li><a href="Calendar.php">Calendar</a></li>
<li class="active"><a href="Location.php">Location and Directions</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Info <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="beach.php">Beach</a></li>
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
<li><a href="Home.php">Home</a></li>
<li><a href="News.php">News</a></li>
<li><a href="Gallery.php">Gallery</a></li>
<li><a href="Calendar.php">Calendar</a></li>
<li class="active"><a href="Location.php">Location and Directions</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li><a href="beach.php">Beach</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li><a href="Contact.php">Contact</a></li>
<li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
<?
}
?>
</ul>

</div><!--/.nav-collapse -->
</div>
</div> 
<!-- /.navbar -->

<!--Top Image -->
<header id="head" class="secondary"></header>
<!--/Top Image-->

<br><br>
<header class="page-header">
<h1 align = "center" class="page-title">Location and Direction</h1>
</header>

<section align = "center" class="container-full top-space">
<div align = "center" id="map"></div>
</section>

<br><br>
<div style = "position:relative; top: -80px;" align = "center" class="jumbotron top-space">
<header class="page-header">
<h1 style = "font-size: 22px; font-weight: bold" align = "center" class="page-title">Location</h1>
</header>
<p>We are located on the north side of Sauble Beach, close to the beach and the river. We are Less then a 10 minute walk to the beach and the world famous sunsets and we are three minutes to the Sauble River Marina and the Kit Wat Motel. The Kit Wat has the only riverside patio in sauble Beach and is a favorite of locals and tourists! Sauble Falls is close by, and a 5 minute drive has you shopping or eating ice cream in downtown Sauble Beach
<br>
 From just west of Owen Sound (Springmount)
<br>
<header class="page-header">
<h1 style = "font-size: 22px; font-weight: bold" align = "center" class="page-title">Directions</h1>
</header>
Take ON-6 N (signs for Shallow Lake/Wiarton)   follow for 14.6 km
<br>
 Continue onto Queen St W/County Road 8 (signs for Sauble Beach)
<br>
Continue to follow County Road 8   for 9.5 km
<br>
 Continue onto Main St  and follow straight to Lake Huron
<br>
 Turn right at Lakeshore Blvd N   and follow for 3.5 km
<br>
Turn right at Sauble Falls Rd  (the Kit Wat Motel)   follow for  500 m
<br>
Turn left at stop sign and stay on Sauble Falls Rd
<br>
1228 Sauble Falls Rd. will be on the left  approx. 230 m
<br>
<header class="page-header">
<h1 style = "font-size: 22px; font-weight: bold" align = "center" class="page-title">Address</h1>
</header>
1228 
<br>
Sauble Falls Road <br>
Sauble Beach Ontario Canada<br>
</p>
<div class="container">
</div>
</div>


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

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
<script src="assets/js/google-map.js"></script>


</body>
</html>