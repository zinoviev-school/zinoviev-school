<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-4"><?php esc_html_e('About our school', 'zinoviev-school'); ?></h2>
                </div>
                <div data-aos="fade-down" class="fs-1 col-lg-6"><?php the_field('text_after_title'); ?></div>

                <div class="row py-5">
                    <div class="col-md-6 pe-lg-5">
                        <p class="fs-5 lh-lg"><?php the_field('text_about_us'); ?></p>
                    </div>
                    <div class="col-md-6 d-flex about-photo">
                        <?php $photo_us = get_field('photo_us'); ?>
                        <?php $size = 'full'; ?>
                        <?php if ($photo_us) : ?>
                            <?php echo wp_get_attachment_image($photo_us, $size, false, array('class' => 'img-fluid object-fit-cover')); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="section-testimonials" class="container-fluid py-5">
        <?php

        $args = array(
            'post_type' => 'testimonials',

        );

        get_template_part('templates/sections/home', 'testimonials', $args);

        ?>
    </section>
    <section id="section-trainers" class="py-5">
        <?php

        get_template_part('templates/sections/select', 'trainers');

        ?>
    </section>
    <section id="section-faq-cta" class="py-5">
        <?php

        $args = array(
            'post_type' => 'faq',
        );

        get_template_part('templates/sections/home', 'faq_cta', $args);

        ?>
    </section>
</article> <!-- #post-<?php the_ID(); ?> -->