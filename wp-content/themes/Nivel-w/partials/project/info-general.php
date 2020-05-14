<section class="main-details__projects">
  <?php if(get_field('agregar_descripcion') == 1): ?>
    <div class="main-details__projects--content">
      
    </div>
  <?php else: ?>
        
  <?php endif ?>
</section>

<?php if(get_field('imagen_1')): ?>
  <div class="main-details__slick--items">
    <div class="main-details__slick--img">
      <img class="details-slick__img" src="<?php the_field('imagen_1');?>">
    </div>
  </div>
<?php else: ?>

<?php endif ?>


<?php if(get_field('imagen_2')): ?>
  <div class="main-details__slick--items">
    <div class="main-details__slick--img">
      <img class="details-slick__img" src="<?php the_field('imagen_2');?>">
    </div>
  </div>
<?php else: ?>

<?php endif ?>
<?php if(get_field('imagen_3')): ?>
  <div class="main-details__slick--items">
    <div class="main-details__slick--img">
      <img class="details-slick__img" src="<?php the_field('imagen_3');?>">
    </div>
  </div>
<?php else: ?>

<?php endif ?>

<?php if(get_field('imagen_4')): ?>
  <div class="main-details__slick--items">
    <div class="main-details__slick--img">
      <img class="details-slick__img" src="<?php the_field('imagen_4');?>">
    </div>
  </div>
<?php else: ?>

<?php endif ?>