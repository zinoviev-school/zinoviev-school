<?php

/**
 * Custom user functions.
 * You can put here your custom code.
 */

function register_custom_widget_area() {
    register_sidebar(
    array(
    'id' => 'new-widget-area',
    'name' => esc_html__( 'Weather', 'zinoviev-school' ),
    'description' => esc_html__( 'Widget bottom banner', 'zinoviev-school' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
    )
    );
    }
    add_action( 'widgets_init', 'register_custom_widget_area' );
