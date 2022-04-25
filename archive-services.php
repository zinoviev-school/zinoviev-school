<?php get_header(); ?>

<main id="content-wrapper">

   <?php

   get_template_part('templates/sections/common', 'pageheader');
   ?>

   <div class="container-fluid">
      <div class="container">

         <?php
         // Get this page slug
         $slug = $post->post_name;

         // Check if template file exists, set the template to be used
         $template_name = (is_file(get_theme_file_path('templates/content/page-' . $slug . '.php'))) ? $slug : '';

         get_template_part('templates/content/page', $template_name);
         ?>

      </div>
   </div>



</main> <!-- #content-wrapper -->

<?php
get_footer();
