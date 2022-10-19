<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- meta http-equiv="refresh" content="3" -->
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>
<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132756208-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132756208-1');
</script>
</head>

<div id="header" ><!-- apply .sticky class to get mobile -->        
	<div class="splash">
		<div id="brand">
			<a href="<?php echo esc_url(home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Neo-logo.png" alt="Logo" width="100" height="auto" />
			</a>
		</div>
		<h2><?php // bloginfo('description'); ?></h2>
	</div><!-- End of Splash -->
	<div id="nav-menu" class="main-v1">      
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'header_navigation', // menu slug from step 1
					'container' => false, // 'div' container will not be added
					'menu_class' => 'nav', // <ul class="nav"> 
					'fallback_cb' => 'default_header_nav', // name of default function from step 2
				));
			?>            
	 </div><!-- End of Nav-Menu -->
</div><!-- End of Header -->

<body>
	<div id="content"><!-- Content wrapper starts -->