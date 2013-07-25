

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