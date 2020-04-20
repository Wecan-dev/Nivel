<section class="main-details__video main-details__video-pd container">
  <div class="main-details__video--content">
      
      <div class="main-video__details" data-toggle="modal" data-target="#videoProject-<?php the_id();?>">
          <div class="mask-video">
            <div class="main-details__video--icono">
              <img class="video-icono" src="<?php echo get_template_directory_uri();?>/assets/img/play.png">

            </div>
          </div>
          <?php if(get_field('carga_de_video')):?>
            <video class="img-video__details" src="<?php the_field('carga_de_video')?>">
            </video>
          <?php else:?>
            <img class="img-video__details" src="<?php echo get_template_directory_uri();?>/assets/img/imagen-detalle5.png">
          <?php endif; ?>
          <div class="quare-text">
            <p class="text-ubications-projects"><?php the_field('ubicacion') ?></p>
            <p  class="text-price-projects">DESDE:  
              <span><?php the_field('precio') ?></span>
            </p>
            <p class="text-impuesto-projects ">Valor impuestos incluido*</p>
          </div>
      
      </div>
    
      
    <div class="main-details__video--card">
      <div class="details-video__img">

        <img class="details-video__logo" src="<?php the_field('logo_de_ubicacion') ?>">
      </div>
      <div class="details-video__body">
        <div class="main-details__video--title">
          <p class="details-video__title">
            <?php the_field('titulo_pequeno')?>
          </p>
        </div>
        <div class="main-details__video--text">
          <p class="details-video__text">
            <?php the_content() ?>
            
          </p>
        </div>
        <div class="main-details__video--buttom">
          <a class="btn_custom btn--medium btn--filled2" href="#main-details__ubicacion">
            QUIERO MÁS INFO
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="main-video__details--etiqueta">
    <p class="details-video__etiqueta">
      VILLA LAURA, LA CEJA 
    </p>
    <h2><strong>DESDE: $125.917.451</strong> </h2>
    <p class="details-video__etiqueta">
      Valor impuestos incluido
    </p>
  </div> -->
</section>