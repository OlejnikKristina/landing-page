<!DOCTYPE html>
<html>
<head>
	<title>notify</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header class="container-fluid">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<h1>Notify</h1><h6>.</h6><br>
				<br><br><p>A great new free psd theme to showcase</p>
				<p>your new application.</p><br>
				<a href="#"><img src="img/apple.gif"></a>
				<a href="#"><img src="img/android.png"></a>
				<a class="win" href="#"><img src="img/wind.png"></a>
			</div>
		</div>
	</header>
	<article class="container prop">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<img src="img/one.gif">
				<h1>Editable Theme</h1><br>
				<p>Lorem ipsum dolor sit amet, consectetur </p><p>adipiscing elit, Suspendisse fringilla fringilla.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<img src="img/star.gif">
				<h1>Flat Design</h1><br>
				<p>Lorem ipsum dolor sit amet, consectetur </p><p>adipiscing elit, Suspendisse fringilla fringilla.</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<img src="img/earth.gif">
				<h1>Reach Your Audience</h1><br>
				<p>Lorem ipsum dolor sit amet, consectetur</p><p> adipiscing elit, Suspendisse fringilla fringilla.</p>
			</div>
		</div>
	</article>
	<article class="container-fluid content">
			<div class="row">
				<div class="col-lg-6 col-md-6 gray">
					<h1>Get Notified Of Any Updates!</h1><br>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</p><p>do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p><p>ut aliquip ex ea commodo consequat. </p><br>
					<form action="#" method="POST" name="email" id="email">
						<input type="email" name="inem" id="inem" form="email" placeholder="Email Address">
						<input type="submit" name="notify" id="notify" form="email" value="Notify">
					</form>
				</div>
				<div class="col-lg-6 col-md-6 gray none">
					<iframe src="https://player.vimeo.com/video/108699933" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
	</article>
	<article class="container ppl">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla fringilla. Sed do eiusmod</p>
				<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco"</p>
				<h1>Jane Hunt</h1><br>
			</div>
		</div>
	</article>
	<div class="container pics">
		<div class="row">
			<div class="col-lg-12 col-md-12 hidden-xs hidden-sm">
				<?
					for ($i=1; $i<20 ; $i++) { 
					echo '<img class="pic" src="ppl/'.$i.'.jpg" />';
					};
				?>
			</div>
			<div class="hidden-lg hidden-md col-xs-12 col-sm-12">
				<?
					for ($i=1; $i<12; $i++) { 
					echo '<img class="pic" src="ppl/'.$i.'.jpg" />';
					};
					echo '<img class="pic" src="ppl/19.jpg" />';
				?>
			</div>
		</div>
	</div>
	<footer class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<h1>Say Hi & Get in Touch</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br>
				<a href="#"><img src="img/twitter.gif"></a>
				<a href="#"><img src="img/fb.gif"></a>
				<a href="#"><img src="img/pinterest.gif"></a>
				<a href="#"><img src="img/google.gif"></a>
				<a href="#"><img src="img/in.gif"></a>
				<a href="#"><img src="img/yout.gif"></a>
			</div>
		</div>
	</footer>
	<div class="last">
	<nav class="navbar navbar-default">
		<div class="container">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>	
			</button>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="pad"><a href="#">Contact</a></li>
					<li><a href="#">Download</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Email</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
		</div>
	</nav>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>﻿
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>