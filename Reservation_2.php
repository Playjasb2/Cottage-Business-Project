<?php
require_once 'Gallery_Class.php';
$gallery = new Gallery();
$gallery->setPath('Gallery_Pictures/');
$images = $gallery->getImages();
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

<!--Text-->
<div style = "position: relative; top: -50px;"align = "center" class="jumbotron top-space">
<header class="page-header">
<h1 style = "font-size: 30px;" align = "center" class="page-title">Rental Reservation Confirmation</h1>
</header>
<div class="container">
<?
$date = Session::get('reserv_date', $date);
$user = Session::get('reserv_user',$user);
$name = Session::get('reserv_name',$name);
$last = Session::get('reserv_last',$last);
$email = Session::get('reserv_email',$email);
$phone = Session::get('reserv_phone',$phone);
$address = Session::get('reserv_address',$address);
$city = Session::get('reserv_city',$city);
$state = Session::get('reserv_state',$state);
$postal = Session::get('reserv_postal',$postal);
$country = Session::get('reserv_country',$country);
$message = Session::get('reserv_message',$message);

Session::get('Form_Passed', true);
echo '<br>';
echo "Your date is: ".$date;
echo '<br>';
echo "You are: $user $name $last";
echo '<br>';
echo 'Your email address is: '.$email;
echo '<br>';
echo 'Your phone number is: '.$phone;
echo '<br>';
echo "Your address is: $address $city $state $postal $country";
echo '<br>';
echo 'Your message is: '.$message;

$date1 = " ";
$date2 = " ";
for ($i = 0; $i < 2; $i++){
	$date1 = $date1.$date[$i];
}

for ($b = 3; $b < 5; $b++){
$date2 = $date2.$date[$b];
}


?>
</div>
</div>
<!--/Text-->



<!--Checkout-->

<?if ($date1 >= 06 && $date1 <= 08 && $date2 >= 15 && $date2 <= 33 || $date <= 10){
?>
<div style = "position:relative; top: -80px;" align = "center" class="jumbotron top-space">
<header class="page-header">
<h1 style = "font-size: 30px;" align = "center" class="page-title">Rental Reservation (Payout or Inquiry)</h1>
</header>
<div id = "button">
<p id = "text-1">June 15th - September 10th $ 2200.00 per week (inclusive)</p>
<script src="https://www.paypalobjects.com/js/external/paypal-button.min.js?merchant=farzam45@gmail.com" 
data-button="buynow" 
data-name="June 15th - September 10th" 
data-amount="2200" 
data-shipping="0" 
data-callback="http://saubleshorecottages.com"
data-return="http://www.saubleshorecottages.com/Success.php"
}​;​
></script>
</div>
<div class="container">
<header class="page-header">
<h1 style = "font-size: 25px;" align = "center" class="page-title">Inquiry</h1>
</header>
<form method="post" action="new_reservation1.php">
<input name = "go" style = "padding-left: 30px; padding-right: 30px;" class="btn btn-action" type="submit" onclick = "onrequest();" value="Send Information">
</form>
</div>
</div>

<?}
else{?>
<div style = "position:relative; top: -80px;" align = "center" class="jumbotron top-space">
<header class="page-header">
<h1 style = "font-size: 30px;" align = "center" class="page-title">Rental Reservation (Payout or Inquiry)</h1>
</header>
<header class="page-header">
<h1 style = "font-size: 25px;" align = "center" class="page-title">Payout</h1>
</header>
<div id = "button">
<p id = "text-1">September 10th to June 15th $1600.00 per week (inclusive)</p>
<script src="https://www.paypalobjects.com/js/external/paypal-button.min.js?merchant=farzam45@gmail.com" 
data-button="buynow" 
data-name="September 10th to June 15th" 
data-amount="1600" 
data-shipping="0" 
data-callback="http://saubleshorecottages.com"
data-return="http://www.saubleshorecottages.com/Success.php"
}​;​
></script>
</div>
<div class="container">
<header class="page-header">
<h1 style = "font-size: 25px;" align = "center" class="page-title">Inquiry</h1>
</header>
<form method="post" action="new_reservation1.php">
<input name = "go" style = "padding-left: 30px; padding-right: 30px;" class="btn btn-action" type="submit" onclick = "onrequest();" value="Send Information">
</form>
<?
if(isset($_POST['go'])){
	$to = "farzam45@gmail.com";
    $subject = "Reservation";
    $headers = "From: account_activator@saubleshorecottages.com";
    $body = "Date: $date\n Name: $user $name $last\n Email: $email\n Phone: $phone\n Address: $address, $city, $state, $postal, $country\n Message: $message";
    Redirect::to('success.php');

    if(!mail($to,$subject,$body,$headers))
{
    echo "We couldn't sign you up at this time. Please try again later.";
}

}
?>


</div>
</div>

<?}?>
<!--/Checkout-->

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