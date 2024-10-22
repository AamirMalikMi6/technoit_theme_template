<?php
function handle_contact_form()
{
    if ( isset($_POST['action']) && $_POST['action'] == 'custom_contact_form' ) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $sender_subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'aamir.mi6.global@gmail.com';//get_option('admin_email')

        $subject = 'New Contact Form Submission';

        // $headers = array('Content-Type: text/html; charset=UTF-8');
        $headers = array("Content-type:text/plain;charset=UTF-8" . "\r\n");

        $message_body = "Name: $name\n\nEmail: $email\n\nSubject: $sender_subject\n\nMessage:\n$message";

        wp_mail($to, $subject, $message_body, $headers);

        // Optionally, you can redirect the user after submission

        wp_redirect( home_url('/thank-you/') );

        exit;
    }
}

add_action( 'admin_post_nopriv_custom_contact_form', 'handle_contact_form' );

add_action( 'admin_post_custom_contact_form', 'handle_contact_form' );



// subscribe form submission
add_action('wp_ajax_subscribe_form', 'subscribe_form');
add_action('wp_ajax_nopriv_subscribe_form', 'subscribe_form');

function subscribe_form() {
    // Retrieve the email from the AJAX request
    $email = sanitize_email($_POST['email']);
    // var_dump($email);
    
    // Perform email validation
    if (!is_email($email)) {
        wp_send_json_error('Invalid email address.');
        return;
    }
    
    // Set up email details
    $to_admin = get_option('admin_email'); // You can change this to your desired recipient
    $subject = 'New Subscription';
    $message = 'You have a new subscriber: ' . $email;
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    // Send the email
    $admin_sent = wp_mail($to_admin, $subject, $message, $headers);

    // Set up email details for the subscriber
    $subject_subscriber = 'Subscription Confirmation';
    $message_subscriber = 'Thank you for subscribing!';

    // Change this email to your desired sender email address
    $custom_sender_email = get_option('admin_email'); // Change this to your desired email address
    $headers[] = 'From: Machine Intelligence <' . $custom_sender_email . '>'; // Specify the sender name and email

    // Send the email to the subscriber
    $subscriber_sent = wp_mail($email, $subject_subscriber, $message_subscriber, $headers);

    // Check if both emails were sent successfully
    if ($admin_sent && $subscriber_sent) {
        wp_send_json_success('Subscription successful. A confirmation email has been sent to you.');
    } else {
        wp_send_json_error('Failed to send email notifications.');
    }

    // Always die or exit after handling an AJAX request in WordPress
    wp_die();
}



// function handle_contact_form() {
//     if (isset($_POST['action']) && $_POST['action'] == 'custom_contact_form') {
//         $name = sanitize_text_field($_POST['name']);
//         $email = sanitize_email($_POST['email']);
//         $subject = sanitize_text_field($_POST['subject']);
//         $message = sanitize_textarea_field($_POST['message']);

//         $to = 'aamir.mi6.global@gmail.com';
//         $subject = 'New Contact Form Submission';
//         $headers = array('Content-Type: text/html; charset=UTF-8');
//         $message_body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

//         if (wp_mail($to, $subject, $message_body, $headers)) {
//             // Success response
//             wp_send_json_success('Thank you for your message. We will get back to you soon!');
//         } else {
//             // Failure response
//             wp_send_json_error('There was an issue sending your message. Please try again.');
//         }
//     }

//     wp_die(); // This is required to terminate immediately and return the proper response.
// }

// add_action('wp_ajax_nopriv_custom_contact_form', 'handle_contact_form');
// add_action('wp_ajax_custom_contact_form', 'handle_contact_form');