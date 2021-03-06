<?php get_header(); ?>

<main id="content-wrapper">

	<section id="section-hero">

		<?php

		get_template_part('templates/sections/home', 'hero');

		?>

	</section> <!-- #section-hero -->

	<section id="section-hero-bottom" class="pb-5">

		<?php

		get_template_part('templates/sections/home', 'hero_bottom');

		?>

	</section> <!-- #section-hero-bottom -->

	<section id="section-adv" class="py-5">

		<?php

		get_template_part('templates/sections/home', 'adv');

		?>

	</section> <!-- #section-adv -->

	<section id="section-receive" class="py-5 background-gradient">

		<?php

		get_template_part('templates/sections/home', 'receives');

		?>

	</section> <!-- #section-receive -->

	<section id="section-services">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part('templates/sections/home', 'services', $args);

		?>

	</section> <!-- #section-services -->

	<section id="section-trainers" class="py-5">

		<?php

		get_template_part('templates/sections/select', 'trainers');

		?>

	</section> <!-- #section-trainers -->

	<section id="section-testimonials" class="py-5">

		<?php

		$args = array(
			'post_type' => 'testimonials',

		);

		get_template_part('templates/sections/home', 'testimonials', $args);

		?>

	</section> <!-- #section-testimonial -->

	<section id="section-faq-cta" class="py-5">

		<?php

		$args = array(
			'post_type' => 'faq',
		);

		get_template_part('templates/sections/home', 'faq_cta', $args);

		?>

	</section> <!-- #section-faq -->

	<section id="section-news">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 3,
		);

		get_template_part('templates/sections/home', 'news', $args);

		?>

	</section> <!-- #section-news -->

	<section id="section-cta">

		<?php

		$args = array(
			'post_type' => 'post',
			'posts_per_page'    => 1,
		);

		get_template_part('templates/sections/home', 'cta', $args);

		?>

	</section> <!-- #section-cta -->

</main> <!-- #content-wrapper -->

<?php
get_footer();
