<?php
/*
Template Name: Watch Live
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="navigation">
			<div class="row">
				<h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/monument-logo-white.png" /></a></h1>
				<ul id="location-menu" class="nav nav-pills pull-right">
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
					<li role="presentation"><a href="#" class="open-menu">Menu <i class="fa fa-bars"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="hero-watch-live" class="hero container-fluid">
			<div class="row">
				<div id="video-holder" class="col-md-8">
					<iframe width="720" height="437" src="http://www.ustream.tv/embed/7223948?v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
<br /><a href="http://www.ustream.tv" style="font-size: 12px; line-height: 20px; font-weight: normal; text-align: left;" target="_blank">Broadcast live streaming video on Ustream</a>
				</div>
				<div class="col-md-4">
					<a href="#" class="btn btn-default">Share The Word</a>
				</div>
			</div>
		</div>
		<div id="footer" class="hero container-fluid">
			<div class="row">
				<div class="col-md-3">
					<h3>Service Times</h3>
					<ul>
						<li>Sunday 9AM</li>
						<li>Tuesday 7PM</li>
						<li>Thursday 6:30PM</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>Address</h3>
					<p>321 Oakview Rd.<br />High Point, NC 27265</p>
				</div>
				<div class="col-md-3">
					<h3>Contact Info</h3>
					<ul>
						<li>info@monumentofpraise.org</li>
						<li>(336) 887-5673</li>
					</ul>
				</div>
				<div class="col-md-3">
					<h3>&nbsp;</h3>
					<p>&copy; <?php echo date('Y'); ?> Monument of Praise<br />All Rights Reserved.</p>
					<p>Produced by BattleBranding</p>
				</div>
			</div>
		</div>
		<div id="location-bar" class="container-fluid">
			<div class="row text-center">
				<ul id="location-menu">
					<li>Visit one of our other locations</li>
					<li><i class="fa fa-map-marker"></i></li>
					<li><a href="http://newjc.org">Greensboro, NC</a></li>
					<li>|</li>
					<li><a href="#">High Point, NC</a></li>
					<li>|</li>
					<li><a href="http://newjc.org/locations/amazing-grace-south-africa">London, South Africa</a></li>
				</ul>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>