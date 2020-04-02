<?php get_header();?>

<?php while ( have_posts() ) : the_post(); ?>
  <!-- Banner-->
  <?php get_template_part('partials/project/banner'); ?>
  <!-- End Banner-->

  <!-- Info-->
  <?php get_template_part('partials/project/info'); ?>
  <!-- End Info-->
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <!-- Details-->
  <?php get_template_part('partials/project/details'); ?>
  <!-- End Details-->

  <!-- Zone-->
  <?php get_template_part('partials/project/zone'); ?>
  <!-- End Zone-->

    <!-- Map-->
    <?php get_template_part('partials/project/maps'); ?>
  <!-- End Map-->

   <!-- Advances-->
   <?php get_template_part('partials/project/advances'); ?>
  <!-- End Advances-->

   <!-- Gallery-->
   <?php get_template_part('partials/project/gallery'); ?>
  <!-- End Gallery-->


  <!-- Contact-->
  <?php get_template_part('partials/project/contact-map'); ?>
  <!-- End Contact-->
  
<?php get_footer();?>