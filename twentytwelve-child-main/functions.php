

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

		$utility_text = __( 'This entry was posted on %1$s<span class="by-author"> by %2$s</span>.', 'twentytwelve' );

	printf(
		$utility_text,
		$date,
		$author
	);
}

