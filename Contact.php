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

<title>Contact us - Progressus Bootstrap template</title>

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
<li><a href="Location.php">Location and Directions</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Info <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="Beach.php">Beach</a></li>
<li class="active"><a href="Contact.php">Contact</a></li>
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
<li><a href="Location.php">Location and Directions</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li><a href="Beach.php">Beach</a></li>
<li><a href="Reservation.php">Reservation</a></li>
<li class="active"><a href="Contact.php">Contact</a></li>
<li><a class="btn" href="signin.php">SIGN IN / SIGN UP</a></li>
<?
}
?>
</ul>

</div><!--/.nav-collapse -->
</div>
</div> 
<!-- /.navbar -->

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">


<div class="row">

<!-- Article main content -->
<article class="col-sm-9 maincontent">
<header class="page-header">
<h1 align = "center" class="page-title">Contact us</h1>
</header>

<p>
We’d love to hear from you. If you have any questions or comments, Fill out the form below with some info and we will get back to you as soon as we can. Please allow a couple days for us to respond.
</p>
<br>

<form action="contact.php" method="post">
<div class="row">
<div class="col-sm-4">
<input name="user" class="form-control" type="text" placeholder="Name">
</div>
<div class="col-sm-4">
<input name="email" class="form-control" type="text" placeholder="Email">
</div>
<div class="col-sm-4">
<input name = "phone" class="form-control" type="text" placeholder="Phone">
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<textarea name = "message" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-6">
<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
</div>
<div class="col-sm-6 text-right">
<input class="btn btn-action" type="submit" value="Send message">
</div>
</div>
</form>

</article>
<!-- /Article -->

<?php
if (!empty($_POST["user"])&&!empty($_POST["email"])&&!empty($_POST["phone"])&&!empty($_POST["message"]) ) {
    echo "Your message has been Sent";
    echo '<br>';
    echo "Thanks!";
    $user = $_POST['user'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];    
    $to = "farzam45@gmail.com";
    $subject = "Message";
    $headers = "From: account_activator@saubleshorecottages.com";
    $body = "Name: $user\n Email: $email\n Phone: $phone\n Message: $message";

if(!mail($to,$subject,$body,$headers))
{
    echo "We couldn't sign you up at this time. Please try again later.";
}
}
else{  
    echo "Please fill out all fields!";
}
?>


<!-- Sidebar -->
<aside class="col-sm-3 sidebar sidebar-right">

<div class="widget">
<h4>Address</h4>
<address>
1228 
Sauble Falls Road 
Sauble Beach Ontario Canada
</address>
<h4>Phone:</h4>
<address>
289.799.0740
</address>
</div>

</aside>
<!-- /Sidebar -->

</div>
</div>	<!-- /container -->





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