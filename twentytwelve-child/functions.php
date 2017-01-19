<?php

//Add in your custom code below here


//Controls the size of the header 
//Test if currently using, since not using the regular header function in header.php 
function twentytwelvechild_custom_header_setup() {
	$header_args = array( 'height' => 122, 'width' => 985 );
	add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'twentytwelvechild_custom_header_setup' );


//Removes ShareThis from Excerpts
remove_filter( 'get_the_excerpt', 'st_remove_st_add_link', 9 );
remove_filter( 'the_excerpt', 'st_add_widget' );


//Removes categories from the post meta output on home page, archives, and single post.
function twentytwelve_entry_meta() {
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
		get_the_author()
	);

if ( is_single() && $categories_list ) {
		$utility_text = __( 'Posted on %2$s<span class="by-author"> by %3$s.<br /><br />Posted in %1$s</span>.', 'twentytwelve' );
	} else {
		$utility_text = __( 'Posted on %2$s<span class="by-author"> by %3$s</span>.', 'twentytwelve' );
	}

	printf(
		$utility_text,
		$categories_list,
		$date,
		$author
	);
}


//Add 225x125 image size to excerpt thumbnails
add_image_size('excerpt-thumbnail', 225, 125, true);


//Remove the ... from excerpt and change the text
function change_excerpt_more()
{
  function new_excerpt_more($more)
    {
    // Use .read-more to style the link
      return '<span class="continue-reading"> <a href="' . get_permalink() . '">Continue Reading &raquo;</a></span>';
    }
  add_filter('excerpt_more', 'new_excerpt_more');
}
add_action('after_setup_theme', 'change_excerpt_more');


// remove ie css from twentytwelve theme
function mytheme_dequeue_styles() {
   wp_dequeue_style( 'twentytwelve-ie' );
 }
 add_action( 'wp_enqueue_scripts', 'mytheme_dequeue_styles', 11 );
//add new from child theme
wp_enqueue_style( 'mytheme-ie', get_stylesheet_directory_uri() . '/css/ie.css', array( 'twentytwelve-style' ), '1.0' );
$wp_styles->add_data( 'mytheme-ie', 'conditional', 'lt IE 9' );



/** 
* This function will connect wp_mail to your authenticated 
* SMTP server. This improves reliability of wp_mail, and  
* avoids many potential problems. 
* 
* Author:     Chad Butler 
* Author URI: http://butlerblog.com 
* 
* For more information and instructions, see: 
 * http://b.utler.co/Y3 
 */ 
add_action( 'phpmailer_init', 'send_smtp_email' ); 
function send_smtp_email( $phpmailer ) { 


	// Define that we are sending with SMTP 
	$phpmailer->isSMTP(); 


	// The hostname of the mail server 
	$phpmailer->Host = "mail.fullerton.edu"; 


	// Use SMTP authentication (true|false) 
	$phpmailer->SMTPAuth = false; 


	// SMTP port number - likely to be 25, 465 or 587 
	$phpmailer->Port = "587"; 


	// Username to use for SMTP authentication 
	//$phpmailer->Username = "yourusername"; 


	// Password to use for SMTP authentication 
	//$phpmailer->Password = "yourpassword"; 


	// Encryption system to use - ssl or tls 
	$phpmailer->SMTPSecure = "tls"; 


	$phpmailer->From = "wordpress@libraryblogs.fullerton.edu"; 
	$phpmailer->FromName = "WordPress "; 
} 


