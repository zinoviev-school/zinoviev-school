<?php
function cptui_register_my_cpts_testimonials()
{

    /**
     * Post Type: Testimonials.
     */

    $labels = [
        "name" => __("Testimonials", "zinoviev-school"),
        "singular_name" => __("Testimonial", "zinoviev-school"),
        "menu_name" => __("Testimonials", "zinoviev-school"),
        "new_item" => __("Новый отзыв", "zinoviev-school"),
    ];

    $args = [
        "label" => __("Testimonials", "zinoviev-school"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => "testimonials",
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "testimonials", "with_front" => true],
        "query_var" => true,
        "menu_position" => 4,
        "show_in_graphql" => false,
    ];

    register_post_type("testimonials", $args);
}

add_action('init', 'cptui_register_my_cpts_testimonials');
