<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<p><?php the_time(get_option('date_format')); ?></p>


	<?php the_post_thumbnail('brk_single', array('class' => 'img-fluid mb-3')); ?>

	<div>

		<?php
		the_content();

		wp_link_pages(
			array(
				'before'        => '<nav class="nav"><span class="nav-link">' . esc_html__('Part:', 'zinoviev-school') . '</span>',
				'after'         => '</nav>',
				'link_before'   => '<span class="nav-link">',
				'link_after'    => '</span>',
			)
		);

		?>

	</div>

</article> <!-- #post-<?php the_ID(); ?> -->