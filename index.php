<?php get_header(); ?>

<?php get_template_part('templates/sections/common', 'pageheader'); ?>

<main id="content-wrapper">

	<div class="container">


		<div class="row py-5">



			<?php
			if (is_post_type_archive('testimonials') && have_posts()) : ?>
				<div id="loop-wrapper" class="col">
					<?php while (have_posts()) :
						the_post();

						get_template_part('templates/content/loop', 'testimonials');

					endwhile;


					the_posts_pagination(
						array(
							'mid_size'  => 2,
							'prev_text' => esc_html__('&laquo; Previous', 'zinoviev-school'),
							'next_text' => esc_html__('Next &raquo;', 'zinoviev-school'),
						)
					); ?>
				</div> <!-- #loop-wrapper -->
				<?php get_sidebar(); ?>

			<?php elseif (is_post_type_archive('services') && have_posts() || is_tax('service_category') && have_posts()) : ?>
				<?php get_sidebar(); ?>
				<div id="loop-wrapper" class="col">
					<div class="row pb-5 gx-5">
						<?php
						while (have_posts()) :
							the_post();

							get_template_part('templates/content/loop', 'services');

						endwhile;

						the_posts_pagination(
							array(
								'mid_size'  => 2,
								'prev_text' => esc_html__('&laquo; Previous', 'zinoviev-school'),
								'next_text' => esc_html__('Next &raquo;', 'zinoviev-school'),
							)
						); ?>
					</div>
				</div> <!-- #loop-wrapper -->
			<?php
			elseif (have_posts()) : ?>
				<div id="loop-wrapper" class="col">
					<?php
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
					); ?>
				</div> <!-- #loop-wrapper -->

			<?php get_sidebar();

			else : ?>
				<div id="loop-wrapper" class="col">

					<?php get_template_part('templates/content/loop', 'none'); ?>

				</div><!-- #loop-wrapper -->
			<?php
				get_sidebar();
			endif;
			?>




		</div>

	</div>

</main> <!-- #content-wrapper -->

<?php
get_footer();
