<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


 <div id="macrobar">
         <div class="wrap">
            <div class="gutter">
               <h3 id="wordmark">
                  <a href="http://www.fullerton.edu"><span></span>California State University, Fullerton</a>
               </h3>
				<ul id="macronav" role="navigation">
					<li><a href="http://www.fullerton.edu/a-z.asp">A-Z Index</a></li>
					<li class="last"><a href="http://google.fullerton.edu">Search CSUF</a></li>
				</ul>
            </div>
         </div>
      </div>


<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">



		<!-- Swap out normal header for site-wide library image map header -->
		<div style="text-align:center; width:985px; margin-left:auto; margin-right:auto;">
		<img id="Image-Maps_8201301051835069" src="/wp-content/uploads/2013/07/libraryblog-header.png" usemap="#Image-Maps_8201301051835069" border="0" width="985" height="150" alt="" />
		<map id="_Image-Maps_8201301051835069" name="Image-Maps_8201301051835069">
		<area shape="rect" coords="6,50,227,88" href="http://www.library.fullerton.edu" alt="Pollak Library" title="Pollak Library"    />
		<area shape="rect" coords="22,117,112,145" href="http://www.library.fullerton.edu/research/" alt="Library Research" title="Library Research"    />
		<area shape="rect" coords="118,117,208,145" href="http://www.library.fullerton.edu/services/" alt="Library Services" title="Library Services"    />
		<area shape="rect" coords="212,117,283,145" href="http://www.library.fullerton.edu/visiting/" alt="Visiting the Library" title="Visiting the Library"    />
		<area shape="rect" coords="288,117,347,145" href="http://www.library.fullerton.edu/about/" alt="About the Library" title="About the Library"    />
		<area shape="rect" coords="355,117,414,145" href="http://www.library.fullerton.edu/giving/" alt="Giving to the Library" title="Giving to the Library"    />
		<area shape="rect" coords="983,148,985,150" href="http://www.image-maps.com/index.php?aff=mapped_users_8201301051835069" alt="Image Map" title="Image Map" />
		</map>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">