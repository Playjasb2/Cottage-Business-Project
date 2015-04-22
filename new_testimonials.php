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
#Testimony{
	font-size: 25px;
}
#table{
	background: rgba(247,245,244);
}
</style>
<body>
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
<li class="active"><a href="index.php">Home</a></li>
<li><a href="about.php">Gallery</a></li>
<li><a href="about.php">Calendar</a></li>
<li><a href="about.php">Location and Directions</a></li>
<li><a href="about.php">Testimonials</a></li>
<li><a href="news.php">Rate</a></li>
<li><a href="about.php">Beach</a></li>
<li><a href="about.php">Reservation</a></li>
<li><a href="contact.php">Contact</a></li>
<?
if($user->isLoggedIn())
{
?>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="profile.php?user=<?php echo escape($user->data()->username); ?>">My Profile</a></li>
</ul>
</li>
<li><a class="btn" href="signout.php">SIGN OUT</a></li>
<?
}
else
{
?>
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
<link rel="stylesheet" href="gallery.css">
</head>

<header class="page-header">
<h1 align = "center" class="page-title">Testimonials</h1>
</header>

<!--Displays Testimony -->
<?php
$myFile = "Testimonials.txt";
if(Input::exists())
{
if(Token::check(Input::get('token')))
{
$validate = new Validate();
$validation = $validate->check($_POST, array(
'testimonial_name' => array('required' => true),
'testimonial_author' => array('required' => true),
'testimonial_body' => array('required' => true)
));
if($validation->passed())
{
$t_name = Input::get('testimonial_name');
$t_author = Input::get('testimonial_author');
$t_body = Input::get('testimonial_body');
$fh = fopen($myFile, 'a+');
fwrite($fh, $t_name . "\n" . "By: " . $t_author . "\n" . $t_body . "\n\n" );
fclose($fh);
}
else
{
foreach($validation->errors() as $error)
{
echo $error, '<br>';
}
}
}
}
$Reviews = file($myFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$count = count($Reviews);
$x = 0;
?>
<ol class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li class="active">News</li>
</ol>
<?
while($x<$count)
{
?>

<header id = "table" class="page-header">

<table class="Review">
<tr>
<td class="Review_Name">
<p><? echo($Reviews[$x] . "<br/>"); $x++; ?></p>
</td>
</tr>
<tr>
<td class="Review_Author">
<p><? echo($Reviews[$x] . "<br/>"); $x++; ?></p>
</td>
</tr>
<tr>
<td class="Review_Body">
<p><? echo($Reviews[$x] . "<br/>"); $x++; ?></p>
</td>
</tr>
</table>
</header>
<br>
<?
}
?>
<!--/Displays Testimony-->

<!--Write Testimony-->
<h1 id = "Testimony"> Write A Testimony </h1>
<form action="new_testimonial.php" method="post">
<div class="row">
<div class="col-sm-4">
<input name="testimonial_name" class="form-control" type="text" placeholder="Title:">
</div>
<div class="col-sm-4">
<input name="testimonial_author" class="form-control" type="text" placeholder="By:">
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
<textarea name = "testimonial_body" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-6 text-right">
<input type = "hidden" name = "token" value="<?php echo Token::generate(); ?>"/>
<input align = "center" class="btn btn-action" type="submit" value="Send Testimony">
</div>
</div>
</form>
<br> <br>

<!--/Write Testimony-->










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