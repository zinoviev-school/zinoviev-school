<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <div class="row align-items-center">

        <?php
        /*Start Acf fields variable*/
        $texttestimonial = get_field('text_testimonial');
        $customertestimonial = get_field('name_customer');
        $citytestimonial = get_field('city');
        ?>

        <h2><a href="<?php the_permalink(); ?>"><?php echo $customertestimonial; ?> - <?php echo $citytestimonial; ?></a></h2>

        <p><?php the_time(get_option('date_format')); ?></p>

        <div class="col-lg-8 mb-4 mb-lg-0">
            <div><?php echo $texttestimonial; ?></div>
        </div>
        <div class="col-lg-4">

            <?php if (get_field('video') == 1) : ?>

                <?php if (get_field('youtube_or_local_video') == 'youtube') :  ?>

                    <?php $youtube_url = get_field('youtube_link'); ?>
                    <?php $youtube_id =  getYoutubeIdFromUrl($youtube_url); ?>
                    <?php $youtube_preview = 'https://img.youtube.com/vi/' . $youtube_id . '/mqdefault.jpg'; ?>
                    <div class="img_banner">
                        <a class="video_fancybox" data-caption="<?php echo $customertestimonial; ?> - <?php echo $citytestimonial; ?>" data-fancybox="testimonialvideo" href="<?php echo $youtube_url; ?>">
                            <div class="video_wrapper">
                                <img class="img-fluid w-100" src="<?php echo $youtube_preview; ?>" width="250" height="150" />
                            </div>
                        </a>
                    </div>


                <?php elseif (get_field('youtube_or_local_video') == 'local video') : ?>
                    <?php $preview_video = get_field('preview_video'); ?>
                    <?php if ($preview_video) : ?>
                        <?php $previewlocalvideo = esc_url($preview_video['url']); ?>
                    <?php endif; ?>

                    <?php $upload_video = get_field('upload_video'); ?>

                    <?php if ($upload_video) : ?>


                        <a data-fancybox="testimonialvideo" href="<?php echo esc_url($upload_video['url']); ?>" data-width="800" data-height="500">
                            <div class="video_wrapper">
                                <img class="img-fluid w-100" src="<?php echo $previewlocalvideo; ?>" width="200" height="150" />
                            </div>
                        </a>


                    <?php endif; ?>

                <?php endif; ?>


            <?php else : ?>
                <?php // echo 'false'; 
                ?>
            <?php endif; ?>

        </div>
        <hr class="hr--dotted mt-4">
    </div>
</article> <!-- #post-<?php the_ID(); ?> -->