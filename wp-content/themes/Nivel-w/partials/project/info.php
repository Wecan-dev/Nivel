<section class="main-details__video main-details__video-pd container">
  <div class="main-details__video--content">
    <div class="main-video__details">


      <div class="mask-video">

      </div>
      <img class="img-video__details" src="<?php echo get_the_post_thumbnail_url(); ?>">

    </div>

    
    <div class="main-details__video--card">
      <div class="details-video__img">

        <div class="content__logo">
          <img class="details-video__logo" src="<?php the_field('logo_de_ubicacion') ?>">
        </div>
        <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--gallery">
          <p> <?php the_title(); ?></p>
        </h1>
      </div>
      <div class="details-video__body">
        <ul class="ul-project__info">

          <li>
            <strong>PRECIO</strong>
            <span class="dots_font">:</span>
            <span>Desde <?php the_field('precio') ?></span>
            <!-- <span class="text-impuesto-projects">Valor impuestos incluido*</span> -->
          </li>
          <li>
            <strong>Ubicación</strong>
            <span class="dots_font">:</span>
            <span><?php the_field('ubicacion') ?></span>
          </li>
          <li>
            <strong>inmueble</strong>
            
            <span class="dots_font"><?php the_taxonomies(); ?></span>
            
          </li>
        </ul>
        <!-- <div class="main-details__video--title">
          <p class="details-video__title">
            < ?php the_field('titulo_pequeno')?>
          </p>
        </div>
        <div class="main-details__video--text">
          <p class="details-video__text">
            < ?php the_content() ?>
            
          </p>
        </div> -->
        <div class="main-details__video--buttom">
          <a class="btn_custom btn--medium btn--filled2" href="#main-details__ubicacion">
            QUIERO MÁS INFO
          </a>
        </div>
      </div>
    </div>
  </div>
</section>