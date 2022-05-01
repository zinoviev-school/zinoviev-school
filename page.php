<?php get_header(); ?>

<main id="content-wrapper">

	<?php
	while (have_posts()) :
		the_post();
		get_template_part('templates/sections/common', 'pageheader');
	?>



		<?php
		// Get this page slug
		$slug = $post->post_name;

		// Check if template file exists, set the template to be used
		$template_name = (is_file(get_theme_file_path('templates/content/page-' . $slug . '.php'))) ? $slug : '';

		get_template_part('templates/content/page', $template_name);
		?>




	<?php endwhile ?>

</main> <!-- #content-wrapper -->

<?php
get_footer();
