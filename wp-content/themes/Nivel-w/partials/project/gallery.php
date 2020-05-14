<?php if(get_field('link_vista_360') or get_field('video')): ?>
  <section class="main-details__galeria ">
      <div class="container">
        <div class="main-details__galeria--title">
          <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--gallery">
            <strong> CONOCE</strong> el proyecto
          </h1>

        </div>
        
        <div class="main-details__video">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            
            
            <?php if( get_field('link_vista_360')): ?>
              <li class="nav-item">
                <a class="nav-link__video active" id="pills-Video360-tab" data-toggle="pill" href="#pills-Video360" role="tab" aria-controls="pills-Video360" aria-selected="true">Video 360</a>
              </li>
      
              <?php elseif(get_field('video') and get_field('link_vista_360') ): ?>
                <li class="nav-item">
                <a class="nav-link__video active" id="pills-Video360-tab" data-toggle="pill" href="#pills-Video360" role="tab" aria-controls="pills-Video360" aria-selected="true">Video 360</a>
              </li>
                
          
                <?php elseif(get_field('video')): ?>
           
                <li class="nav-item">
                  <a class="nav-link__video" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">video</a>
                </li>
              
              
            <?php endif; ?>
           
          
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-Video360" role="tabpanel" aria-labelledby="pills-Video360-tab">

              <iframe class="mt-3" src="<?php the_field('link_vista_360');?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
               <!-- <video controls class="img-video" src="<c?php the_field('video') ?>">
                  <source src="<c?php the_field('video') ?>" type="video/mp4">
                </video>   
                 -->
            </div>
            
          </div>

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
          <strong> GALERÍA avances</strong> de la obra
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
