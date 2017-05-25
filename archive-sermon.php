<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php get_template_part( 'views/navigation' ); ?>
		<div id="hero-sermon-series" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h5>Current Sermon Series</h5>
				<h3>Kingdom Mindset</h3>
				<p>Dr. Williams is teaching a life changing word about "Kingdom Mindset".</p>
				<p>Visit us this Sunday to experience this word for yourself.</p>
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
			</div>
		</div>
		<!-- <div id="hero-testify" class="hero container-fluid">
			<div class="row text-center">
				<a class="btn btn-default">More Sermons</a>
			</div>
		</div> -->
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
