<?php if(get_field('agregar_galeria') == 1): ?>
  <section class="main-details__galeria ">
    <div class="container">
      <div class="main-details__galeria--title">
        <h1 class="title-nivel2--line title-nivel2--line-initial">
          <strong> GALERÍA</strong>
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
      </div>
    </div>
  
  </section>
<?php else: ?>

<?php endif ?>