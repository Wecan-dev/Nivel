<?php get_header();?>

<!-- Banner-->
<div class="main-banner" id="home">
	<div class="main-banner__content">
		<div class="main-banner__item">
			<div class="mask">
				<div class="main-banner__boxtext">
					<div class="main-banner__text main-banner__text--center  main-banner__text--pad">
						<div class="main-banner__description main-banner__description--error">
							<p><strong class="subtitle--error">Lo sentimos</strong></p>
						</div>
						<div class="main-banner__title main-banner__title--error">
							<p>
								4<span class="letra-color">0</span>4
							</p>
						</div>
						<div class="main-banner__description main-banner__error">
							<p>No pudimos encontrar la página que buscas</p>
							<p class="text-two-error"><strong>Te llevamos de regreso</strong></p>
						</div>
						<div class="content-btn-404">
							<button class="btn_custom btn--medium btn--filled--trans btn-size" style="letter-spacing: 1.9px;">
								volver al home
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="main-banner__img main-banner__img--thanks">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/Thanks/image_6.png">
			</div>
		</div>
	</div>
</div>
<!-- End Banner-->
<?php $args = array(

	'orderby' => 'slug',
	'order' => 'ASC'
);
$proyecto_categories = get_terms('proyectos_nivel', $args);

foreach ($proyecto_categories as $proyecto_category): ?>






	<a class="content-category" href="<?php echo $url_category = get_term_link( $proyecto_category ); ?>">
		<div class="category-column">
			<div class="category">
				<div class="icon">
					<img style="width: 10px;" src="">
				</div>
				<p class="name-category"><?php echo $proyecto_category->name;?></p>
			</div>
		</div>
	</a>
<?php endforeach; ?>

<?php get_footer();?>