<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section id="banner-service" class="service-banner">
        <div class="content-fluid m-0">

            <?php $image = get_field('image'); ?>
            <?php $size = 'brk_single_service_banner'; ?>
            <?php if ($image) : ?>
                <?php echo wp_get_attachment_image($image, $size, false, array('class' => 'img-fluid w-100')); ?>
            <?php endif; ?>
        </div>
    </section>
    <section class="service-content py-5">
        <div class=" container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-basic-info shadow bg-white p-5 pt-4">

                        <?php brk_breadcrumbs(); ?>
                        <hr class="hr--dotted mt-0">
                        <h2 class="service-title text-uppercase fs-1 mb-3"><?php the_title(); ?></h2>
                        <p class="service-text fs-5-1 text-grey"><?php the_field('main_text'); ?></p>
                        <div class="sevice-list position-relative w-100 my-4">

                            <?php if (have_rows('service_list')) : ?>
                                <?php while (have_rows('service_list')) : the_row(); ?>

                                    <div class="sevice-list-item d-flex align-items-center">
                                        <span class="text-uppercase fw-bold fs-6">
                                            <?php the_sub_field('text_list'); ?>
                                        </span>
                                        <span class="skills-list-line position-relative flex-grow-1"></span>
                                        <span class="skill-list-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <?php // no rows found 
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="box-location d-flex mb-4">
                            <div class="location-item col-6 fs-6 fw-bold text-grey">
                                <i class="fa-solid fa-location-dot mr-3"></i><?php the_field('location'); ?>
                            </div>
                            <div class="location-item col-6 fs-6 fw-bold text-grey">
                                <i class="fa-solid fa-circle-info mr-3"></i><?php the_field('specification'); ?>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-lg w-100" href="#" data-fancybox="" data-src="#callbackmodal" target="_self">Book a lesson</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-2">
                        <?php if (have_rows('photos_gallery')) : ?>
                            <?php while (have_rows('photos_gallery')) : the_row(); ?>
                                <?php if (have_rows('element_galerei')) : ?>
                                    <?php while (have_rows('element_galerei')) : the_row(); ?>
                                        <?php if (get_sub_field('est_video') == 1) : ?>
                                            <div class="col-4">
                                                <?php $youtube_url = get_sub_field('youtube_link'); ?>
                                                <?php $youtube_id =  getYoutubeIdFromUrl($youtube_url); ?>
                                                <?php $youtube_preview = 'https://img.youtube.com/vi/' . $youtube_id . '/mqdefault.jpg'; ?>
                                                <a class="video_fancybox" data-caption="" data-fancybox="single_service" href="<?php echo $youtube_url; ?>">
                                                    <div class="video_wrapper h-100">
                                                        <img class="img-fluid h-100" src="<?php echo $youtube_preview; ?>" width="230" height="150" />
                                                    </div>
                                                </a>
                                            </div>
                                        <?php else : ?>
                                            <?php $photo_gallery = get_sub_field('photo_gallery'); ?>
                                            <?php $size = 'brk_single_service_gallery'; ?>
                                            <?php if ($photo_gallery) : ?>
                                                <div class="col-4">
                                                    <a data-fancybox="single_service" data-caption="" href="<?php echo wp_get_attachment_image_url($photo_gallery, 'brk_single'); ?>">
                                                        <?php echo wp_get_attachment_image($photo_gallery, $size, false, array('class' => 'img-fluid')); ?></a>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found 
                            ?>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-adv py-5 background-gradient">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-5"><?php esc_html_e('How is the training going', 'zinoviev-school'); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div data-aos="zoom-in-up" class="bg-white d-flex flex-column h-100 p-5">
                        <div class="h4 adv-item-title text-uppercase"><?php echo nl2br(esc_html__("Individual\ntraining", 'zinoviev-school')); ?></div>
                        <hr class="hr--dotted">
                        <p class="text-adv mb-4 fs-5-1 flex-grow-1"><?php esc_html_e('Allows you to use the features and abilities of the student and contributes to the rapid learning and achievement of results.', 'zinoviev-school'); ?></p>
                        <div class="footer-item-img text-center">
                            <img class="img-fluid swim-logo-people" src="/wp-content/themes/zinoviev-school/src/img/people.svg" alt="people" loading="lazy" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div data-aos="zoom-in-up" class="bg-white d-flex flex-column h-100 p-5">
                        <div class="h4 adv-item-title text-uppercase"><?php echo nl2br(esc_html__("Author's\ntechnique", 'zinoviev-school')); ?></div>
                        <hr class="hr--dotted">
                        <p class="text-adv mb-4 fs-5-1 flex-grow-1"><?php esc_html_e('We took the best practices of domestic and foreign swimming training. We are not looking for champions, we are creating them.', 'zinoviev-school'); ?></p>
                        <div class="footer-item-img text-center">
                            <img class="img-fluid swim-logo-people" src="/wp-content/themes/zinoviev-school/src/img/people.svg" alt="people" loading="lazy" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div data-aos="zoom-in-up" class="bg-white d-flex flex-column h-100 p-5">
                        <div class="h4 adv-item-title text-uppercase"><?php echo nl2br(esc_html__("Team of\nprofessionals", 'zinoviev-school')); ?></div>
                        <hr class="hr--dotted">
                        <p class="text-adv mb-4 fs-5-1 flex-grow-1"><?php esc_html_e('Our trainers are swimmers with proven skills, specialized education and extensive work experience.', 'zinoviev-school'); ?></p>
                        <div class="footer-item-img text-center">
                            <img class="img-fluid swim-logo-people" src="/wp-content/themes/zinoviev-school/src/img/people.svg" alt="people" loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="service-other-training py-5">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-5"><?php esc_html_e('Other training', 'zinoviev-school'); ?></h2>
            </div>
            <div class="row g-5">

                <?php $other_service = get_field('other_service'); ?>
                <?php if ($other_service) : ?>
                    <?php foreach ($other_service as $post_ids) : ?>

                        <?php $who_is_the_service_for = get_field('who_is_the_service_for', $post_ids); ?>
                        <?php if ($who_is_the_service_for) : ?>
                            <?php $get_terms_args = array(
                                'taxonomy' => 'service_category',
                                'hide_empty' => 0,
                                'include' => $who_is_the_service_for,
                            ); ?>
                            <?php $terms = get_terms($get_terms_args); ?>
                            <?php if ($terms) : ?>
                                <?php foreach ($terms as $term) : ?>
                                    <?php $service_age =  esc_html($term->name); ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="training-card-wrap col-lg-6">
                            <div class="training-card d-md-flex">
                                <div class="training-card-photo col-md-5">
                                    <div data-aos="zoom-in" class="training-photo">
                                        <?php echo get_the_post_thumbnail($post_ids, 'brk_single_service_relative', array('class' => 'img-fluid')); ?>
                                    </div>
                                </div>
                                <div class="training-card-information shadow bg-white col-md-7">
                                    <div data-aos="zoom-in" class="box-information d-flex flex-column p-5 h-100 ">
                                        <span class="person-training-label person-trainer-label bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php echo $service_age; ?></span>
                                        <span class="person-training-name text-uppercase fw-bold fs-3 my-4"><?php echo get_the_title($post_ids); ?></span>
                                        <div class="person-skills position-relative w-100">
                                            <?php echo $postid;
                                            if (have_rows('service_list', $post_ids)) : ?>
                                                <?php while (have_rows('service_list', $post_ids)) : the_row(); ?>
                                                    <div class="person-training-skills d-flex align-items-center">
                                                        <span class="trainer-skill text-uppercase fw-bold fs-6">
                                                            <?php the_sub_field('text_list'); ?>
                                                        </span>
                                                        <span class="skills-list-line position-relative flex-grow-1"></span>
                                                        <span class="skill-list-icon"><i class="fa-solid fa-check"></i></span>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <?php // no rows found 
                                                ?>
                                            <?php endif; ?>
                                        </div>
                                        <p class="person-information my-4"><?php echo get_the_excerpt($post_ids); ?></p>
                                        <a class="btn btn-primary btn-lg w-100" href="<?php echo get_permalink($post_ids); ?>" target="_self"><?php esc_html_e('More details', 'zinoviev-school'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="service-coaching py-5 background-gradient">
        <div class="container">
            <div class="section-title">
                <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-5"><?php esc_html_e('Coaching staff', 'zinoviev-school'); ?></h2>
            </div>
            <div class="row g-5">
                <?php $trainers = get_field('trainers'); ?>
                <?php if ($trainers) : ?>
                    <?php foreach ($trainers as $post_ids) : ?>
                        <?php $positions = get_field('positions', $post_ids); ?>
                        <?php $term = get_term_by('id', $positions, 'position'); ?>
                        <?php if ($term) : ?>
                            <?php $jobtitle = esc_html($term->name); ?></a>
                        <?php endif; ?>
                        <div data-aos="zoom-in" class="training-card-wrap col-md-6 col-lg-4">
                            <div class="training-card">
                                <div class="training-card-photo col-12 position-relative">
                                    <div class="training-photo">
                                        <?php echo get_the_post_thumbnail($post_ids, 'brk_square', array('class' => 'img-fluid w-100')); ?>
                                    </div>
                                    <span class="person-trainer-label position-absolute bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php echo $jobtitle; ?></span>
                                </div>
                                <div class="training-card-information shadow bg-white col-12">
                                    <div class="box-information d-flex flex-column p-5 h-100 ">
                                        <span class="person-training-name text-uppercase fw-bold fs-3 mb-3"><?php echo get_the_title($post_ids); ?></span>
                                        <p class="person-information mb-3"><?php the_field('main_text', $post_ids); ?></p>
                                        <div class="person-skills position-relative d-flex">
                                            <?php if (have_rows('language_speak', $post_ids)) : ?>
                                                <?php while (have_rows('language_speak', $post_ids)) : the_row(); ?>
                                                    <div class="person-training-skills bg-secondary mr-3">
                                                        <span class="trainer-skill text-uppercase fw-bold fs-6 text-light">
                                                            <?php the_sub_field('language'); ?>
                                                        </span>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <?php // no rows found 
                                                ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="cta-faq py-5">
        <?php

        $args = array(
            'post_type' => 'faq',
        );

        get_template_part('templates/sections/home', 'faq_cta', $args);

        ?>
    </section>

</article> <!-- #post-<?php the_ID(); ?> -->