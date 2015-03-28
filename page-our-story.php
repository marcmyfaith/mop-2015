<?php
/** Template Name: Our Story **/
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
		<div id="standard" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h3>A Modern Church With Traditional Values</h3>
				<p>Serving High Point, Thomasville and Lexington, NC</p>
			</div>
		</div>
		<div class="hero container-fluid">
			<div class="row">
				<p>Monument of Praise was founded in October of 1992 by Dr. Kevin A. Williams. For purposes of introducing the ministry to the community, the ministry hosted its introductory service/banquet in December of 1993, an began its first services in the Hartley Street YMCA in High Point, North Carolina in March of 1994. The membership of Monument of Praise began with a core group of ten members. The church membership gradually increased, and in the fall of 1998, the ministry moved its base of operations from the Hartley Street YMCA to an office building located at 615 English Road. Monument of Praise Ministries, Inc. was housed in the 615 English Road property from 1998-2009. In the years since its inception, Monument of Praise Ministries has continually increased its service not only to the High Point community but also to the Body of Christ. Though its membership is not as large as some churches boast, Monument of Praise Ministries members have held faithful in their attendance, giving and service to their church and community.  The ministries of the church include the Children’s Church, Youth Praise Ministry, Missionaries, Choir, Media Ministry, Deacons Ministry, Transportation & Meal Ministry, Ushers and many more. During the inception of Monument of Praise Ministries and since, Dr. Williams has served nobly and well—both as an evangelist, ministering the Word of God throughout the nation, and as a Pastor, not only of Monument of Praise, but at the passing of his father, of New Jerusalem Cathedral, located in Greensboro, North Carolina. Dr. Williams is not only a capable ministerial leader, but also a visionary who is being used by God to pursue the vision that he has been given for Monument of Praise Ministries. Monument has acquired our present location 1212 Pearson Place to house the growing congregation. In April 2014, Monument purchased an additional 21K square feet church located at 321 Oakview Drive in  High Point.Other notable achievements include the purchase of a van to implement the church’s transportation ministry, extensive soul-winning outreach, and a weekly meal ministry that serves the surrounding community.  For many years, Monument has been in pursuit of reaching souls for Christ through outreach and service and as a result has been coined in the community as “The Monument.” With God’s help we will do great things for the Kingdom of God because “there is no limit to a committed people.”</p>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
