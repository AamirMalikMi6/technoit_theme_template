<?php

//register custom menus

// menu 
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu'),
            'service-footer-menu' => __('Service Footer Menu'),
            'information-footer-menu' => __('Information Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');


//menu custom function 
function display_custom_menu_am($menu_name)
{
    // Get the menu by its name
    $menu = wp_get_nav_menu_object($menu_name);
    if (!$menu) {
        echo 'Menu not found!';
        return; // Stop if menu is not found
    }

    // Get menu items by menu ID
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    if (!$menu_items) {
        echo 'No menu items found!';
        return; // Stop if no menu items
    }
    // Output the menu HTML
    render_menu_items($menu_items); // Display the menu items
}

// Function to render the menu items as HTML
function render_menu_items($menu_items, $parent_id = 0)
{
    foreach ($menu_items as $item) {
        // Check if this item is a top-level item (has no parent)
        if ($item->menu_item_parent == $parent_id) {
            // Check if this item has child items
            $has_children = has_child_items($menu_items, $item->ID);

            // Add class 'dropdown-am' if the item has children
            $li_class = $has_children ? 'dropdown-am' : '';

            // Output the menu item HTML
            echo '<li class="' . esc_attr($li_class) . '">';
            echo '<a href="' . esc_url($item->url) . '">' . esc_html($item->title);

            // Add dropdown icon if there are child items
            if ($has_children) {
                echo '<i class="bi bi-chevron-down dropdown-indicator"></i>';
            }

            echo '</a>';

            // Render the submenu if there are child items
            if ($has_children) {
                echo '<ul class="dropdown-menu-am">';
                render_menu_items($menu_items, $item->ID); // Recursively render child items
                echo '</ul>';
            }

            echo '</li>';
        }
    }
}

// Helper function to check if an item has children
function has_child_items($menu_items, $parent_id)
{
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == $parent_id) {
            return true; // If there's a matching parent, it has children
        }
    }
    return false; // No children found
}

//end menu custom function