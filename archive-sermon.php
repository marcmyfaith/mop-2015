<?php
/*
Template Name: Sermons
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
					<li role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
					<li role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
					<li role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
					<li role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
					<li role="presentation"><a href="#">Menu <i class="fa fa-bars"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="hero-sermon-series" class="hero container-fluid">
			<div class="row text-center">
				<h5>Current Sermon Series</h5>
				<h3>Redemption</h3>
				<p>In preparation for the Easter Season, Dr. Williams imparts a life changing word about the death, burial and resurrection of our Lord and Savior, Jesus Christ.</p>
				<p>Visit us this Sunday to experience this word for yourself</p>
			</div>
		</div>
		<div id="sermon-archive" class="hero container-fluid">
			<div class="row">
				<div class="col-md-8">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6">
							<a class="sermon-preview" href="<?php echo get_permalink(); ?>">
								<div class="background" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>);"></div>
								<div class="content">
									<h3><?php the_title(); ?></h3>
									<span class="preacher"><?php echo get_post_meta( get_the_ID(), 'sermon_preacher', true ); ?></span>
								</div>
							</a>
						</div>
					<?php endwhile; else : ?>
						<p><?php _e( 'There are no sermons published at this time.' ); ?></p>
					<?php endif; ?>
				</div>
				<!-- <div class="col-md-4">
					<h2>Sermon Categories</h2>
				</div> -->
			</div>
		</div>
		<!-- <div id="hero-testify" class="hero container-fluid">
			<div class="row text-center">
				<a class="btn btn-default">More Sermons</a>
			</div>
		</div> -->
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