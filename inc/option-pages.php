<?php

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