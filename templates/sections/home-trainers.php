<div class="container">
        if ($query->have_posts()) {
        ?>
            <?php while ($query->have_posts()) {
                $query->the_post();

                            /*Start Acf fields variable*/
                                    $positions = get_field( 'positions' ); 
                                    $term = get_term_by( 'id', $positions, 'position' ); 
                                    if ( $term ) : 
                                        $position = esc_html( $term->name ); 
                                    endif;
                             /*End - Acf fields variable*/       
                                    ?>
                            <!-- Html -->
                            <div class="trainer-card shadow bg-white d-md-flex mb-5">
                        <div class="trainer-card-photo col-md-6 col-lg-4">
                                <div data-aos="zoom-in" class="trainer-photo">
                                    <?php 
                                    $post_thumbnail_id = get_post_thumbnail_id( $post );
                                    printf( '<img class="trainer-card-img" src="%s" srcset="%s">',
	                                wp_get_attachment_image_url( $post_thumbnail_id ),
                                	wp_get_attachment_image_srcset( $post_thumbnail_id, 'brk_square' )
                                    );
                                    ?>
                                </div>
                        </div>
                        <div data-aos="fade-left" class="trainer-card-information col-md-6 col-lg-8">
                            <div class="box-information d-flex flex-column p-5 h-100">
                                    
                                <span class="person-trainer-label bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php echo $position; ?></span>
                                <span class="person-trainer-name text-uppercase fw-bold fs-3 my-4"><?php the_title(); ?></span>
                                <p class="person-information"><?php the_field( 'main_text' ); ?></p>
                                <div class="accordion mb-3" id="myAccordion<?php the_id();?>">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button type="button" class="accordion-button collapsed mb-2 fs-6 fw-bolder" data-bs-toggle="collapse" data-bs-target="#collapseOne<?php the_id();?>">More information</button>									
                                        </h2>
                                        <div id="collapseOne<?php the_id();?>" class="accordion-collapse collapse" data-bs-parent="#myAccordion<?php the_id();?>">                                           
                                            <p><?php the_field( 'skills' );?></p>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person-skills position-relative w-100">
                                <?php
                                $types_of_trayning = get_field('types_of_trayning');
                                if ($types_of_trayning) :
                                    $get_terms_args = array(
                                        'taxonomy' => 'types_of_training',
                                        'hide_empty' => 0,
                                        'include' => $types_of_trayning,
                                    );
                                    $terms = get_terms($get_terms_args);
                                    if ($terms) :   ?>
                                        <?php foreach ($terms as $term) : ?>
                                            <div class="person-trainer-skills d-flex align-items-center">
                                                <span class="trainer-skill text-uppercase fw-bold fs-6">
                                                    <?php echo esc_html($term->name); ?>
                                                </span>
                                                <span class="skills-list-line position-relative flex-grow-1"></span>
                                                <span class="skill-list-icon"><i class="fa-solid fa-check"></i></span>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
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