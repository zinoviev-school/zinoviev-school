<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">

	<?php
	if (is_woocommerce() || is_shop()) {
		dynamic_sidebar('sidebar-woo');
	} elseif (is_archive('testimonials') || is_singular('testimonials')) {
		dynamic_sidebar('sidebar-testimonials');
	} else {
		dynamic_sidebar('sidebar-main');
	}
	?>

</aside> <!-- #sidebar-main-wrapper -->