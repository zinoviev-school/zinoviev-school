<div class="container">
<div class="row hero-bottom-row gy-4">
<?php $category_bottom_banner = get_field( 'category_bottom_banner', 'option' ); ?>

<?php if ( $category_bottom_banner ) : ?>
	<?php foreach ( $category_bottom_banner as $term ) : ?>	
		<div class="col-md-6 col-lg-3">
			<div data-aos="zoom-in-up" class="hero-bottom-item d-flex flex-column h-100">			
<?php $taxonomy_prefix = 'types_of_services';?>
<?php $term_id = $term->term_id; ?>
<?php $term_id_prefixed = $taxonomy_prefix .'_'. $term_id; ?>
<img class="img-fluid" <?php acf_responsive_images( get_field( 'foto_kategorii', $term_id_prefixed ), 'brk_banner_bottom', '320px' ); //Требуется функция acf_responsive_images - находится в custom.php ?> /> 
                <div class="d-flex flex-column h-100 p-5 p-md-0 pt-md-4">
				<div class="fs-5 fw-bolder hero-bottom-title text-uppercase mb-2"><?php esc_html_e(  $term->name, 'zinoviev-school' ); ?></div>
				<p class="text-hero-bottom mb-2 flex-grow-1"><?php esc_html_e( 'Allows you to use the features and abilities of the student and contributes to the rapid learning and achievement of results.', 'zinoviev-school' ); ?></p>
                <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="more-link fs-6 fw-bolder text-uppercase">
					 <?php esc_html_e( 'More details', 'zinoviev-school' ); ?></a>
                </div>
			</div>
		</div>
	<?php endforeach; ?>
<?php endif; ?>
         <div class="col-md-6 col-lg-3">
         <div data-aos="zoom-in-up" class="h-100 bg-light shadow p-4">
         <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'new-widget-area' ); ?>
<?php endif; ?>
</div>
		</div>
	</div>
</div>