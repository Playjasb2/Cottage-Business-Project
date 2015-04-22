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

<title>About - Progressus Bootstrap template</title>

<link rel="shortcut icon" href="assets/images/gt_favicon.png">

<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
<!-- Custom styles for our template -->
<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
<link rel="stylesheet" href="assets/css/main.css">
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<style>

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
<li class="active"><a href="Reservation.php">Reservation</a></li>
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
<li><a href="Home.php">Home</a></li>
<li><a href="News.php">News</a></li>
<li><a href="Gallery.php">Gallery</a></li>
<li><a href="Calendar.php">Calendar</a></li>
<li><a href="Location.php">Location and Directions</a></li>
<li><a href="Testimonials.php">Testimonials</a></li>
<li><a href="about.php">Beach</a></li>
<li class="active"><a href="Reservation.php">Reservation</a></li>
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

<header id="head" class="secondary"></header>

<?php  
require_once 'core/init.php';

if(Input::exists()){
$validate = new Validate();
$validation = $validate->check($_POST, array(
'user' => array(
'required' => true,
),
'name' => array(
'required' => true,
),
'last' => array(
'required' => true,
),
'email' => array(
'required' => true,
),
'email1' => array(
'required' => true,
),
'phone' => array(
'required' => true,
),
'address' => array(
'required' => true,
),
'city' => array(
'required' => true,
),
'state' => array(
'required' => true,
),
'postal' => array(
'required' => true,
),
'country' => array(
'required' => true,
),
'message' => array(
'required' => true,
)

));

if($validation->passed())
{

$user = Input::get('user');
$name = Input::get('name');
$last = Input::get('last');
$email = Input::get('email');
$email1 = Input::get('email1');
$phone = Input::get('phone');
$address = Input::get('address');
$city = Input::get('city');
$state = Input::get('state');
$postal = Input::get('postal');
$country = Input::get('country');
$message = Input::get('message');

Session::put('Form_Passed', true);
Session::put('reserv_user',$user);
Session::put('reserv_name',$name);
Session::put('reserv_last',$last);
Session::put('reserv_email',$email);
Session::put('reserv_email1',$email1);
Session::put('reserv_phone',$phone);
Session::put('reserv_address',$address);
Session::put('reserv_city',$city);
Session::put('reserv_state',$state);
Session::put('reserv_postal',$postal);
Session::put('reserv_country',$country);
Session::put('reserv_message',$message);
Redirect::to('Reservation_2.php');
}
else
{
  foreach($validation->errors() as $error)
    {
      echo $error, '<br>';
    }
}

}
?>







<!-- container -->
<div class="container">
<div class="row">
<head>
</head>
<header class="page-header">
<h1 align = "center" class="page-title">Reservation</h1>
</header>
</div>
</div>	
<!-- /container -->
<!--Dates-->


<form action="Reservation_1.php" method="post">

<header class="page-header">
<h1 style = "font-size: 25px"; align = "center" class="page-title">Your name</h1>
</header>
<div style = "padding-left: 30px; padding-right: 30px;" class="row">
<div class="col-sm-4">
<input name="user" class="form-control" type="text" placeholder="Mr./Mrs./Miss">
</div>
<div class="col-sm-4">
<input name="name" class="form-control" type="text" placeholder="First Name">
</div>
<div class="col-sm-4">
<input name = "last" class="form-control" type="text" placeholder="Last Name">
</div>
</div>
<br>

<header class="page-header">
<h1 style = "font-size: 25px"; align = "center" class="page-title">Your contact details</h1>
</header>
<div style = "padding-left: 30px; padding-right: 30px;" class="row">
<div class="col-sm-4">
<input name="email" class="form-control" type="text" placeholder="Email address">
</div>
<div class="col-sm-4">
<input name="email1" class="form-control" type="text" placeholder="Email address confirmation">
</div>
<div class="col-sm-4">
<input name = "phone" class="form-control" type="text" placeholder="Telephone number">
</div>
</div>
<br>

<header class="page-header">
<h1 style = "font-size: 25px"; align = "center" class="page-title">Your address</h1>
</header>
<div style = "padding-left: 30px; padding-right: 30px;" class="row">

<div class="col-sm-4">
<input name="address" class="form-control" type="text" placeholder="Address">
</div>
<div class="col-sm-4">
<input name = "city" class="form-control" type="text" placeholder="City">
</div>
<div class="col-sm-4">
<input name = "state" class="form-control" type="text" placeholder="State/Province">
</div>
<br>
<div class="col-sm-4">
<input name = "postal" class="form-control" type="text" placeholder="ZIP/Postal">
</div>
<div class="col-sm-4">
<input name = "country" class="form-control" type="text" placeholder="Country">
</div>
</div>
<br> 

<header class="page-header">
<h1 style = "font-size: 25px"; align = "center" class="page-title">Any special requests ?</h1>
</header>

<div style = "padding-left: 30px; padding-right: 30px;" class="row-sm-4">
<textarea name = "message" placeholder="Type your message here..." class="form-control" rows="6"></textarea>
</div>
<br><br><br>

<div class="row">
<div style = "padding-left: 30px; padding-right: 30px;" class="col-sm-6 text-right"> 
<input style = "padding-left: 30px; padding-right: 30px;" class="btn btn-action" type="submit" value="Continue">
</div>
</div>
</form> 	
<br><br>







<!--/Dates-->
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