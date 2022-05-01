<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="container-fluid py-5">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">
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

				</div>

			</div>
		</div>
	</section>
</article> <!-- #post-<?php the_ID(); ?> -->