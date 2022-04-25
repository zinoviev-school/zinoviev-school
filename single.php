<?php get_header(); ?>

<main id="content-wrapper">

	<?php
	while (have_posts()) :
		the_post();
		get_template_part('templates/sections/common', 'pageheader');

	?>

		<div class="container">
			<div class="row py-5">

				<div id="article-wrapper" class="col">

					<?php get_template_part('templates/content/single', ''); ?>

					<nav class="nav">
						<?php
						previous_post_link('<span class="nav-link me-auto">&laquo; %link</span>');
						next_post_link('<span class="nav-link ms-auto">%link &raquo;</span>');
						?>
					</nav>



				</div> <!-- #article-wrapper -->

				<?php get_sidebar(''); ?>

			</div>

		</div>

	<?php endwhile ?>

</main> <!-- #content-wrapper -->

<?php
get_footer();
