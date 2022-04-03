<nav id="header-simple" class="navbar navbar-expand-lg navbar-dark">

	<div class="container">

		<?php if ( has_custom_logo() ) {

			the_custom_logo();

		} else { ?>

			<a class="navbar-brand" href="<?php echo esc_url_raw( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>

		<?php } ?>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-simple-menu" aria-controls="header-simple-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div id="header-simple-menu" class="collapse navbar-collapse">
			<?php

			wp_nav_menu(
				array(
					'theme_location'    => 'header',
					'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns, 3 = multilevel dropdowns
'container'       => 'div',
'container_class' => 'justify-content-end',
'container_id'    => 'bs-navbar-collapse-1',
'menu_class'      => 'nav navbar-nav text-capitalize',
'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
'walker'          => new WP_Bootstrap_Navwalker()
				)
			);

			get_search_form();

			if ( class_exists( 'ACF' ) ) {
				get_template_part( 'templates/components/socialicons', '' );
			};

			?>
		</div>

	</div>

</nav>

<script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
<script>

$('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
$('.dropdown-submenu > a').on("click", function(e) {
  var dropdown = $(this).parent().find(' > .show');
  $('.dropdown-submenu .dropdown-menu').not(dropdown).removeClass('show');
  $(this).next('.dropdown-menu').toggleClass('show');
  e.stopPropagation();
});
$('.dropdown').on("hidden.bs.dropdown", function() {
  $('.dropdown-menu.show').removeClass('show');
});
</script>


<?php 
