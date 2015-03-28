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
		<div id="hero-sermon" class="hero container-fluid" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>);">
			<div class="sermon-player-hero row text-center">
				<div id="sermon" class="jp-jplayer" data-audio-url="<?php echo get_post_meta( get_the_ID(), 'sermon_audio', true ); ?>" data-video-url="<?php echo get_post_meta( get_the_ID(), 'sermon_video', true ); ?>"></div>
				<div id="sermon-player">
					<h2><?php echo the_title(); ?></h2>
					<p><?php echo get_post_meta( get_the_ID(), 'sermon_preacher', true ); ?> | <?php echo date("l F d, Y", strtotime( get_post_meta( get_the_ID(), 'sermon_date', true ) ) ); ?></p>
					<a class="play-button">
						<span class="play"><i class="fa fa-play-circle-o"></i></span>
						<span class="pause"><i class="fa fa-pause"></i></span>
					</a>
					<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
						<div class="jp-type-single">
							<div class="jp-gui jp-interface">
								<div class="jp-progress">
									<div class="jp-seek-bar">
										<div class="jp-play-bar"></div>
									</div>
								</div>
								<div class="jp-volume-controls">
									<button class="jp-mute" role="button" tabindex="0"><i class="fa fa-volume-off"></i></button>
									<button class="jp-volume-max" role="button" tabindex="0"><i class="fa fa-volume-up"></i></button>
									<div class="jp-volume-bar">
										<div class="jp-volume-bar-value"></div>
									</div>
								</div>
								<div class="jp-time-holder">
									<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
									<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
								</div>
							</div>
							<div class="jp-no-solution">
								<span>Update Required</span>
								To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero container-fluid content">
			<div class="row text-center">
				<h4>Sermon Description</h4>
				<?php echo wpautop( get_post_meta( get_the_ID(), 'sermon_description', true ) ); ?>		
			</div>
		</div>
		<div class="hero container-fluid">
			<div class="row text-center">
				<a class="btn btn-default" href="<?php echo home_url('sermons'); ?>">Other Sermons</a>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>