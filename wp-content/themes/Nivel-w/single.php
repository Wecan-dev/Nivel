<?php get_header();?>
  <!-- Banner-->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part('partials/single/banner'); ?>
  <!-- End Banner-->

  <!-- Blog Single-->
  <section id="main-blog" class="main-blog">
		<div class="container">
			<div class="main-blog__bloggrid">
				
         <!-- Content-->
         <?php get_template_part('partials/single/content'); ?>
        <!-- End Content-->

				<!-- Sidebar-->
        <?php get_template_part('partials/blog/sidebar'); ?>
        <!-- End Sidebar-->
			</div>

		</div>
	</section>
  <!-- End Blog Single-->
  <?php endwhile; else: ?>
    <p class="not-post"><?php _e('No existe ningun post.'); ?></p>
  <?php endif; ?>
  
  <!-- Contact-->
  <?php get_template_part('partials/index/contact'); ?>
  <!-- End Contact-->
  
<?php get_footer();?>