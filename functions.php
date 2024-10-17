<?php
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-menu.php';
require get_template_directory() . '/inc/custom-post-type.php';
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

    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'slick-carousel'), '1.0', true);
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




// contact option page 
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Mi6 Options',
        'menu_title' => 'Mi6 Options',
        'menu_slug' => 'mi6-options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Testimonials',
        'menu_title' => 'Testimonials',
        'parent_slug' => 'mi6-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Contact Page',
        'menu_title' => 'Contact Page',
        'parent_slug' => 'mi6-options',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'parent_slug' => 'mi6-options',
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'parent_slug' => 'mi6-options',
    ));

}


function handle_contact_form()
{
    if ( isset($_POST['action']) && $_POST['action'] == 'custom_contact_form' ) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'aamir.mi6.global@gmail.com';

        $subject = 'New Contact Form Submission';

        $headers = array('Content-Type: text/html; charset=UTF-8');

        $message_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

        wp_mail($to, $subject, $message_body, $headers);

        // Optionally, you can redirect the user after submission

        wp_redirect( home_url('/thank-you/') );

        exit;
    }
}

add_action( 'admin_post_nopriv_custom_contact_form', 'handle_contact_form' );

add_action( 'admin_post_custom_contact_form', 'handle_contact_form' );