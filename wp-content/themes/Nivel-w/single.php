<?php get_header();?>
  <!-- Banner-->
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
  
  <!-- Contact-->
  <?php get_template_part('partials/index/contact'); ?>
  <!-- End Contact-->
  
<?php get_footer();?>