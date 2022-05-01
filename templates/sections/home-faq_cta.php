<div class="container">
    <div class="section-title">
        <h2 data-aos="fade-down" class="bg-title-section text-white bg-primary px-3 py-2 mb-5"><?php esc_html_e('Have questions', 'zinoviev-school'); ?></h2>
    </div>
    <div class="row g-5">

        <div class="col-lg-6">
            <div id="section-faq" data-aos="zoom-in" class="shadow bg-white h-100 w-100">
                <div class="accordion d-flex flex-column h-100" id="myAccordionFaq">

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

        <div class="col-lg-6">

            <div data-aos="zoom-in" class="cta-card-wrap">
                <div class="cta-card d-md-flex">
                    <div class="cta-card-photo col-md-6">
                        <div class="training-photo h-100">
                            <img class="img-fluid h-100" src="/wp-content/themes/zinoviev-school/src/img/aleksey.jpg" />
                        </div>
                    </div>
                    <div class="cta-card-information position-relative shadow bg-secondary col-md-6">
                        <div data-aos="zoom-in" class="box-information d-flex flex-column justify-content-center p-5 h-100 ">
                            <span class="cta-label position-absolute bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php esc_html_e('Have questions', 'zinoviev-school'); ?></span>
                            <span class="cta-name flex-grow-1 text-uppercase text-white fw-bold fs-4 my-5 my-lg-0"><?php esc_html_e('Ask the founder of the school.', 'zinoviev-school'); ?></span>
                            <div class="d-flex justify-content-end">
                                <a class="cta-icons__link text-white fs-4 mr-3" href="https://wa.me/66988869108" target="_blank"><i class="fab fa-whatsapp fa-fw"></i></a>
                                <a class="cta-icons__link text-white fs-4 mr-3" href="tel:<?php the_field('contacts_phone', 'option'); ?>" target="_blank"><i class="fa-solid fa-phone"></i></a>
                                <a class="cta-icons__link text-white fs-4" href="https://telegram.me/plavanieZinoviev" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>