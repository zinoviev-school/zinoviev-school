<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
<path d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"></path></svg>
<div class="container">
        <div class="section-title">
            <h2 class="bg-title-section bg-primary px-3 py-2 mb-5"><?php esc_html_e( 'Coaching staff', 'zinoviev-school' ); ?></h2>
        </div>
            <div class="trainer-card shadow d-md-flex">
                <?php
                    // WP Query
                    $query = new WP_Query( $args );

                    // WP Loop
                    if ( $query->have_posts() ) { 
                    ?>


                            <?php while ( $query->have_posts() ) {
                                    $query->the_post();

                            ?>
                            <!-- Html -->

                        <div class="trainer-card-photo col-md-6 col-lg-4">
                                <div class="trainer-photo">
                                    <img class="trainer-card-img" src="<?php the_post_thumbnail_url( 'brk_square' ); ?>" alt="<?php brk_thumbnail_alt(); ?>" loading="lazy" />
                                </div>
                        </div>
                        <div class="trainer-card-information col-md-6 col-lg-8">
                            <div class="box-information d-flex flex-column p-5 h-100">
                                    <?php
                                        $positions = get_field( 'positions' ); 
                                    $term = get_term_by( 'id', $positions, 'position' ); 
                                    if ( $term ) : 
                                        echo esc_html( $term->name ); 
                                    endif;
                                    ?>
                                <span class="person-trainer-label bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php '.$positions.' ?></span>
                                <span class="person-trainer-name text-uppercase fw-bold fs-3 my-4"><?php the_title(); ?></span>
                                <p class="person-information"><?php the_field( 'main_text' ); ?></p>
                                <div class="accordion mb-3" id="myAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button type="button" class="accordion-button collapsed mb-2 fs-6 fw-bolder" data-bs-toggle="collapse" data-bs-target="#collapseOne">More information</button>									
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
                                            <div class="mt-2">
                                            <p><?php the_field( 'skills' );?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="person-skills position-relative w-100">
                                    <?php
                                                $types_of_trayning = get_field( 'types_of_trayning' ); 
                                        if ( $types_of_trayning ) : 
                                            $get_terms_args = array(
                                                'taxonomy' => 'types_of_training',
                                                'hide_empty' => 0,
                                                'include' => $types_of_trayning,
                                            );
                                            $terms = get_terms( $get_terms_args ); 
                                            if ( $terms ) :
                                    ?>    
                                    <div class="person-trainer-skills d-flex align-items-center">

                                        <?php foreach ( $terms as $term ) : ?>
                                        <span class="trainer-skill text-uppercase fw-bold fs-6">
                                            <?php echo esc_html( $term->name ); ?>
                                            <?php endforeach; ?>
                                            <?php endif;?>
                                        </span>
                                        <span class="skills-list-line position-relative flex-grow-1"></span>
                                        <span class="skill-list-icon"><i class="fa-solid fa-check"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php   
                endif; 
                    }
                } else {
                    // Постов не найдено
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </div>
</div>
