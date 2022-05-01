<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <section class="container-fluid py-5">
      <div class="container">

         <div class="row gx-5">
            <?php if (have_rows('locations', 'option')) : ?>
               <?php while (have_rows('locations', 'option')) : the_row(); ?>
                  <div class="col-md-6 col-lg-4">
                     <?php if (have_rows('location_single')) : ?>
                        <?php while (have_rows('location_single')) : the_row(); ?>

                           <div data-aos="zoom-in" class="contact-card mb-5">
                              <div class="location-photo">
                                 <?php $photo_location = get_sub_field('photo_location'); ?>
                                 <?php $size = 'brk_contact'; ?>
                                 <?php if ($photo_location) : ?>
                                    <?php echo wp_get_attachment_image($photo_location, $size, false, array('class' => 'img-fluid')); ?>
                                 <?php endif; ?>
                              </div>
                              <div class="contact-card-information shadow bg-white position-relative d-flex flex-column p-5 h-100 ">
                                 <span class="region-label position-absolute bg-primary text-uppercase text-white fs-6 fw-bolder px-3 py-1"><?php the_sub_field('region'); ?></span>
                                 <span class="person-trainer-name text-uppercase fw-bold fs-4"><?php the_sub_field('name_region_school'); ?></span>
                                 <hr class="hr--dotted">
                                 <div class="location-item fs-6 text-grey">
                                    <i class="fa-solid fa-location-dot mr-3"></i><?php the_sub_field('address'); ?>
                                 </div>
                                 <a href="tel:<?php the_sub_field('region_phone'); ?>" class="location-item fs-6 text-grey">
                                    <i class="fa-solid fa-phone mr-3"></i><?php the_sub_field('region_phone'); ?>
                                 </a>
                                 <a href="mailto:<?php the_field('contacts_email', 'option'); ?>" class="location-item fs-6 text-grey w-100">
                                    <i class="fa-solid fa-envelope mr-3"></i><?php the_field('contacts_email', 'option'); ?>
                                 </a>
                              <?php endwhile; ?>
                              <hr class="hr--dotted">
                              <div class="social-wrapper fs-5">
                                 <?php
                                 get_template_part('templates/components/socialicons', '');
                                 ?>
                              </div>
                              </div>
                           <?php endif; ?>
                           </div>
                  </div>
               <?php endwhile; ?>
            <?php else : ?>
               <?php // no rows found 
               ?>
            <?php endif; ?>
         </div>
         <div class="row mb-5">
            <div class="col-lg-5">
               <h2 class="text-uppercase mb-3"><?php esc_html_e('Work time', 'zinoviev-school'); ?></h2>
               <?php if (have_rows('working_hours', 'option')) : ?>
                  <table class="table table-time table-borderless text-grey fw-bold text-uppercase">
                     <tbody>
                        <?php while (have_rows('working_hours', 'option')) : the_row(); ?>
                           <tr>
                              <td><?php the_sub_field('den_nedeli'); ?></td>
                              <td><?php the_sub_field('vremya_raboty'); ?></td>
                           </tr>
                        <?php endwhile; ?>
                     </tbody>
                  </table>
               <?php else : ?>
                  <?php // no rows found 
                  ?>
               <?php endif; ?>
            </div>
            <div class="col-lg-7">
               <h2 class="text-uppercase mb-3"><?php esc_html_e('Leave a message', 'zinoviev-school'); ?></h2>
               <?php $cf7code = get_field('kontaktnaya_forma', 'option'); ?>
               <?php echo do_shortcode($cf7code); ?>
            </div>
         </div>
      </div>
   </section>
</article> <!-- #post-<?php the_ID(); ?> -->