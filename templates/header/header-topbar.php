<div id="header-topbar" class="navbar navbar-expand navbar-dark">
	<div class="container justify-content-between">
		<?php
		get_template_part('templates/components/socialicons', '');
		?>
		<a href="tel:<?php the_field('contacts_phone', 'option'); ?> "><i class="fa-solid fa-phone"></i><?php the_field('contacts_phone', 'option'); ?></a>
	</div>
</div>