
<?php
/**
* Set up the WordPress core custom header feature.
*
* @uses boat-themes
*/


function create_post_type_destinations() {
    register_post_type( 'destinations_product',
        array(
            'labels' => array(
                'name' => __( 'Destinations' ),
                'singular_name' => __( 'Destinations')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )

        )
    );
}

add_action( 'init', 'create_post_type_destinations' );

function create_post_type() {
    register_post_type( 'boats_product',
        array(
            'labels' => array(
                'name' => __( 'Boats' ),
                'singular_name' => __( 'Boats')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )

        )
    );
}

add_action( 'init', 'create_post_type' );


/*function create_project_type() {
    $args=array(
        $labels = array(
            'name' => __( 'projects' ),
            'singular_name' => __( 'project' ),
            'menu_name'          => _x( 'Projects', 'admin menu' ),
            'name_admin_bar'     => _x( 'Projects', 'add new on admin bar' ),
            'add_new'            => _x( 'Add New', 'Project' ),
            'add_new_item'       => __( 'Add New Project' ),
            'new_item'           => __( 'New Project' ),
            'edit_item'          => __( 'Edit Project' ),
            'view_item'          => __( 'View Project' ),
            'all_items'          => __( 'All Project' ),
            'search_items'       => __( 'Search Project'),
            'parent_item_colon'  => __( 'Parent Project:' ),
            'not_found'          => __( 'No Projects found.' ),
            'not_found_in_trash' => __( 'No Projects found in Trash.' )
        ),
        'labels'             => $labels,
        'description'        => __( 'Description.' ),
        'public' => true,
        'taxonomies' => array( 'project' ),
        'rewrite' => array('slug' => 'projects'),
            );*/