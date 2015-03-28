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
				<h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/monument-logo-white.png" width="194" height="80" /></a></h1>
				<ul id="location-menu" class="nav nav-pills pull-right">
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
					<li role="presentation"><a href="#" class="open-menu">Menu <i class="fa fa-bars"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="hero-give" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h3>Give</h3>
				<p>Monument of Praise Ministries has purchased 25 acres of land—the first step in the fulfillment of the vision to establish ministries capable of meeting the spiritual, emotional, and physical needs of a hurting community, and of establishing a legacy of praise and worship to honor the Lord, and His commitment to His people.</p>
				<!-- <p>To pay your tithes or offering complete the form below</p> -->
				<p>We thank you for your desire to give and support the work we're doing in High Point, NC. The ability to give online will be made available on <strong>Easter Sunday April 5, 2015</strong>.</p>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
