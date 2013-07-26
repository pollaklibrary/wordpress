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
			<p id="iconHoursHelp">
				<a id="lnkHours" title="Library Hours" href="http://www.library.fullerton.edu/visiting/hours.php">Library<br/>Hours</a>
				<a id="lnkChat" title="Live Help" href="http://www.library.fullerton.edu/services/ask.php" target="_top">Get<br/>Live Help</a>
			</p>
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