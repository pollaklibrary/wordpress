<?php

//Add in your custom code below here

function twentytwelvechild_custom_header_setup() {
	$header_args = array( 'height' => 122, 'width' => 985 );
	add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'twentytwelvechild_custom_header_setup' );