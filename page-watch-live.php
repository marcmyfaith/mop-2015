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
				<div id="video-holder" class="col-md-7">
					<iframe width="100%" height="500" src="http://www.ustream.tv/embed/7223948?v=3&amp;wmode=direct" scrolling="no" frameborder="0" style="border: 0px none transparent;">    </iframe>
				</div>
				<div id="content-area" class="col-md-4 col-md-offset-1">
					<h3>Broadcasting live every Sunday, Tuesday &amp; Thursday</h3>
					<p>We believe that our most valuable asset is the Word of God. Join us from anywhere in the world for a relevant and life changing word at one of the following times:</p>
					<ul>
						<li>Sundays @ 9AM EST</li>
						<li>Tuesdays @ 7PM EST - Bible Study</li>
						<li>Thursdays @ 6:30PM EST - Mid Week Service</li>
					</ul>
					<p><a class="btn btn-default" href="<?php echo home_url('sermons'); ?>">Sermons Archive</a></p>
				</div>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>