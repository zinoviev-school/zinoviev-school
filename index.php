<?php get_header(); ?>

<?php get_template_part('templates/sections/common', 'pageheader'); ?>

<main id="content-wrapper">

	<div class="container">


		<div class="row py-5">

			<div id="loop-wrapper" class="col">

				<?php
				if (is_post_type_archive('testimonials') && have_posts()) :

					while (have_posts()) :
						the_post();

						get_template_part('templates/content/loop', 'testimonials');

					endwhile;

					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => esc_html__('&laquo; Previous', 'zinoviev-school'),
							'next_text' => esc_html__('Next &raquo;', 'zinoviev-school'),
						)
					);

				elseif (have_posts()) :
					while (have_posts()) :
						the_post();

						get_template_part('templates/content/loop', '');

					endwhile;

					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => esc_html__('&laquo; Previous', 'zinoviev-school'),
							'next_text' => esc_html__('Next &raquo;', 'zinoviev-school'),
						)
					);

				else :

					get_template_part('templates/content/loop', 'none');

				endif;
				?>

			</div> <!-- #loop-wrapper -->

			<?php get_sidebar(); ?>

		</div>

	</div>

</main> <!-- #content-wrapper -->

<?php
get_footer();
