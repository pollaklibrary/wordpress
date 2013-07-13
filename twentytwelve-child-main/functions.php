<?php

//Add in your custom code below here

/* Controls the size of the header */
/* Test if currently using, since not using the regular header function in header.php */
function twentytwelvechild_custom_header_setup() {
	$header_args = array( 'height' => 122, 'width' => 985 );
	add_theme_support( 'custom-header', $header_args );
}
add_action( 'after_setup_theme', 'twentytwelvechild_custom_header_setup' );


function wptuts_contact_methods( $contactmethods ) {
 
    // Remove we what we don't want
    unset( $contactmethods[ 'aim' ] );
    unset( $contactmethods[ 'yim' ] );
    unset( $contactmethods[ 'jabber' ] );
 
    // Add some useful ones
    $contactmethods[ 'twitter' ] = 'Twitter Username';
    $contactmethods[ 'facebook' ] = 'Facebook Profile URL';
    $contactmethods[ 'linkedin' ] = 'LinkedIn Public Profile URL';
    $contactmethods[ 'googleplus' ] = 'Google+ Profile URL';
 
    return $contactmethods;
}
 
add_filter( 'user_contactmethods', 'wptuts_contact_methods' );