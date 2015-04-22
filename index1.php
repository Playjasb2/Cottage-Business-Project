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
<li class="active"><a href="index.php">Home</a></li>
<li><a href="about.php">Gallery</a></li>
<li><a href="about.php">Calendar</a></li>
<li><a href="about.php">Location and Directions</a></li>
<li><a href="about.php">Testimonials</a></li>
<li><a href="news.php">Rate</a></li>
<li><a href="about.php">Beach</a></li>
<li><a href="about.php">Reservation</a></li>
<li><a href="contact.html">Contact</a></li>
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
<!-- Slideshow -->
<div align = "center" id="myCarousel" class="carousel slide">
<!-- Carousel indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
</ol>   
<!-- Carousel items -->
<div class="carousel-inner">
<div align = "center" class="item active">
<img src="Slideshow/Images/Image1.jpg" alt="First slide">
<div class="carousel-caption">This Caption 1</div>
</div>
<div align = "center" class="item">
<img src="Slideshow/Images/Image2.jpg" alt="Second slide">
<div class="carousel-caption">This Caption 2</div>
</div>
<div class="item">
<img src="Slideshow/Images/Image3.jpg" alt="Third slide">
<div class="carousel-caption">This Caption 3</div>
</div>
<div class="item">
<img src="Slideshow/Images/Image4.jpg" alt="Third slide">
<div class="carousel-caption">This Caption 3</div>
</div>
<div class="item">
<img src="Slideshow/Images/Image5.jpg" alt="Third slide">
<div class="carousel-caption">This Caption 3</div>
</div>

</div>
<!-- Carousel nav -->
<a class="carousel-control left" href="#myCarousel" 
data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#myCarousel" 
data-slide="next">&rsaquo;</a>
</div> 
<!-- /Slideshow -->

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

<!-- container -->
<div class="container">

<h2 class="text-center top-space">Frequently Asked Questions</h2>
<br>

<div class="row">
<div class="col-sm-6">
<h3>Where do I get the keys and directions to the cottage</h3>
<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
</div>
<div class="col-sm-6">
<h3>How do I reserve a cottage?</h3>
<p>
Well, there are thousands of stock art galleries, but personally, 
I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a> 
and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
</div>
</div> <!-- /row -->

<div class="row">
<div class="col-sm-6">
<h3>What do we have to bring to the cottage?</h3>
<p>
Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>, 
which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work. 
</p>
</div>
<div class="col-sm-6">
<h3>Can we bring pets to the cottage?</h3>
<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
</div>
</div> <!-- /row -->

<div class="jumbotron top-space">
<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
</div>

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


<footer id="footer" class="top-space">

<div class="footer1">
<div class="container">
<div class="row">

<div class="col-md-3 widget">
<h3 class="widget-title">Contact</h3>
<div class="widget-body">
<p>+234 23 9873237<br>
<a href="mailto:#">some.email@somewhere.com</a><br>
<br>
234 Hidden Pond Road, Ashland City, TN 37015
</p>	
</div>
</div>

<div class="col-md-3 widget">
<h3 class="widget-title">Follow me</h3>
<div class="widget-body">
<p class="follow-me-icons">
<a href=""><i class="fa fa-twitter fa-2"></i></a>
<a href=""><i class="fa fa-dribbble fa-2"></i></a>
<a href=""><i class="fa fa-github fa-2"></i></a>
<a href=""><i class="fa fa-facebook fa-2"></i></a>
</p>	
</div>
</div>

<div class="col-md-6 widget">
<h3 class="widget-title">Text widget</h3>
<div class="widget-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
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
Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
</p>
</div>
</div>

</div> <!-- /row of widgets -->
</div>
</div>

</footer>	





<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/headroom.min.js"></script>
<script src="assets/js/jQuery.headroom.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>