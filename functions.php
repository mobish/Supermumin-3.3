<?

/* Registrerar huvudmenyn */
register_nav_menu('top-nav', 'Toppmeny');

/* F�rsta sidebaren, till h�ger om inneh�ll */
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<aside class="sidebar-box grid_2 suffix_1" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="sidebar-title">',
		'after_title' => '</div>'
	));	
}

/* Andra sidebaren, till h�ger om den f�rsta */
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Second Sidebar',
		'before_widget' => '<aside class="sidebar-box grid_3" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="sidebar-title">',
		'after_title' => '</div>'
	));	
}

/* Ett widget-omr�de ovanf�r inneh�llet, f�r annonser/annat, syns endast p� index */
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Index Top Widget',
		'before_widget' => '<aside class="index-top-widget-box grid_12" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="index-top-widget-title">',
		'after_title' => '</div>'
	));	
}

/* Ett widgetomr�de i sidfoten */
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Footer Widget Area',
		'before_widget' => '<aside class="footer-widget-box" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="footer-widget-title">',
		'after_title' => '</div>'
	));	
}

/* Ett widgetomr�de ovanf�r inneh�llet f�r annonser/annat, syns endast p� inl�gg/sidor */
if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
		'name' => 'Single Top Widget',
		'before_widget' => '<aside class="single-top-widget-box" id="%1$s">',
		'after_widget' => '</aside>',
		'before_title' => '<div class="single-top-widget-title">',
		'after_title' => '</div>'
	));
}

/* 
Tar bort inline css f�r gallerier, default styles finns i style.css 
http://zeo.unic.net.my/remove-wordpress-gallery-shortcode-embedded-css/
*/
add_filter('gallery_style', 
	create_function(
		'$css', 
		'return preg_replace("#<style type=\'text/css\'>(.*?)</style>#s", "", $css);'
	)
);