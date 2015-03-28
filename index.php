<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body class="light">
		<?php get_template_part( 'views/navigation' ); ?>
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
