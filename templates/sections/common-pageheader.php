<div class="section-pageheader pt-5 mb-0 has-img-background">

	<div class="container  text-left text-light">
		<?php if (!is_front_page() && !is_home()) : ?>

			<h1 class="mt-5 text-uppercase">
				<?php
				if (is_home()) {
					echo esc_html(get_the_title(get_option('page_for_posts', true)));
				} elseif (is_search()) {
					esc_html_e('Results for: ', 'zinoviev-school');
					the_search_query();
				} elseif (is_single() || is_shop() || is_page()) {
					the_title();
				} else {
					the_archive_title();
				}
				?>
			</h1>

			<hr class="hr--dotted mt-4 mb-0">
			<?php brk_breadcrumbs(); ?>

		<?php else : ?>

			<h1 class="mt-5 text-uppercase">
				<?php
				if (is_home()) {
					echo esc_html(get_the_title(get_option('page_for_posts', true)));
				} elseif (is_search()) {
					esc_html_e('Results for: ', 'zinoviev-school');
					the_search_query();
				} else {
					the_archive_title();
				}
				?>
			</h1>

			<hr class="hr--dotted mt-4 mb-0">
			<?php brk_breadcrumbs(); ?>

		<?php endif; ?>
	</div>

</div>