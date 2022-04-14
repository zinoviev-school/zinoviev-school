<div class="container">
    <div class="row">
        <div class="section-title">
            <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-5"><?php esc_html_e('Faq', 'zinoviev-school'); ?></h2>
        </div>
        <div class="col-12">
            <div data-aos="zoom-in" class="shadow bg-white h-100 w-100">
                <div class="accordion" id="myAccordionFaq">

                    <?php
                    // WP Query
                    $query = new WP_Query($args);

                    // WP Loop
                    if ($query->have_posts()) {
                        $itemcount = 1;
                    ?>
                        <?php while ($query->have_posts()) {
                            $query->the_post();
                        ?>
                            <div class="accordion-item-<?php echo $itemcount; ?>">
                                <h3 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed text-uppercase mb-0 fs-6 fw-bolder" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php the_id(); ?>"><?php the_title(); ?></button>
                                </h3>
                                <div id="collapseOne<?php the_id(); ?>" class="accordion-collapse collapse" data-bs-parent="#myAccordionFaq">
                                    <div class="collapse-body p-4"><?php the_content(); ?></div>
                                </div>
                            </div>
                            <?php $itemcount++; ?>
                        <?php } ?>
                    <?php    } else {

                        // Постов не найдено
                    }

                    // Возвращаем оригинальные данные поста. Сбрасываем $post.
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>