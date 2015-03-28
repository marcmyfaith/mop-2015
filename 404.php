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
				<h3>Hm...we can't find that page</h3>
			</div>
		</div>
		<div class="hero container-fluid content">
			<div class="row">
				<p>We're sorry but the page you've requested cannot be found. Please check your link and try again.</p>
				<p>If you're certain that you have the correct link email us at info@monumentofpraise.org</p>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
