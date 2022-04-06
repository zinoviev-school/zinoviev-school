<?php 

function cptui_register_my_cpts_trainers() {

	/**
	 * Post Type: Trainers.
	 */

	$labels = [
		"name" => __( "Trainers", "zinoviev-school" ),
		"singular_name" => __( "Trainer", "zinoviev-school" ),
	];

	$args = [
		"label" => __( "Trainers", "zinoviev-school" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "trainers", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "trainers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_trainers' );


