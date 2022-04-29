<?php

/**
 * https://developer.wordpress.org/reference/functions/add_image_size/
 * add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array )
 * array( 'x_crop_position', 'y_crop_position' )
 * x_crop_position > left center right
 * y_crop_position > top center bottom
 */

add_image_size('brk_big', 1400, 800, true);
add_image_size('brk_square', 400, 400, true);
add_image_size('brk_contact', 400, 195, true);
add_image_size('brk_single', 880, 500, true);
add_image_size('brk_single-small', 390, 260, true);
add_image_size('brk_banner_bottom', 320, 220, true);
add_image_size('brk_single_service_gallery', 230, 150, true);
add_image_size('brk_single_service_relative', 350, 420, true);
add_image_size('brk_single_service_banner', 1920, 400, true);

// remove_image_size('large');
// remove_image_size('thumbnail');
// remove_image_size('medium');
// remove_image_size('medium_large');
remove_image_size('1536x1536');
remove_image_size('2048x2048');
