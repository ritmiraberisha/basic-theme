<?php

// Enqueuing
function load_css()
{
  wp_register_style(
    "bootstrap",
    get_template_directory_uri() . "/css/bootstrap.min.css",
    [],
    1,
    "all"
  );
  wp_enqueue_style("bootstrap");

  wp_register_style(
    "main",
    get_template_directory_uri() . "/css/main.css",
    [],
    1,
    "all"
  );
  wp_enqueue_style("main");
}
add_action("wp_enqueue_scripts", "load_css");

function load_js()
{
  wp_enqueue_script("jquery");

  wp_register_script(
    "bootstrap",
    get_template_directory_uri() . "/js/bootstrap.min.js",
    ["jquery"],
    1,
    true
  );
  wp_enqueue_script("bootstrap");
}
add_action("wp_enqueue_scripts", "load_js");

// Nav Menus
register_nav_menus([
  "top-menu" => __("Top Menu", "theme"),
  "footer-menu" => __("Footer Menu", "theme"),
]);

// Theme Support
add_theme_support("menus");
add_theme_support("post-thumbnails");

// Image Sizes
add_image_size("small", 600, 600, false);
add_image_size("my_custom_size", 1200, 600, true);

// Team Members Custom Post
function custom_post_type()
{
  $labels = [
    "name" => "Team Members",
    "singular_name" => "Team Member",
    "add_new" => "Add Item",
    "all_items" => "Team Members",
    "add_new_item" => "Add Item",
    "edit_item" => "Edit Item",
    "new_item" => "New Item",
    "view_item" => "View Item",
    "search_item" => "Search Members",
    "not_found" => "No items found",
    "not_found_in_trash" => "No items found in trash",
    "parent_item_colon" => "Parent Item",
  ];
  $args = [
    "labels" => $labels,
    "public" => true,
    "has_archive" => true,
    "publicly_queryable" => true,
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => ["title", "editor", "excerpt", "thumbnail", "revisions"],
    "menu_position" => 25,
    "exclude_from_search" => false,
    "menu_icon" => "dashicons-admin-users",
  ];
  register_post_type("team-members", $args);

  $labels_1 = [
    "name" => "Locations",
    "singular_name" => "Location",
    "add_new" => "Add Item",
    "all_items" => "Locations",
    "add_new_item" => "Add Item",
    "edit_item" => "Edit Item",
    "new_item" => "New Item",
    "view_item" => "View Item",
    "search_item" => "Search Location",
    "not_found" => "No items found",
    "not_found_in_trash" => "No items found in trash",
    "parent_item_colon" => "Parent Item",
  ];
  $args_1 = [
    "labels" => $labels_1,
    "public" => true,
    "has_archive" => true,
    "publicly_queryable" => true,
    "query_var" => true,
    "rewrite" => true,
    "capability_type" => "post",
    "hierarchical" => false,
    "supports" => ["title", "editor", "excerpt", "thumbnail", "revisions"],
    "menu_position" => 26,
    "exclude_from_search" => false,
    "menu_icon" => "dashicons-location",
  ];
  register_post_type("locations", $args_1);
}
add_action("init", "custom_post_type");