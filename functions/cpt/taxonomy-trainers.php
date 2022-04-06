<?php 

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Positions.
	 */

	$labels = [
		"name" => __( "Positions", "zinoviev-school" ),
		"singular_name" => __( "Position", "zinoviev-school" ),
	];

	
	$args = [
		"label" => __( "Positions", "zinoviev-school" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'position', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "position",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "position", [ "trainers" ], $args );

	/**
	 * Taxonomy: Types of training.
	 */

	$labels = [
		"name" => __( "Types of training", "zinoviev-school" ),
		"singular_name" => __( "type of training", "zinoviev-school" ),
	];

	
	$args = [
		"label" => __( "Types of training", "zinoviev-school" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'types_of_training', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "types_of_training",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "types_of_training", [ "trainers" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
