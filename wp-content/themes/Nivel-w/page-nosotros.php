<?php get_header();?>

  <!-- Banner-->
    <?php get_template_part('partials/about/banner'); ?>
  <!-- End Banner-->

  
  <?php if ( have_posts() ) : the_post(); ?>

  <!-- About-->
   <?php get_template_part('partials/about/about'); ?>
  <!-- End About-->
  <!-- Experience-->
   <?php get_template_part('partials/about/experience'); ?>
  <!-- End Experience-->
  <?php endif;?>

   <!-- Testimonials-->
   <?php get_template_part('partials/about/testimonials'); ?>
  <!-- End Testimonials-->

  <!-- Video-->
  <?php get_template_part('partials/about/video'); ?>
  <!-- End Video-->

   <!-- Projects Grid-->
 <?php get_template_part('partials/index/projects-grid'); ?>
  <!-- End Projects Grid--->

<?php get_footer();?>