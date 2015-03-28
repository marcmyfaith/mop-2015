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