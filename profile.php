<?php
	ob_start();
	require_once 'core/init.php';
	$user = new User();

	if(!$user->isLoggedIn())
	{
		Redirect::to('signin.php');
	}
	if(!empty($_FILES['file']))
	{
		foreach($_FILES['file']['name'] as $key => $name)
		{
			if($_FILES['file']['error'][$key] == 0 && move_uploaded_file($_FILES['file']['tmp_name'][$key], "Gallery_Pictures/{$name}"))
			{
				copy("Gallery_Pictures/{$name}", "Gallery_Pictures/Thumbnail_Images/{$name}");
				$width = 256;
				$height = 192;
				$image = "Gallery_Pictures/Thumbnail_Images/{$name}";
				if(exif_imagetype($image) == IMAGETYPE_JPEG)
				{
					$image_orig = imagecreatefromjpeg($image);
					$photoX = imagesx($image_orig);
					$photoY = imagesy($image_orig);
					$image_fin = imagecreatetruecolor($width, $height);
					imagecopyresampled($image_fin, $image_orig, 0, 0, 0, 0, $width, $height, $photoX, $photoY);
					imagejpeg($image_fin, $image);
					imagedestroy($image_orig);
					imagedestroy($image_fin);
					$uploaded[] = $name;
				}
				else if(exif_imagetype($image) == IMAGETYPE_PNG)
				{
					$image_orig = imagecreatefrompng($image);
					$photoX = imagesx($image_orig);
					$photoY = imagesy($image_orig);
					$image_fin = imagecreatetruecolor($width, $height);
					imagecopyresampled($image_fin, $image_orig, 0, 0, 0, 0, $width, $height, $photoX, $photoY);
					imagepng($image_fin, $image);
					imagedestroy($image_orig);
					imagedestroy($image_fin);
					$uploaded[] = $name;
				}
			}
		}
		if(!empty($_POST['ajax']))
		{
			die(json_encode($uploaded));
		}
	}

	$myFile = "News.txt";

	if(Input::exists())
	{
		if(Token::check(Input::get('token')))
		{
			$validate = new Validate();
			$validation = $validate->check($_POST, array(
				'news_title' => array('required' => true),
				'news_author' => array('required' => true),
				'news_body' => array('required' => true)
			));
			if($validation->passed())
			{
				$n_name = Input::get('news_title');
				$n_author = Input::get('news_author');
				$n_body = Input::get('news_body');
				$fh = fopen($myFile, 'a+');
				fwrite($fh, $n_name . "\n" . "By: " . $n_author . "\n" . $n_body . "\n\n" );
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title align = "center" ><? echo($user->data()->username); ?>'s Profile</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	<script type="text/javascript" src="upload.js"></script>
	<style type="text/css">
		#upload_progress{ display:none; }
	</style>
	
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
<li><a href="Beach.php">Beach</a></li>
<li><a href="Contact.php">Contact</a></li>
<li><a href="Rates.php">Rates</a></li>

</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="active"><a href="profile.php?user=<?php echo escape($user->data()->username); ?>">My Profile</a></li>
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
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<?
	if(!$username = $_GET['user'])
    {
        Redirect::to('index.php');
    }
    else
    {   
    	if($user->data()->username == $username)
    	{
	        $user = new User($username);
	        if(!$user->exists())
	        {
	            Redirect::to('404.shtml');
	        }
	        else
	        {
	            $data = $user->data();
	        }
	    }
	    else
	    {
	    	$username = $user->data()->username;
	    	Redirect::to("profile.php?user=$username");
	    }

    }
    ?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">


		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title"><? echo $username; ?>'s Profile</h1>
				</header>
				<?php
					if($user->hasPermission('admin'))
					{
						?>
						<h3>Upload Images to Gallery</h3>
						<p>Please click on choose files to select one or multiple images that you want to upload to the gallery page. The acceptable file format are: PNG and JPEG files. Click on upload when you are ready, and the page will provide you an upload progress.</p>
						<p>Upon upload completion, the page will generate links for you to see your image in full resolution.</p>
						<div id="uploaded">
							<?
								if(!empty($uploaded))
								{
									foreach($uploaded as $name)
									{
										echo'<div><a href="Gallery_Pictures/', $name, '">', $name, '</a></div>';
									}
								}
							?>
						</div>
						<div id="upload_progress"></div>
						<div>
							<form action="" method="post" enctype="multipart/form-data">
								<div>
									<input type="file" id="file" name="file[]" multiple="multiple" /><br>
									<input type="submit" id="submit" value="Upload" />
								</div>
							</form>
						</div>
						<header class="page-header">

						</header>

						<h3>Post News</h3>
						<p>To post a news, please type in a news title, your name, and the contents of your news. Once you are done that, click the post button and your news will be posted.</p>
						<form action="" method="post">
						<div class="row">
						<div class="col-sm-4">
						<input name="news_title" class="form-control" type="text" placeholder="Title:">
						</div>
						<div class="col-sm-4">
						<input name="news_author" class="form-control" type="text" placeholder="By:">
						</div>
						</div>
						<br>
						<div class="row">
						<div class="col-sm-12">
						<textarea name = "news_body" placeholder="Type your message here..." class="form-control" rows="9"></textarea>
						<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
						</div>
						</div>
						<br>
						<div class="row">
						<div class="row">
						<div class="col-lg-8"></div>
						<div class="col-lg-4 text-right">
							<button class="btn btn-action" type="submit">Post</button>
						</div>
						</div>
						</div>
						</form>


						<?

					}

				?>
				
				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	

<br><br><br>
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