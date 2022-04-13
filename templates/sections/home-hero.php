<div class="swiper swiper-container">
	<div class="swiper-wrapper">
		<?php if (have_rows('hero_banner', 'option')) : ?>
			<?php while (have_rows('hero_banner', 'option')) : the_row(); ?>
				<?php $size = 'full'; ?>
				<div class="swiper-slide">
					<?php if (get_sub_field('dobavit_video') == 1) : ?>
						<?php if (get_sub_field('zagruzit_video')) : ?>
							<?php $videourl = get_sub_field('zagruzit_video'); ?>
						<?php endif; ?>
						<?php if (get_sub_field('zagruzit_poster_k_video')) : ?>
							<?php $postervideo = get_sub_field('zagruzit_poster_k_video'); ?>
						<?php endif ?>
						<!-- VIDEO -->
						<video autoplay muted loop class="myVideo">
							<source src="<?php echo $videourl; ?>" type="video/mp4">
						</video>
						<!-- END VIDEO -->
					<?php else : ?>
						<?php $photo = get_sub_field('photo'); ?>
						<?php if ($photo) : ?>
							<?php echo wp_get_attachment_image($photo, $size); ?>
						<?php endif; ?>
					<?php endif; ?>
					<div class="container-fluid hero_title_wrap">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-6">
									<div class="hero_title h1 text-uppercase"><?php the_sub_field('text_on_banner'); ?></div>
									<div class="hero_sub_title h3"><?php the_sub_field('podzagolovok'); ?></div>
									<a class="btn btn-primary btn-lg" href="#" data-fancybox="" data-src="#callbackmodal" target="_self"><?php the_sub_field('text_on_button'); ?></a>
									<a class="btn btn-light btn-lg" href="#" data-fancybox="" data-src="#callbackmodal" target="_self"><?php the_sub_field('text_on_button'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php get_sub_field('class_button'); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found 
			?>
		<?php endif; ?>
	</div>
	<div class="next">
		<div class="swiper-button-next"></div>
	</div>
	<div class="prev">
		<div class="swiper-button-prev"></div>
	</div>
</div>
<div id="callbackmodal" style="display:none">
	<div class="h1"> <?php esc_html_e('Order form', 'zinoviev-school'); ?></div>
	<?php echo do_shortcode('[contact-form-7 id="55" title="Контактная форма 1"]'); ?>
</div>