<div id="side-menu">
	<a class="close-menu">Close <i class="fa fa-times"></i></a>
	<ul>
		<li class="visible-xs" role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
		<li class="visible-xs" role="presentation"><a href="<?php echo home_url('events'); ?>">Events</a></li>
		<li class="visible-xs" role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
		<li class="visible-xs" role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
		<li class="visible-xs" role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
		<?php wp_nav_menu( array('menu' => 'Side Menu' )); ?>
	</ul>
</div>
<div id="navigation">
	<div class="row">
		<h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/monument-logo-white.png" width="194" height="80" /></a></h1>
		<ul id="location-menu" class="nav nav-pills pull-right">
			<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
			<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('events'); ?>">Events</a></li>
			<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
			<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
			<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
			<li role="presentation"><a href="#" class="open-menu">Menu <i class="fa fa-bars"></i></a></li>
		</ul>
	</div>
</div>
