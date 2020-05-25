<?php if(get_field('link_vista_360') or get_field('video')): ?>
  <section class="main-details__galeria ">
      <div class="container">
        <div class="main-details__galeria--title">
        <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--projects">
            <strong> video <span> 360</span></strong>
          </h1>

        </div>
        
        <div class="main-details__video">
          <iframe class="mt-3" src="<?php the_field('link_vista_360');?>" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          

        </div>
      </div>
    
  </section>
<?php else: ?>

<?php endif ?>
<?php if(get_field('agregar_avances') == 1): ?>
  <section class="main-details__galeria ">
    <div class="container">
      <div class="main-details__galeria--title">
        <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--gallery">
          <strong> GALERÍA avance <span>de obra</span></strong> 
        </h1>

      </div>
     
      <div class="main-details__galeria--content">

        <?php if(get_field('imagen_de_avances')): ?>
          <div class="main-details__galeria--items" onclick="openModal2();currentSlide2(1)">
            <div class="main-details__galeria--img">
            <img class="details-slick__img" src="<?php the_field('imagen_de_avances');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_de_avances_2')): ?>
          <div class="main-details__galeria--items" onclick="openModal2();currentSlide2(2)">
            <div class="main-details__galeria--img">
            <img class="details-slick__img" src="<?php the_field('imagen_de_avances_2');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>
        
        <?php if(get_field('imagen_de_avances_3')): ?>
          <div class="main-details__galeria--items" onclick="openModal2();currentSlide2(3)">
            <div class="main-details__galeria--img">
            <img class="details-slick__img" src="<?php the_field('imagen_de_avances_3');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_de_avances_4')): ?>
          <div class="main-details__galeria--items" onclick="openModal2();currentSlide2(4)">
            <div class="main-details__galeria--img">
            <img class="details-slick__img" src="<?php the_field('imagen_de_avances_4');?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif ?>

        <?php if(get_field('imagen_de_avances_5')): ?>
          <div class="main-details__galeria--items" onclick="openModal2();currentSlide2(5)">
            <div class="main-details__galeria--img">
            <img class="details-slick__img" src="<?php the_field('imagen_de_avances_5');?>">
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


<div id="myModal2" class="modal">


	<div class="modal-content">
		<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal2()">
			<span aria-hidden='true' class='fa fa-close'></span>
		</button>
	
    <?php  if(get_field('imagen_de_avances')):?>
			  <div class="mySlides2">
          <div class="main-details__planos--img">
            <img style="height:100%;width:100%;" src="<?php the_field('imagen_de_avances') ?>">
          </div>
        </div>
      <?php else: ?>

      <?php endif; ?>
        <?php  if(get_field('imagen_de_avances_2')):?>
          <div class="mySlides2">
            <div class="main-details__planos--img">
              <img style="" src="<?php the_field('imagen_de_avances_2') ?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>
        <?php  if(get_field('imagen_de_avances_3')):?>
          <div class="mySlides2">
            <div class="main-details__planos--img">
              <img style="height:100%;width:100%;" src="<?php the_field('imagen_de_avances_3') ?>">          
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>
        <?php  if(get_field('imagen_de_avances_4')):?>
          <div class="mySlides2">
            <div class="main-details__planos--img">
              <img style="height:100%;width:100%;" src="<?php the_field('imagen_de_avances_4') ?>">          
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>

        <?php  if(get_field('imagen_de_avances_5')):?>
          <div class="mySlides2">
            <div class="main-details__planos--img">
              <img style="height:100%;width:100%;" src="<?php the_field('imagen_de_avances_5') ?>">          
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>


		<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides2(1)">&#10095;</a>



	</div>
</div>