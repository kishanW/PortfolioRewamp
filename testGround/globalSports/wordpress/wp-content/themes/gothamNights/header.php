<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.1.3.1.pack.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.history_remote.pack.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.tabs.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(function() {
		$('#container-1').tabs({ fxFade: true, fxSpeed: 'fast' });
	});
    </script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.tabs.css" type="text/css" media="print, projection, screen">
    <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
    <!--[if lte IE 7]>
    	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.tabs-ie.css" type="text/css" media="projection, screen">
    <![endif]-->
</head>
<body>
<!-- end header -->