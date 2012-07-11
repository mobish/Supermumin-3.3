<!doctype html>
<html>
	<head>
		<title><?php wp_title(); ?></title>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/text.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		<noscript> 
			<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mobile.min.css" />
		</noscript> 
		<script> 
			// Edit to suit your needs.
			var ADAPT_CONFIG = {
			  path: '<?php echo get_template_directory_uri(); ?>/css/',

			  dynamic: true,

			  range: [
				'0px    to 760px  = mobile.min.css',
				'760px  to 980px  = 720.min.css',
				'980px  to 1280px = 960.min.css',
				'1280px to 1600px = 1200.min.css',
				'1600px to 1920px = 1560.min.css',
				'1920px           = fluid.min.css'
			  ]
			};
		</script> 
		<script src="<?php echo get_template_directory_uri(); ?>/js/adapt.min.js"></script>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class('container_12'); ?>>
		<header role="banner" class="main header grid_12">
			<span class="headertext"><a href="<?php site_url(); ?>"><?php bloginfo('name'); ?></a></span>
			<h1><?php bloginfo('description'); ?></h1>
		</header>

		<?php wp_nav_menu(
				array (
					'theme_location' => 'top-nav',
					'container' => 'nav',
					'container_class' => 'main nav grid_12'
				)); 
		?>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Index Top Widget") ) : ?>
		<?php endif; ?>