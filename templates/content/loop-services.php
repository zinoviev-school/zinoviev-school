<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5 col-md-12 col-lg-6 d-flex flex-column'); ?>>


    <div class="head-imag w-100 mb-4">
        <a href="<?php the_permalink(); ?>">
            <?php $image = get_field('image', $post_ids); ?>
            <?php $size = 'brk_single-small'; ?>
            <?php if ($image) : ?>
                <?php echo wp_get_attachment_image($image, $size, false, array('class' => 'img-fluid w-100')); ?>
            <?php endif; ?>
        </a>
    </div>
    <h2><a class="text-uppercase text-dark fs-4" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="fs-5-1 text-grey flex-grow-1"><?php the_excerpt(); ?></div>
    <a class="btn btn-primary btn-lg w-100" href="<?php the_permalink(); ?>" target="_self"><?php esc_html_e('More details', 'zinoviev-school'); ?></a>

</article> <!-- #post-<?php the_ID(); ?> -->