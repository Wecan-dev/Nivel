<section class="main-video">
  <div class="main-nivel__title">
    <h1 class="title-nivel2--line-initial title-nivel2--line">
      <strong> SOLUCIONES</strong> A LA MEDIDA
    </h1>
  </div>
  <div class="main-video__content container  " style="">

    <?php $args = array( 'post_type' => 'soluciones');
    $title = get_the_title();
    ?>   
    <?php $loop = new WP_Query( $args ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="main-video__items" data-toggle="modal" data-target="#videoSolutions-<?php the_id();?>" >
        <div class="main-video__img">
          <div class="mask-video2">
            <div class="main-details__video--icono main-details__video--icono--home">
              <img class="video-icono" src="<?php echo get_template_directory_uri();?>/assets/img/play.png">
            <!-- < ?php if(get_field('imagen')): ?>
              < ?php else: ?>
                < ?php endif; ?> -->
            </div>
          </div>
          <?php if(get_field('imagen')): ?>
            <img class="img-video" src="<?php the_field('imagen') ?>">
          <?php else: ?>
            <video class="img-video" src="<?php the_field('video') ?>"></video>
            
            <!-- <p style="color: #fff;font-size: 40px;" id="title-solutions">< ?php echo $title?></p> -->
           
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  
  <div class="main-video__bg ">
    <div class="main-video__bg--color"></div>
    <div class="main-video__bg--text"></div>
    <p class="video-bg__text">
      CONOCIMIENTO <br> EXPERTO
    </p>
  </div>
</section>