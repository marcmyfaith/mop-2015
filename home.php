<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="google-site-verification" content="B4rjDdE-eCMm90BZGlQ9sBrCbXUtbXcYzFMUIsYFjS8" />
		<meta name="google-site-verification" content="DDykFjlXxiveuPD6Fif3HFPSniijhdfScOOPTgOBAt8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<img src="https://t.visto1.net/e?adv=392&ca=0&acc=62&tag=L2586" />
		<img src="https://t.visto1.net/rt?adv=392&ca=0&acc=62&tag=R2585" />
		<?php get_template_part( 'views/navigation' ); ?>
		<!-- <div id="billboard" class="container-fluid" style="padding-top: 90px; background-image: url('http://newjc.org/wp-content/themes/newjc-theme-2014/assets/img/universoul-circus-event.jpg'); background-size: cover; background-position: center; min-height: 700px;">
	         <div class="container">
	            <div class="row">
	               <div class="col-md-12 text-center" style="color: #fff;">
	                  <img src="http://newjc.org/wp-content/themes/newjc-theme-2014/assets/img/universoul-circus-logo.png" style="max-width: 300px;" />
	                  <h1 style="text-shadow: 1px 1px 1px #000;">MOP Family &amp; Friends Night at the Universoul Circus</h1>
	                  <p style="text-shadow: 1px 1px 1px #000;">Wednesday June 22nd our Pastor, Dr. Kevin Williams will be the Guest Ringmaster along with the Praise Team. You don't want to miss this family affair!</p>
	                  <p><a class="btn btn-warning btn-lg" role="button" href="http://newjc.org/product/universoul-circus-ticket/" style="background-color: #272262; border-color: #fef200; color: #fff;">Purchase Tickets</a></p>
	               </div>
	            </div>
	         </div>
	    </div> -->
		<div id="hero-video" class="hero container-fluid ">
			<?php get_template_part( 'views/sermon', 'hero' ); ?>
			<div class="overlay"></div>
			<video id="video-background" autoplay loop poster="">
				<source src="<?php echo get_template_directory_uri(); ?>/assets/video/sunday-morning.mp4" type="video/mp4">
			</video>
		</div>
		<?php echo do_shortcode('[upcoming_event]'); ?>
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/bible-picnic.jpg"></div>
		<div id="hero-sermon-series" class="hero container-fluid">
			<div class="row text-center">
				<h5>Current Sermon Series</h5>
				<h3>Kingdom Mindset</h3>
				<p>Visit us as Dr. Williams imparts a life changing word about "Kingdom Mindset", and learn how God has made you unstoppable in 2016.</p>
				<a class="btn btn-default white" href="<?php echo home_url('sermons'); ?>">Sermons</a>
			</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/steeple-top.jpg"></div>
		<div id="statement" class="hero container-fluid">
			<div class="row text-center">
				<h3>A Modern Church With Traditional Values</h3>
				<p>Serving High Point, Thomasville and Lexington, NC</p>
				<a class="btn btn-default" href="<?php echo home_url('our-beliefs'); ?>">Our Beliefs</a>
			</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="http://maps.googleapis.com/maps/api/staticmap?center=High+Point,+NC&zoom=13&scale=2&size=2000x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:red%7Clabel:1%7C321+Oakview+Rd,+High+Point,+NC+27265"></div>
		<div id="visit" class="hero container-fluid content">
			<div class="row text-center">
				<h3>9AM Every Sunday</h3>
				<p>Within a couple of hours, you’ll have received everything you need for a new week without disrupting your Sunday. Enter your address for directions to Monument of Praise.</p>
				<form class="form-inline" action="http://maps.google.com/maps" method="get" target="_blank">
					<div class="form-group">
						<input type="text" class="form-control input-lg" name="saddr" placeholder="Your Address">
					</div>
					<button class="btn btn-default">Get Directions</button>
					<input type="hidden" name="daddr" value="321 Oakview Rd, High Point, NC 27265" />
				</form>
			</div>
		</div>
		<div id="hero-testify" class="hero container-fluid">
			<div class="row text-center">
				<h3>Our Testimonies Help Each Other</h3>
				<p>If you've visited one of our services, we'd love to hear how the word has impacted your life.</p>
				<a class="btn btn-default" href="<?php echo home_url('testify'); ?>">Testify</a>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
