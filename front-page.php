<?php get_header(); ?>

<main id="content-wrapper">

	<section id="section-hero"  >

		<?php

		get_template_part( 'templates/sections/home', 'hero' );

		?>

	</section> <!-- #section-hero -->

	<section id="section-adv" class="py-5 mb-5" >

<?php

get_template_part( 'templates/sections/home', 'adv' );

?>

</section> <!-- #section-adv -->

<section id="section-receive" class="py-5 mb-5 white_wave wave">

<?php

get_template_part( 'templates/sections/home', 'receives' );

?>

</section> <!-- #section-receive -->

	<section id="section-services">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'services', $args );

		?>

	</section> <!-- #section-services -->


	<section id="section-trainers" class="py-5 white_wave wave">

<?php
		$args = array(
			'post_type' => 'trainers',
			'posts_per_page'    => 5,
		);
get_template_part( 'templates/sections/home', 'trainers', $args );

?>

</section> <!-- #section-trainers -->

	<section id="section-slider">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'slider', $args );

		?>

		

	</section> <!-- #section-slider -->
 
	<section id="section-news">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part( 'templates/sections/home', 'news', $args );

		?>

	</section> <!-- #section-news -->

	<section id="section-cta">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 1,
		);

		get_template_part( 'templates/sections/home', 'cta', $args );

		?>

	</section> <!-- #section-cta -->
 
</main> <!-- #content-wrapper -->

<?php
get_footer();
