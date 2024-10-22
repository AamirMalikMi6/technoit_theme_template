<?php
include get_template_directory() . '/inc/customizer.php';
include get_template_directory() . '/inc/custom-menu.php';
include get_template_directory() . '/inc/custom-post-type.php';
include get_template_directory() . '/inc/custom-form.php';
include get_template_directory() . '/inc/option-pages.php';

function my_theme_enqueue_styles()
{
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css?family=Poppins', array(), null);
    wp_enqueue_style('open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans', array(), null);

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css', array(), null);

    wp_enqueue_style('bootstrap-icons', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css', array(), null);

    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/style.css', array(), filemtime(get_template_directory() . '/assets/style.css'));
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_scripts()
{

    wp_enqueue_script('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), null, true);

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'slick-carousel'), filemtime(get_template_directory() . '/assets/js/script.js'), true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


// posts featured images
add_theme_support('post-thumbnails');

add_theme_support('custom-logo');


// allow svg 
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');







