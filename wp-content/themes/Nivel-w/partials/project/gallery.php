<?php if(get_field('link_vista_360') or get_field('video')): ?>
  <section class="main-details__galeria ">
      <div class="container">
        <div class="main-details__galeria--title">
        <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--projects">
            <strong> video</strong> 360
          </h1>

        </div>
        
        <div class="main-details__video">
          <iframe class="mt-3" src="<?php the_field('link_vista_360');?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          

        </div>
      </div>
    
  </section>
<?php else: ?>

<?php endif ?>
<?php if(get_field('agregar_galeria') == 1): ?>
  <section class="main-details__galeria ">
    <div class="container">
      <div class="main-details__galeria--title">
        <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--gallery">
          <strong> GALERÍA avance</strong> de obra
        </h1>

      </div>
     
      <div class="main-details__galeria--content">

        <?php if(get_field('imagen_galeria')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_2')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_2');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_3')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_3');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_4')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_4');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_5')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_5');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_6')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_6');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_7')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_7');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_galeria_8')): ?>
          <div class="main-details__galeria--items">
            <div class="main-details__galeria--img">
              <img class="details-galeria__img" src="<?php the_field('imagen_galeria_8');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>
      </div>
    </div>
  
  </section>
<?php else: ?>

<?php endif ?>


<?php if(get_field('cargar_pdf')): ?>
  <section class="main-contacto">
  <div class="container-brochure container">
    <div class="main-contacto__text">
      <p class="text-contacto">
      Para recibir más información

      </p>
      <p class="text-contacto2">
      de este proyecto descarga el brochure 
      </p>
    </div>
    <div class="formulario-deleted">
      
        <div class="main-details__video--buttom main-details__video--presentation">
          <a class="btn_custom btn--medium btn--filled4" target="_blank" href="<?php the_field('cargar_pdf') ?>">
          DESCARGAR BROCHURE
          </a>
        </div>
    
    </div>
  </div>
</section>
<?php else: ?>

<?php endif ?>
