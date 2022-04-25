<div class="container">
  <div class="row">
    <div class="col-12">
      <div data-aos="zoom-in" class="dotafter-before h-100 w-100">
        <div class="swiper mySwiperTestimonial bg-white shadow">

          <h2 class="swiper-title text-center text-uppercase mt-5 mb-3"><?php esc_html_e('Testimonials', 'zinoviev-school'); ?></h2>
          <?php

          // WP Query
          $query = new WP_Query($args);

          // WP Loop
          if ($query->have_posts()) {
          ?>
            <div class="swiper-wrapper">
              <?php while ($query->have_posts()) {
                $query->the_post();

                /*Start Acf fields variable*/
                $texttestimonial = get_field('text_testimonial');
                $customertestimonial = get_field('name_customer');
                $citytestimonial = get_field('city');

                // Cut 295 symbols in except	
                $string = strip_tags($texttestimonial);
                if (strlen($string) > 250) {
                  // truncate string
                  $stringCut = substr($string, 0, 245);
                  $endPoint = strrpos($stringCut, ' ');
                  //if the string doesn't contain any space then it will cut without word basis.
                  $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                  $post_id = get_the_ID();
                  $string .= '... <span><a class="read_more_zw" href="/testimonials/#testimonial_' . $post_id . '">' . esc_html__('Read more', 'zinoviev-school') . ' </a></span>';
                };

                /*End - Acf fields variable*/
              ?>

                <!-- Html -->
                <div class="swiper-slide">
                  <p class="fs-5 text-center"><?php echo $string; ?></p>
                  <div class="swiper-footer position-relative mt-5 mb-3 mt-md-0 mb-md-0">
                    <div class="swiper-button-next"></div>
                    <p class="fs-4 fw-bolder text-primary text-center mb-0"><?php echo $customertestimonial; ?> - <?php echo $citytestimonial; ?></p>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
              <?php
              } ?>
            </div>
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
  <div class="row">
    <div class="col text-center mt-4">
      <a class="btn btn-outline-primary btn-lg m-2" href="#" data-fancybox="" data-src="#callbackmodal" target="_self"><?php esc_html_e('Leave Testimonial', 'zinoviev-school'); ?></a>
      <a class="btn btn-outline-primary btn-lg m-2" href="/testimonials/"><?php esc_html_e('All Testimonials', 'zinoviev-school'); ?></a>
    </div>
  </div>
</div>