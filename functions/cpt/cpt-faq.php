<?php
function cptui_register_my_cpts_faq()
{

    /**
     * Post Type: Faq.
     */

    $labels = [
        "name" => __("Faq", "zinoviev-school"),
        "singular_name" => __("Faq", "zinoviev-school"),
        "menu_name" => __("Faq", "zinoviev-school"),
    ];

    $args = [
        "label" => __("Faq", "zinoviev-school"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "faq", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor"],
        "show_in_graphql" => false,
    ];

    register_post_type("faq", $args);
}

add_action('init', 'cptui_register_my_cpts_faq');
