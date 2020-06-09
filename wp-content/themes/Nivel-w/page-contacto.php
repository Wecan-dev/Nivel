<?php get_header();?>
  <!-- Banner-->
  <?php get_template_part('partials/contact/banner'); ?>
  <!-- End Banner-->

  <?php if ( have_posts() ) : the_post(); ?>
  <!-- Info-->
  <?php get_template_part('partials/contact/contact'); ?>
  <!-- End Info-->
  <?php endif; ?>

  <!-- Details-->
  <?php get_template_part('partials/contact/maps'); ?>
  <!-- End Details-->
  
<?php get_footer();?>