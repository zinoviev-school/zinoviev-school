<?php

/**
 * Integration with Advanced Custom Fields
 */

// https://www.advancedcustomfields.com/resources/options-page/

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page();

}

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

if ( class_exists( 'ACF' ) ) {

	function brk_acf_contacts() {

		acf_add_local_field_group(
			array(

				'key' => 'group_theme_contacts',
				'title' => __( 'Contacts', 'zinoviev-school' ),
				'fields' => array(
					array(
						'key' => 'field_6013f4fcd2434',
						'label' => __( 'Contacts', 'zinoviev-school' ),
						'name' => 'contacts',
						'type' => 'group',
						'instructions' => __( 'Displayed in the site footer', 'zinoviev-school' ),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_6013f5efd2435',
								'label' => __( 'Company', 'zinoviev-school' ),
								'name' => 'company',
								'type' => 'text',
								'instructions' => __( 'Example: Full Company Name', 'zinoviev-school' ),
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013f61bd2436',
								'label' => __( 'Address - Line 1', 'zinoviev-school' ),
								'name' => 'address_1',
								'type' => 'text',
								'instructions' => __( 'Example: Street, Number', 'zinoviev-school' ),
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013f74fd2437',
								'label' => __( 'Address - Line 2', 'zinoviev-school' ),
								'name' => 'address_2',
								'type' => 'text',
								'instructions' => __( 'Example => Postal Code, City, State', 'zinoviev-school' ),
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013fcab912d8',
								'label' => __( 'Map URL', 'zinoviev-school' ),
								'name' => 'map_url',
								'type' => 'url',
								'instructions' => __( 'Example: https://goo.gl/maps/sNAFh8SNCLH5cYyL7 for Google Maps', 'zinoviev-school' ),
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013fcf2912d9',
								'label' => __( 'Phone number', 'zinoviev-school' ),
								'name' => 'phone',
								'type' => 'text',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013fd0b912da',
								'label' => __( 'E-mail address', 'zinoviev-school' ),
								'name' => 'email',
								'type' => 'email',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013fd34912db',
								'label' => __( 'ID Number', 'zinoviev-school' ),
								'name' => 'id_number',
								'type' => 'text',
								'instructions' => __( 'Example: Social Security Number, Fiscal Code, etc.', 'zinoviev-school' ),
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6013fd4b912dc',
								'label' => __( 'VAT Number', 'zinoviev-school' ),
								'name' => 'vat_number',
								'type' => 'text',
								'wrapper' => array(
									'width' => '33',
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			)
		);

	}
	add_action( 'acf/init', 'brk_acf_contacts' );

}

if ( class_exists( 'ACF' ) ) {

	function brk_acf_social() {

		acf_add_local_field_group(
			array(

				'key' => 'group_theme_social',
				'title' => __( 'Social profiles', 'zinoviev-school' ),
				'fields' => array(
					array(
						'key' => 'field_601400d769ba3',
						'label' => __( 'Social profiles', 'zinoviev-school' ),
						'name' => 'social',
						'type' => 'group',
						'instructions' => __( 'Full social profile addresses. Not all fields are required, only filled fields will be displayed on the site as icons', 'zinoviev-school' ),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_601400d769ba7',
								'label' => 'Facebook',
								'name' => 'facebook',
								'type' => 'url',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_601401b269bac',
								'label' => 'Twitter',
								'name' => 'twitter',
								'type' => 'url',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_601401e469bad',
								'label' => 'LinkedIn',
								'name' => 'linkedin',
								'type' => 'url',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_601401f569bae',
								'label' => 'Instagram',
								'name' => 'instagram',
								'type' => 'url',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6014026069baf',
								'label' => 'Pinterest',
								'name' => 'pinterest',
								'type' => 'url',
								'wrapper' => array(
									'width' => '33',
								),
							),
							array(
								'key' => 'field_6014026f69bb0',
								'label' => 'YouTube',
								'name' => 'youtube',
								'type' => 'url',
								'wrapper' => array(
									'width' => '33',
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options',
						),
					),
				),
				'menu_order' => 1,
				'position' => 'normal',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			)
		);

	}
	add_action( 'acf/init', 'brk_acf_social' );

}

if ( class_exists( 'ACF' ) ) {

	function brk_acf_meta() {

		acf_add_local_field_group(
			array(

				'key' => 'group_theme_meta',
				'title' => __( 'Meta', 'zinoviev-school' ),
				'fields' => array(
					array(
						'key' => 'field_60140651ee8f1',
						'label' => __( 'Meta', 'zinoviev-school' ),
						'name' => 'meta',
						'type' => 'group',
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_60140662ee8f2',
								'label' => __( 'Chrome Theme', 'zinoviev-school' ),
								'name' => 'theme_color',
								'type' => 'color_picker',
								'instructions' => __( 'Tab color in Chrome for Android', 'zinoviev-school' ),
								'wrapper' => array(
									'width' => '25',
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options',
						),
					),
				),
				'menu_order' => 2,
				'position' => 'normal',
				'style' => 'seamless',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => true,
				'description' => '',
			)
		);

	}
	add_action( 'acf/init', 'brk_acf_meta' );

	// --- Metadata ---

	function brk_head_meta() {

		// --- Chrome theme ---

		$themecolor = get_field( 'meta_theme_color', 'option' );

		if ( $themecolor ) {
			echo '<meta name="theme-color" content="', esc_attr( $themecolor ), '">';
		}

	}
	add_action( 'wp_head', 'brk_head_meta' );

}

// --- Social icons ---

function brk_socialicons() {

	$brk_socialnetworks = array(
		'facebook' => array(
			'social-name'   => 'Facebook',
			'icon-style'    => 'fa-brands',
			'icon-name'     => 'fa-facebook-f',
		),
		'twitter' => array(
			'social-name'   => 'Twitter',
			'icon-style'    => 'fa-brands',
			'icon-name'     => 'fa-twitter',
		),
		'linkedin' => array(
			'social-name'   => 'LinkedIn',
			'icon-style'    => 'fa-brands',
			'icon-name'     => 'fa-linkedin-in',
		),
		'instagram' => array(
			'social-name'   => 'Instagram',
			'icon-style'    => 'fa-brands',
			'icon-name'     => 'fa-instagram',
		),
		'pinterest' => array(
			'social-name'   => 'Pinterest',
			'icon-style'    => 'fa-brands',
			'icon-name'     => 'fa-pinterest-p',
		),
		'youtube' => array(
			'social-name'   => 'YouTube',
			'icon-style'    => 'fa-brands',
			'icon-name'     => 'fa-youtube',
		),
	);
	return $brk_socialnetworks;
}
