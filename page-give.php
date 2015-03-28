<?php
/** Template Name: Give */
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
		<div class="hero container-fluid">
			<div class="row text-center">
				<h2>Give</h2>
				<!-- <p>To pay your tithes or offering complete the form below</p> -->
				<p>The ability to give electronically will be made available on Sunday March 28, 2015</p>
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
					<p>&copy; <?php echo date('Y'); ?> Monument of Praise<br />All Rights Reserved.</p>
				</div>
			</div>
		</div>
		<div id="location-bar" class="container-fluid">
			<div class="row text-center">
				<!-- <p><i class="fa fa-map-marker"></i> Visit one of our other locations in <a href="http://newjc.org">Greensboro, NC</a> or <a href="http://newjc.org/locations/amazing-grace-south-africa">East London, South Africa</a></p> -->
				<ul id="location-menu">
					<li><i class="fa fa-map-marker"></i></li>
					<li>Visit one of our other locations in</li>
					<li><a href="http://newjc.org">Greensboro, NC</a></li>
					<li>or</li>
					<li><a href="http://newjc.org/locations/amazing-grace-south-africa">East London, South Africa</a></li>
				</ul>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
