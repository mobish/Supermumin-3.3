<?

register_nav_menu('top-nav', 'Toppmeny');

if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<aside class="sidebar-box grid_3" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>'
	));	
}

if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Second Sidebar',
		'before_widget' => '<aside class="sidebar-box grid_3" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<span class="sidebar-title">',
		'after_title' => '</span>'
	));	
}

if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Index Top Widget',
		'before_widget' => '<aside class="index-top-widget-box grid_12" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<span class="index-top-widget-title">',
		'after_title' => '</span>'
	));	
}

if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Footer Widget Area',
		'before_widget' => '<aside class="footer-widget-box" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<span class="footer-widget-title">',
		'after_title' => '</span>'
	));	
}

if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Single Top Widget',
		'before_widget' => '<aside class="single-top-widget-box" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<span class="single-top-widget-title">',
		'after_title' => '</span>'
	));	
}

/* 
Tar bort inline css för gallerier, default styles finns i style.css 
http://zeo.unic.net.my/remove-wordpress-gallery-shortcode-embedded-css/
*/
add_filter('gallery_style', 
	create_function(
		'$css', 
		'return preg_replace("#<style type=\'text/css\'>(.*?)</style>#s", "", $css);'
		)
	);