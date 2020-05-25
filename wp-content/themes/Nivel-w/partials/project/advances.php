<?php if(get_field('agregar_avances') == 1): ?>
  <section class="main-details__projects--avance">
 
    <div class="main-details__projects--content">
      <div class="main-details__descripcion">
        <div class="main-details__projects--title">
          <h1 class="title-nivel2--line title-nivel2--line-initial">
            <strong> AVANCES</strong> DE OBRAS
          </h1>

        </div>
        <div class="main-details__avances--text">
          <p class="details-planos__text">
            <?php the_field('descripcion_de_avances')?>
          </p>
        </div>
        <!--<div class="main-details__video--buttom">
          <a class="btn_custom btn--medium btn--filled2" href="">
            VER AHORA
          </a>
        </div>-->

      </div>
      
      <div class="main-details__content">
        <div class="main-details__projects--slick">
          <div class="main-details__slick--content">

            <?php if(get_field('imagen_de_avances')): ?>
              <div class="main-details__slick--items">
                <div class="main-details__slick--img">
                  <img onclick="openModal2();currentSlide2(1)" class="details-slick__img" src="<?php the_field('imagen_de_avances');?>">
                </div>
              </div>
            <?php else: ?>

            <?php endif ?>


            <?php if(get_field('imagen_de_avances_2')): ?>
              <div class="main-details__slick--items">
                <div class="main-details__slick--img">
                  <img onclick="openModal2();currentSlide2(2)" class="details-slick__img" src="<?php the_field('imagen_de_avances_2');?>">
                </div>
              </div>
            <?php else: ?>
            
            <?php endif ?>
            <?php if(get_field('imagen_de_avances_3')): ?>
              <div class="main-details__slick--items">
                <div class="main-details__slick--img">
                  <img onclick="openModal2();currentSlide2(3)" class="details-slick__img" src="<?php the_field('imagen_de_avances_3');?>">
                </div>
              </div>
            <?php else: ?>
            
            <?php endif ?>

            <?php if(get_field('imagen_de_avances_4')): ?>
              <div class="main-details__slick--items">
                <div class="main-details__slick--img">
                  <img onclick="openModal2();currentSlide2(4)" class="details-slick__img" src="<?php the_field('imagen_de_avances_4');?>">
                </div>
              </div>
            <?php else: ?>
            
            <?php endif ?>

            <?php if(get_field('imagen_de_avances_5')): ?>
              <div class="main-details__slick--items">
                <div class="main-details__slick--img">
                  <img onclick="openModal2();currentSlide2(5)" class="details-slick__img" src="<?php the_field('imagen_de_avances_5');?>">
                </div>
              </div>
            <?php else: ?>
            
            <?php endif ?>
          </div>
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
	
			<div class="mySlides2">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width:100%">
			</div>



		<a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides2(1)">&#10095;</a>



	</div>
</div>