<?php get_header(); ?>

<main id="content-wrapper">

	<?php
	if (!is_singular('services')) :

		get_template_part('templates/sections/common', 'pageheader');

	endif;
	?>

	<section class="single">


		<?php

		if (is_singular('services')) :

			get_template_part('templates/content/single', 'service');

		else :

			get_template_part('templates/content/single', '');

		endif;
		?>

		<?php if (!is_singular('services')) :  ?>
			<nav class="nav">
				<?php
				previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
				next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
				?>
			</nav>
		<?php endif; ?>







	</section>


</main> <!-- #content-wrapper -->

<?php
get_footer();
