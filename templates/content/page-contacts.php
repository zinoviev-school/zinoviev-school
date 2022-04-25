<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <div class="row py-5">
      <div class="col-sm-12">
         <div>
            <?php
            the_content();
            ?>
         </div>
      </div>
   </div>
</article> <!-- #post-<?php the_ID(); ?> -->