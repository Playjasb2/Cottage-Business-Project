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
	
	<title>What to do at Sauble Beach</title>

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
<li class="active"><a href="Beach.php">Beach</a></li>
<li><a href="Contact.php">Contact</a></li>
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
<li class="active"><a href="Beach.php">Beach</a></li>
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

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 align = "center" class="page-title">What to do at Sauble Beach</h1>
				</header>
				<p>Our cottages are within walking distance of the beach (3 blocks) , the river ( 1 block), grocery shopping  with firewood, riverfront patio at the Kit Wat, kayak, canoe, fishing boat and jetski rentals at Sauble River Marina. A short drive has you in shopping or enjoying an ice cream in downtown Sauble Beach! There is also the new Medical Centre, Sauble Amusements, golfing, stock car racing and enjoying the waterfall at Sauble Falls, all just a short drive away.</p>
				<p>Sauble Beach is often rated as the best sunset in Canada and second best on the planet! Sauble Beach was recently named the best freshwater beach in Canada by <a href="http://www.50plus.com/Travel/BrowseAllArticles/index.cfm?documentID=19037">Readers Digest</a>. Sauble Beach offers many activities year round for your enjoyment. Enjoy the beach, swim, fish, golf, windsurf, kiteboard, skimboard, jetski, water trampoline, hiking, canoeing and kayaking. It is all available at Sauble Beach!</p>
				<p>During the winter many people enjoy snowmobiling, cross country skiing or winter hiking on the many trails.</p>
				<p> There are weekly events orgainzed by the Sauble Beach Chamber of Commerce which include free family movies on the beach, classic car shows, Sandfest with live bands and beverage gardens, Canada Day on the beach, Kite Jam and much more. These events are free to attend and put you in the midst of some of the best entertainment in Ontario! Please visit the 24 Weeks of Summer for a complete listing on their <a href="http://saublebeach.com/">website</a>.</p>

				<blockquote>Staying at our cottage at Sauble Beach will truely bring the outside and home experience altogether. Our customer support is amazing, and we provide ground breaking deals that will surely satisfy our devoted customers.</blockquote>
				<p>A wonderful day trip is up the Bruce Penninsula to Tobermory or to swim at the Grotto. Tobermory is approximately 1.5 hours and is a very pleasant drive.</p>

				<h3>Activities that you can do in a week at Sauble Beach</h3>
				<ul>
					<li>Enjoy the beach culture on our 11 km sand beach</li>
					<li>Play golf at 1 of out first rate <a href="http://www.saublebeach.com/land.php">golf courses</a></li>
					<li>Rent a boat and find you own <a href="http://www.saublebeach.com/water.php">fishing holes on Lake Huron or Georgian Bay</a></li>
					<li>Visit Wiarton Willie in Wiarton - only 20 minute drive away</li>
					<li>Hike the famous <a href="http://www.pbtc.ca/">Bruce Trail</a> - 20 minutes drive from Sauble Beach</li>
					<li>Explore a Unesco World Biosphere</li>
					<li>Wander a <a href="http://www.ruralgardens.ca/">rural garden</a> - there are several near Sauble Beach</li>
					<li>Explore the unique flora and fauna of the <a href="http://www.brucecountytrails.com/trail.php?Trail=19">Oliphant Fen</a></li>
					<li>Shop at the <a href="http://www.southamptonmarket.com/">Southampton Market</a></li>
					<li>Discover one of several <a href="http://www.brucecoastlighthouses.com/">Bruce County Lighthouses</a></li>
					<li>Spelunk in <a href="http://greigscaves.com/">Greig's</a> or Bruce Caves</li>
					<li>Hike in <a href="http://www.pc.gc.ca/eng/pn-np/on/bruce/index.aspx">Bruce Peninsula National Park</a> and visit the Grotto</li>
					<li>Tour the historic fishing village of <a href="http://tobermory.com/">Tobermory</a></li>
					<li>Dive in <a href="http://www.pc.gc.ca/eng/amnc-nmca/on/fathomfive/index.aspx">Fathom Five National Marine Park</a></li>
					<li>Drive <a href="http://www.visitgrey.ca/travel-experiences/waterfalls-and-waterways/waterfall-tour/">Grey County's Waterfall Tour</a></li>
					<li>Visit the <a href="http://www.keadylivestock.com/">Keady Market</a> on Tuesday mornings</li>
				</ul>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Sauble Beach Activities</h4>
						<p>Hopefully, these photos here will show how fun or interesting it is to take part in amazing activities at Sauble Beach.</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>ATV Club</h4>
						<p><img src="activity.png" alt="Cottage Picture"></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Biking</h4>
						<p><img src="Biking.png" alt="Biking Picture"></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>The Beach</h4>
						<p><img src="Beach.jpeg" alt="Beach Picture"></p>
					</div>
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
</body>
</html>