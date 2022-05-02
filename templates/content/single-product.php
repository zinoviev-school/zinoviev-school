<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



   <?php the_post_thumbnail('brk_single', array('class' => 'img-fluid mb-3')); ?>

   <div>

      <?php
      the_content();
      ?>

   </div>

</article> <!-- #post-<?php the_ID(); ?> -->