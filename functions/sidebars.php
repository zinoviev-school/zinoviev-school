<?php

/**
 * https://developer.wordpress.org/themes/functionality/sidebars/
 */

if (!function_exists('brk_sidebars')) {

	function brk_sidebars()
	{

		register_sidebar(
			array(
				'name' => esc_html__('Main Sidebar', 'zinoviev-school'),
				'id' => 'sidebar-main',
				'description' => esc_html__('Main Sidebar', 'zinoviev-school'),
				'before_widget' => '<div class="widget mb-4 %2$s clearfix">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="mb-4">',
				'after_title' => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name' => esc_html__('Woo Sidebar', 'zinoviev-school'),
				'id' => 'sidebar-woo',
				'description' => esc_html__('Woo Sidebar', 'zinoviev-school'),
				'before_widget' => '<div class="widget mb-4 %2$s clearfix">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="mb-4">',
				'after_title' => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name' => esc_html__('Testimonials Sidebar', 'zinoviev-school'),
				'id' => 'sidebar-testimonials',
				'description' => esc_html__('Testimonials Sidebar', 'zinoviev-school'),
				'before_widget' => '<div class="widget mb-4 %2$s clearfix p-5 bg-white shadow">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="mb-4 ">',
				'after_title' => '</h3>',
			)
		);
	}
}

add_action('widgets_init', 'brk_sidebars');
