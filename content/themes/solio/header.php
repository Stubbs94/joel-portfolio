<?php
/**
*
* Solio, a Wordpress theme from MediaLoot.com
* 
*
**/
$g_settings = get_option('g_settings');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
		
		<script src="<?php bloginfo('template_directory'); ?>/javascript/jquery_1.5-jquery_ui.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/jquery.prettyPhoto.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/filterable.pack.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/pirobox_extended.js"></script>
		<link href='<?php bloginfo('template_directory'); ?>/pirobox/style.css' rel='stylesheet' type='text/css'>
		
		<script type="text/javascript">
		$(document).ready(function() {
			$.piroBox_ext({
			piro_speed :700,
			bg_alpha : 0.5,
			piro_scroll : true,
			piro_drag :false,
			piro_nav_pos: 'bottom'
		});
		});
		</script>
		
<?php echo $g_settings['headercode']; ?>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<div class="wrapper">
				<!--<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>-->
				<h1><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" border="0" /></a></h1>
				<ul class="social-links">
					<?php if ($g_settings['facebook_link'] != '') { ?><li><a href="<?php echo $g_settings['facebook_link'];?>" class="facebook">Facebook</a></li><?php } ?>
					<?php if ($g_settings['twitter_link'] != '') { ?><li><a href="<?php echo $g_settings['twitter_link'];?>" class="twitter">Twitter</a></li><?php } ?>
					<?php if ($g_settings['linkedin_link'] != '') { ?><li><a href="<?php echo $g_settings['linkedin_link'];?>" class="linkedin">LinkedIn</a></li><?php } ?>
					<?php if ($g_settings['pinterest_link'] != '') { ?><li><a href="<?php echo $g_settings['pinterest_link'];?>" class="pinterest">Pinterest</a></li><?php } ?>
					<?php if ($g_settings['dribble_link'] != '') { ?><li><a href="<?php echo $g_settings['dribble_link'];?>" class="dribbble">Dribbble</a></li><?php } ?>
				</ul>
				
			</div><!-- end .wrapper -->
		</header>
		