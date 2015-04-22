<?php
require_once 'Gallery_Class.php';
$gallery = new Gallery();
$gallery->setPath('Gallery_Pictures/');
$images = $gallery->getImages();
ob_start();
require_once 'core/init.php';
$user = new User();

if(!$user->isLoggedIn())
{
	Redirect::to('signin.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<title>A date range picker for Bootstrap</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="daterangepicker-bs3.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="moment.js"></script>
<script type="text/javascript" src="daterangepicker.js"></script>
<meta charset="utf-8">
<meta name="viewport"    content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

<title>Reservation</title>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="daterangepicker-bs3.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="moment.js"></script>
<script type="text/javascript" src="daterangepicker.js"></script>
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
'date' => array(
'required' => true,
),
'adults' => array(
'required' => true,
),
'kids' => array(
),
'pets' => array(
)
));

if($validation->passed())
{

$date = Input::get('date');
$adults = Input::get('adults');
$kids = Input::get('kids');
$pets = Input::get('pets');

Session::put('Form_Passed', true);
Session::put('reserv_date',$date);
Session::put('reserv_adults',$adults);
Session::put('reserv_kids',$kids);
Session::put('reserv_pets',$pets);
Redirect::to('Reservation_1.php');
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





<!-- Start -->
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

<!-- Slideshow -->

<!--/Slideshow-->

<!--Date-->
<div class="container">

<form action="Reservation.php" method="post" class="form-horizontal">
<fieldset>
<header class="page-header">
<h1 style = "font-size: 30px;" align = "left" class="page-title">The RiverHouse (3+ bedroom) </h1>
</header>
</fieldset>
<br><br><br><br>

<fieldset style = "padding-left: 630px;">
<div class="control-group">
<div class="controls">
<div class="input-prepend input-group">
<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
<input type="text" name = "date" style="width: 400px" name="reservation" id="reservationtime" value = "Choose your check-in and check-out times:"class="form-control"   class="span4"/>
</div>
</div>
</div>
</fieldset>

<fieldset style = "padding-left: 615px;">
<div class="col-sm-4">
<input style = "width: 438px;" name="adults" class="form-control" type="text" placeholder="Adults per room (number)">
</div>
</fieldset>

<fieldset style = "padding-left: 615px;">
<div class="col-sm-4">
<input style = "width: 438px;" name="kids" class="form-control" type="text" placeholder="Kids per room (number)">
</div>
</fieldset>

<fieldset style = "padding-left: 615px;">
<div class="col-sm-4">
<input style = "width: 438px;" name="pets" class="form-control" type="text" placeholder="Number of pets (number)">
</div>
</fieldset>

<fieldset>
<img style = "position: relative; top:-200px;"  src="Slideshow/Images/Image1.jpg" height="300px" width="400px">
</fieldset>

<fieldset style = "position: relative; top:-140px; left: 92px;" >
<div align = "left" class="row">
<div align = "left"  class="col-sm-6 text-right"> 
<input align = "left"  type = "submit" class="btn btn-action" type="Continue" value="Continue">
</div>
</div>

</fieldset>
</form>

<script type="text/javascript">
$(document).ready(function() {
$('#reservationtime').daterangepicker({
timePicker: true,
timePickerIncrement: 30,
format: 'MM/DD/YYYY h:mm A'
}, function(start, end, label) {
console.log(start.toISOString(), end.toISOString(), label);
});
});
</script>

</div>            
</div>
</div>
<!--/Date-->

<!--Bottom-->
<footer style = " width: 1300px;" id="footer">

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

<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
<script type = "text/javaScript"> $('select').selectpicker(); </script>
</body>
</html>
