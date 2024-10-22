<?php

// services post type 

function create_services_post_type()
{
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name' => 'Services', // Plural name
        'singular_name' => 'service',   // Singular name
        'add_new' => 'Add New Service' // Add new item   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Allows editor to add content
        'thumbnail',    // Allows feature images
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels' => $labels,
        'description' => 'Post type Service', // Description
        'supports' => $supports,
        'hierarchical' => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public' => true,  // Makes the post type public
        'show_ui' => true,  // Displays an interface for this post type
        'show_in_menu' => true,  // Displays in the Admin Menu (the left panel)
        'menu_position' => 6,     // The position number in the left menu
        'menu_icon' => 'dashicons-admin-generic',  // The URL for the icon used for this post type
        'can_export' => true,  // Allows content export using Tools -> Export
        'has_archive' => true,  // Enables post type archive (by month, date, or year)
        'capability_type' => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('service', $args); //Create a post type with the slug is ‘product’ and arguments in $args.

    // register taxonomy
    register_taxonomy(
        'service-category',
        'service',
        array(
            'hierarchical' => true,
            'public' => true,
            'show_in_rest' => true,
            'label' => 'Service Categories',
            'query_var' => true,
            'rewrite' => array('slug' => 'service-category')
        )
    );
    // $labels = array(
    //     'name'              => _x('Genres', 'taxonomy general name', 'textdomain'),
    //     'singular_name'     => _x('Genre', 'taxonomy singular name', 'textdomain'),
    //     'search_items'      => __('Search Genres', 'textdomain'),
    //     'all_items'         => __('All Genres', 'textdomain'),
    //     'parent_item'       => __('Parent Genre', 'textdomain'),
    //     'parent_item_colon' => __('Parent Genre:', 'textdomain'),
    //     'edit_item'         => __('Edit Genre', 'textdomain'),
    //     'update_item'       => __('Update Genre', 'textdomain'),
    //     'add_new_item'      => __('Add New Genre', 'textdomain'),
    //     'new_item_name'     => __('New Genre Name', 'textdomain'),
    //     'menu_name'         => __('Genres', 'textdomain'),
    // );

    // $args = array(
    //     'hierarchical'      => true, // Set to 'false' for non-hierarchical (like tags)
    //     'labels'            => $labels,
    //     'show_ui'           => true,
    //     'show_admin_column' => true,
    //     'query_var'         => true,
    //     'rewrite'           => array('slug' => 'genre'),
    // );

    // register_taxonomy('genre', array('post'), $args);
}
// porfolio post type 

function create_portfolio_post_type()
{
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name' => 'Portfolios', // Plural name
        'singular_name' => 'Portfolio',   // Singular name
        'add_new' => 'Add Portfolio' // Add new item   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',
        'excerpt',
        'thumbnail',    // Allows feature images
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels' => $labels,
        'description' => 'Post type Portfolio', // Description
        'supports' => $supports,
        'hierarchical' => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public' => true,  // Makes the post type public
        'show_ui' => true,  // Displays an interface for this post type
        'show_in_menu' => true,  // Displays in the Admin Menu (the left panel)
        'menu_position' => 7,     // The position number in the left menu
        'menu_icon' => 'dashicons-portfolio',  // The URL for the icon used for this post type
        'can_export' => true,  // Allows content export using Tools -> Export
        'has_archive' => true,  // Enables post type archive (by month, date, or year)
        'capability_type' => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('portfolio', $args); //Create a post type with the slug is ‘product’ and arguments in $args.

    // register taxonomy
    register_taxonomy(
        'portfolio-category',
        'portfolio',
        array(
            'hierarchical' => true,
            'label' => 'Portfolio Categories',
            'query_var' => true,
            'rewrite' => array('slug' => 'portfolio-category')
        )
    );
}
// our team custom post type 
function create_ourteam_post_type()
{
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name' => 'Our Teams', // Plural name
        'singular_name' => 'Our Team',   // Singular name
        'add_new' => 'Add Team Member' // Add new item
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'thumbnail',    // Allows feature images
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels' => $labels,
        'description' => 'Post type Our Team', // Description
        'supports' => $supports,
        'hierarchical' => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public' => true,  // Makes the post type public
        'show_ui' => true,  // Displays an interface for this post type
        'show_in_menu' => true,  // Displays in the Admin Menu (the left panel)
        'menu_position' => 9,     // The position number in the left menu
        'menu_icon' => 'dashicons-groups',  // The URL for the icon used for this post type
        'can_export' => true,  // Allows content export using Tools -> Export
        'has_archive' => true,  // Enables post type archive (by month, date, or year)
        'capability_type' => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('our-team', $args); //Create a post type with the slug is ‘product’ and arguments in $args.

    // register taxonomy
    register_taxonomy(
        'our-team-category',
        'our-team',
        array(
            'hierarchical' => true,
            'label' => 'Team Categories',
            'query_var' => true,
            'rewrite' => array('slug' => 'our-team-category')
        )
    );
}


//Faq post type
function create_faqs_post_type()
{
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name' => 'FAQS', // Plural name
        'singular_name' => 'FAQ'   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Allows editing of content
        'thumbnail',    // Allows feature images
        'custom-fields' // Supports by custom fields
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels' => $labels,
        'description' => 'Post type FAQ', // Description
        'supports' => $supports,
        'hierarchical' => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public' => true,  // Makes the post type public
        'show_ui' => true,  // Displays an interface for this post type
        'show_in_menu' => true,  // Displays in the Admin Menu (the left panel)
        'menu_position' => 11,     // The position number in the left menu
        'menu_icon' => 'dashicons-editor-alignleft',  // The URL for the icon used for this post type
        'can_export' => true,  // Allows content export using Tools -> Export
        'has_archive' => true,  // Enables post type archive (by month, date, or year)
        'capability_type' => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('faq', $args); //Create a post type with the slug is ‘product’ and arguments in $args.
    create_services_post_type();
    create_portfolio_post_type();
    create_ourteam_post_type();
}
add_action('init', 'create_faqs_post_type');
