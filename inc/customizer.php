<?php

function header_option_in_customizer( $wp_customize ){
    //Setting
    $wp_customize->add_setting( 'cta-text', array( 'default' => '' ) );
    $wp_customize->add_setting( 'cta-link', array( 'default' => '' ) );
    $wp_customize->add_setting( 'dark-mode-option', array( 'default' => '' ) );

    //Section
    $wp_customize->add_section(
        'header',
        array(
            'title' => __( 'Header' ),
            'priority' => 30,
            'description' => __( 'Enter the Header CTA Text and URL' )
        )
    );

    //Control
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'cta-text',
            array(
                'label' => __( 'Header CTA Text' ),
                'section' => 'header',
                'settings' => 'cta-text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'cta-link',
            array(
                'label' => __( 'Header CTA URL' ),
                'section' => 'header',
                'settings' => 'cta-link'
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'dark-mode-option',
            array(
                'label' => __( 'Dark Mode Toggle Enable' ),
                'section' => 'header',
                'settings' => 'dark-mode-option',
                'type' => 'checkbox',
            )
        )
    );
    
}
add_action('customize_register', 'header_option_in_customizer');


//footer option 
function footer_option_in_customizer( $wp_customize ){
    //Settings
    $wp_customize->add_setting( 'footer-description', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-social-icon-heading', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-facebook', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-twitter', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-instagram', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-linkedin', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-service-menu-heading', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-information-menu-heading', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-contact-section-heading', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-contact-address-text', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-contact-phone-text', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-contact-email-text', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-contact-newslatter-heading', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-contact-newslatter-text', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-copyright-text', array( 'default' => '' ) );
    $wp_customize->add_setting( 'footer-copyright-link', array( 'default' => '' ) );

    //Sections
    $wp_customize->add_section(
        'footer',
        array(
            'title' => __( 'Footer' ),
            'priority' => 30,
            'description' => __( 'Enter the Footer Area Information' )
        )
    );

    //Controls
    //Twitter
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-description',
            array(
                'label' => __( 'Footer Description' ),
                'section' => 'footer',
                'settings' => 'footer-description',
                'type' => 'textarea'
            )
        )
    );
    //Instragram
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-social-icon-heading',
            array(
                'label' => __( 'Social Links Heading' ),
                'section' => 'footer',
                'settings' => 'footer-social-icon-heading'
            )
        )
    );
    //Facebook
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-facebook',
            array(
                'label' => __( 'Facebook Link' ),
                'section' => 'footer',
                'settings' => 'footer-facebook'
            )
        )
    );
    //Behance
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-twitter',
            array(
                'label' => __( 'Twitter Link' ),
                'section' => 'footer',
                'settings' => 'footer-twitter'
            )
        )
    );
    //Dribbble
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-instagram',
            array(
                'label' => __( 'Instagram Link' ),
                'section' => 'footer',
                'settings' => 'footer-instagram'
            )
        )
    );
    //Youtube
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-linkedin',
            array(
                'label' => __( 'Linkedin Link' ),
                'section' => 'footer',
                'settings' => 'footer-linkedin'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-service-menu-heading',
            array(
                'label' => __( 'Service Menu Heading' ),
                'section' => 'footer',
                'settings' => 'footer-service-menu-heading'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-information-menu-heading',
            array(
                'label' => __( 'Information Menu Heading' ),
                'section' => 'footer',
                'settings' => 'footer-information-menu-heading'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-contact-section-heading',
            array(
                'label' => __( 'Footer Contact Heading' ),
                'section' => 'footer',
                'settings' => 'footer-contact-section-heading'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-contact-address-text',
            array(
                'label' => __( 'Footer Address' ),
                'section' => 'footer',
                'settings' => 'footer-contact-address-text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-contact-phone-text',
            array(
                'label' => __( 'Footer Phone' ),
                'section' => 'footer',
                'settings' => 'footer-contact-phone-text',
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-contact-email-text',
            array(
                'label' => __( 'Footer Email' ),
                'section' => 'footer',
                'settings' => 'footer-contact-email-text',
                'type' => 'email'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-contact-newslatter-heading',
            array(
                'label' => __( 'Footer Newslatter Heading' ),
                'section' => 'footer',
                'settings' => 'footer-contact-newslatter-heading'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-contact-newslatter-text',
            array(
                'label' => __( 'Footer Newslatter Text' ),
                'section' => 'footer',
                'settings' => 'footer-contact-newslatter-text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-copyright-text',
            array(
                'label' => __( 'Copyright Text' ),
                'section' => 'footer',
                'settings' => 'footer-copyright-text'
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'footer-copyright-link',
            array(
                'label' => __( 'Copyright Link' ),
                'section' => 'footer',
                'settings' => 'footer-copyright-link'
            )
        )
    );
    
}
add_action('customize_register', 'footer_option_in_customizer');





// function social_media( $wp_customize ){
//     //Settings
//     $wp_customize->add_setting( 'twitter', array( 'default' => '' ) );
//     $wp_customize->add_setting( 'instagram', array( 'default' => '' ) );
//     $wp_customize->add_setting( 'facebook', array( 'default' => '' ) );
//     $wp_customize->add_setting( 'behance', array( 'default' => '' ) );
//     $wp_customize->add_setting( 'dribbble', array( 'default' => '' ) );
//     $wp_customize->add_setting( 'youtube', array( 'default' => '' ) );

//     //Sections
//     $wp_customize->add_section(
//         'social-media',
//         array(
//             'title' => __( 'Social Media', '_s' ),
//             'priority' => 30,
//             'description' => __( 'Enter the URL to your accounts for each social media for the icon to appear in the header.', '_s' )
//         )
//     );

//     //Controls
//     //Twitter
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize, 'twitter',
//             array(
//                 'label' => __( 'Twitter', '_s' ),
//                 'section' => 'social-media',
//                 'settings' => 'twitter'
//             )
//         )
//     );
//     //Instragram
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize, 'instagram',
//             array(
//                 'label' => __( 'Instagram', '_s' ),
//                 'section' => 'social-media',
//                 'settings' => 'instagram'
//             )
//         )
//     );
//     //Facebook
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize, 'facebook',
//             array(
//                 'label' => __( 'Facebook', '_s' ),
//                 'section' => 'social-media',
//                 'settings' => 'facebook'
//             )
//         )
//     );
//     //Behance
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize, 'behance',
//             array(
//                 'label' => __( 'Behance', '_s' ),
//                 'section' => 'social-media',
//                 'settings' => 'behance'
//             )
//         )
//     );
//     //Dribbble
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize, 'dribbble',
//             array(
//                 'label' => __( 'Dribbble', '_s' ),
//                 'section' => 'social-media',
//                 'settings' => 'dribbble'
//             )
//         )
//     );
//     //Youtube
//     $wp_customize->add_control(
//         new WP_Customize_Control(
//             $wp_customize, 'youtube',
//             array(
//                 'label' => __( 'YouTube', '_s' ),
//                 'section' => 'social-media',
//                 'settings' => 'youtube'
//             )
//         )
//     );
    
// }
// add_action('customize_register', 'social_media');