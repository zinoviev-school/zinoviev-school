<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <div class="row align-items-center">

        <?php
        /*Start Acf fields variable*/
        $texttestimonial = get_field('text_testimonial');
        $customertestimonial = get_field('name_customer');
        $citytestimonial = get_field('city');
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php echo $customertestimonial; ?> - <?php echo $citytestimonial; ?></a></h2>

        <p><?php the_time(get_option('date_format')); ?> - <?php the_category(', '); ?></p>

        <div class="col-md-9 mb-4 mb-md-0">

            <!--<a href="<?php //the_permalink(); 
                            ?>">
                <?php
                //the_post_thumbnail(
                // 'brk_single',
                //array(
                //'class' => 'img-fluid mb-3',
                //'alt' => get_the_title(),
                //)
                //);
                ?>
            </a>-->

            <div><?php echo $texttestimonial; ?></div>
        </div>
        <div class="col-md-3">
            <img class="img-fluid" src="http://placekitten.com/800/600" />
        </div>
        <hr class="hr--dotted mt-4">
    </div>
</article> <!-- #post-<?php the_ID(); ?> -->