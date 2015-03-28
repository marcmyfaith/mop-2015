<?php
/** Template Name: Our Story **/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body class="light">
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
		<div id="standard" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h3><?php the_title(); ?></h3>
			</div>
		</div>
		<div class="hero container-fluid content">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p><?php echo the_content(); ?></p>
				<?php endwhile; else : ?>
					
				<?php endif; ?>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
