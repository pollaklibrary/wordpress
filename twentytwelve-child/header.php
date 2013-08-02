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

<!-- Added in CSUF header nav bar to match website branding -->
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

		<!-- Header Image Map to Match Library Website Branding -->
		<div style="text-align:center; width:985px; margin-left:auto; margin-right:auto;">
		<img id="Image-Maps_3201307121751264" src="http://www.library.fullerton.edu/_resources/img/libraryblog-header.png" usemap="#Image-Maps_3201307121751264" width="985" height="122" alt="" />
		<map id="Image-Maps_3201307121751264" name="Image-Maps_3201307121751264">
		<area shape="rect" coords="10,10,225,60" href="http://www.library.fullerton.edu/" alt="Pollak Library" title="Pollak Library"    />
		<area shape="rect" coords="19,87,114,117" href="http://www.library.fullerton.edu/research/" alt="Library Research" title="Library Research"    />
		<area shape="rect" coords="118,87,206,117" href="http://www.library.fullerton.edu/services/" alt="Library Services" title="Library Services"    />
		<area shape="rect" coords="210,86,283,116" href="http://www.library.fullerton.edu/visiting/" alt="Visiting the Library" title="Visiting the Library"    />
		<area shape="rect" coords="285,87,347,117" href="http://www.library.fullerton.edu/about/" alt="About the Library" title="About the Library"    />
		<area shape="rect" coords="354,84,416,114" href="http://www.library.fullerton.edu/giving/" alt="Giving to the Library" title="Giving to the Library"    />
		<area shape="rect" coords="476,87,727,117" href="http://libraryblogs.fullerton.edu" alt="http://libraryblogs.fullerton.edu" title="http://libraryblogs.fullerton.edu"    />
		<area shape="rect" coords="983,120,985,122" href="http://www.image-maps.com/index.php?aff=mapped_users_3201307121751264" alt="Image Map" title="Image Map" />
		</map>
		</div>

		<!-- Not using Wordpress header function since using above image map instead. -->
		<!--<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>-->

	</header><!-- #masthead -->

		<!-- Moved default site navigation below the header -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

<div id="main" class="wrapper">

