<?php get_header();?>
  <!-- Banner-->
  <?php get_template_part('partials/services/banner'); ?>
  <!-- End Banner-->
  <?php if ( have_posts() ) : the_post(); ?>
  <!-- About-->
  <?php get_template_part('partials/services/about'); ?>
  <!-- End About-->

  <!-- Steps-->
  <?php get_template_part('partials/services/steps'); ?>
  <!-- End Steps-->
  <?php endif; ?>
  <!-- Contact-->
  <?php get_template_part('partials/services/contact'); ?>
  <!-- End Contact-->
  
  <!-- Details-->
  <?php get_template_part('partials/index/contact'); ?>
  <!-- End Details-->
  
<?php get_footer();?>