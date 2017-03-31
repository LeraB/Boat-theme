<?php
/**
* Set up the WordPress core custom header feature.
*
* @uses boat-themes
*/


function create_post_type() {
    register_post_type( 'acme_product',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

add_action( 'init', 'create_post_type' );