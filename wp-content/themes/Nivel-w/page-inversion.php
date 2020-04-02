<?php get_header();?>
  <!-- Banner-->
  <?php get_template_part('partials/investment/banner'); ?>
  <!-- End Banner-->
  <?php if ( have_posts() ) : the_post(); ?>
  <!-- Details-->
  <?php get_template_part('partials/investment/details'); ?>
  <!-- End Details-->
<?php endif;?>
  <!-- Steps-->
  <?php get_template_part('partials/investment/steps'); ?>
  <!-- End Steps-->

  <!-- Contact-->
  <?php get_template_part('partials/investment/contact'); ?>
  <!-- End Contact-->
  
<?php get_footer();?>