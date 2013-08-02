<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">

		<!-- START HARD-CODED CONTENT -->
			<!-- Help & Hours Icons --> 
			<!-- Temporarily using an image map since IE won't render image + text link -->
			<div>
				<img id="Image-Maps_6201307291751561" src="http://www.library.fullerton.edu/_resources/img/libraryblog-icon-hours-help-image-map.png" usemap="#Image-Maps_6201307291751561" width="190" height="36" alt="" />
				<map id="_Image-Maps_6201307291751561" name="Image-Maps_6201307291751561">
				<area shape="rect" coords="3,0,82,31" href="http://www.library.fullerton.edu/visiting/hours.php" alt="Pollak Library Hours" title="Pollak Library Hours"    />
				<area shape="rect" coords="93,0,172,31" href="http://www.library.fullerton.edu/services/ask.php" alt="Get Live Help" title="Get Live Help"    />
				<area shape="rect" coords="188,34,190,36" href="http://www.image-maps.com/index.php?aff=mapped_users_6201307291751561" alt="Image Map" title="Image Map" />
				</map>
			</div>

			<p>&nbsp;</p>
			<!-- social media icons -->
			<p class="iconsSocialMedia">
 				<a href="http://www.facebook.com/pollaklibrary">
					<img src="http://www.library.fullerton.edu/_resources/img/icon-facebook.png" alt="link to Library Facebook Page"/>
				</a>
				<a href="http://twitter.com/pollaklibrary">
					<img src="http://www.library.fullerton.edu/_resources/img/icon-twitter.png" alt="link to Library Twitter Feed"/>
				</a>
				<a href="http://www.youtube.com/user/csufpollaklibrary">
					<img src="http://www.library.fullerton.edu/_resources/img/icon-youtube.png" alt="link to Library YouTube channel"/>
				</a>
				<a href="http://www.flickr.com/photos/pollaklibrary/">
					<img src="http://www.library.fullerton.edu/_resources/img/icon-flickr.png" alt="link to Library Flickr page"/>
				</a>
				<a href="http://libraryblogs.fullerton.edu/">
					<img src="http://www.library.fullerton.edu/_resources/img/icon-rss.png" alt="link to Library News blog"/>
				</a>
			</p>
			<p>&nbsp;</p>
		<!-- END HARD-CODED CONTENT -->

			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>