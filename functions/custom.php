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


/**
 * These go in your functions.php file or plugin file.
 */


/*
 * Add srcset & sizes ACF.
 */
function acf_responsive_images( $image_id, $image_size, $max_width ) {
	// Check if the image ID is not blank
	if ( $image_id != '' ) {
		// Set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );
		// Set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
		// Generate the markup for the responsive image
		echo 'src="' . $image_src . '" srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, ' . $max_width . '"';
	}
}

/*
 * Optional: change the WordPress default maximum width of 1600px.
 */
function acf_max_srcset_image_width() {
  return 2048;
}
add_filter( 'max_srcset_image_width', 'acf_max_srcset_image_width', 10 , 2 );

?>
