<?php
if (is_woocommerce() || is_shop()) { ?>
	<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-woo'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php
} elseif (is_post_type_archive('services') || is_tax('service_category')) { ?>
	<aside id="sidebar-main-wrapper" class="sidebar-services col-sm-5 col-lg-4 mt-5 mt-md-0 pe-sm-4 pe-lg-5">
		<?php dynamic_sidebar('sidebar-services'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php
} elseif (is_post_type_archive('testimonials')) { ?>
	<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-testimonials'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php
} else { ?>
	<aside id="sidebar-main-wrapper" class="col-sm-4 mt-5 mt-md-0 ps-md-5">
		<?php dynamic_sidebar('sidebar-main'); ?>
	</aside> <!-- #sidebar-main-wrapper -->
<?php
}
?>