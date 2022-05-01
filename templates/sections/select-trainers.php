<div class="container">
    <div class="section-title">
        <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-4"><?php esc_html_e('Coaching staff', 'zinoviev-school'); ?></h2>
    </div>
    <div data-aos="fade-down" class="fs-1 mb-5 col-lg-6"><?php esc_html_e('The professionalism of the coaching staff is the foundation of our Swimming School.', 'zinoviev-school'); ?></div>
    <div class="row g-5 select-trainers">
        <?php $trainers = get_field('trainers', 'option'); ?>
        <?php if ($trainers) : ?>
            <?php foreach ($trainers as $post_ids) : ?>
                <?php $positions = get_field('positions', $post_ids); ?>
                <?php $term = get_term_by('id', $positions, 'position'); ?>
                <?php if ($term) : ?>
                    <?php $jobtitle = esc_html($term->name); ?></a>
                <?php endif; ?>
                <div data-aos="zoom-in" class="training-card-wrap col-md-6 col-lg-4">
                    <div class="trainer-card">
                        <div class="trainer-card-photo col-12 position-relative">
                            <div class="trainer-photo">
                                <?php echo get_the_post_thumbnail($post_ids, 'brk_square', array('class' => 'img-fluid w-100')); ?>
                            </div>
                            <span class="person-trainer-label position-absolute bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php echo $jobtitle; ?></span>
                        </div>
                        <div class="trainer-card-information shadow bg-white col-12">
                            <div class="box-information d-flex flex-column p-5 h-100 ">
                                <span class="person-training-name text-uppercase fw-bold fs-3 mb-3"><?php echo get_the_title($post_ids); ?></span>

                                <div class="read-item">
                                    <input type="checkbox" class="read-more-state" id="post-<?php echo $post_ids ?>" />

                                    <p class="read-more-wrap mb-0"><?php the_field('main_text', $post_ids); ?><span class="dots">...</span><span class="read-more-target"><?php the_field('skills', $post_ids); ?></span></p>

                                    <label for="post-<?php echo $post_ids ?>" class="read-more-trigger fs-6 mb-3"></label>
                                </div>


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