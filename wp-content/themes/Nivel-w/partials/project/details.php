<section class="main-details__projects">
  <?php if(get_field('agregar_descripcion') == 1): ?>
    <div class="main-details__projects--content">
      <div class="main-details__descripcion">
        <div class="main-details__projects--title">
          <h1 class="title-nivel2--line title-nivel2--line-initial ">
            <strong> DETALLES</strong> <br> DEL PROYECTO
          </h1>

        </div>
        <div class="main-details__icono--content">
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects">
                <?php the_field('cantidad_de_apartamento');?>
              </p>
            </div>
          </div>
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects">
                <?php the_field('bloques_y_piso');?>
              </p>
            </div>
          </div>
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects">
                <?php the_field('apartamentos_por_piso');?>
              </p>
            </div>
          </div>
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects">
                <?php the_field('metros_cuadrados');?>
              </p>
            </div>
          </div>
        </div>
        <div class="main-details__icono--content2">
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/phone.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects2">
                <?php the_field('telefono');?>
              </p>
            </div>
          </div>
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/cell.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects2">
                <?php the_field('celular');?>
              </p>
            </div>
          </div>
          <div class="main-details__icono">
            <div class="main-details__icono--img">
              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle10.png">
            </div>
            <div class="main-details__icono--text">
              <p class="text-icono__projects2">
                <?php the_field('correo_electronico');?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="main-details__content">
        <div class="main-details__projects--slick">
          <div class="main-details__slick--content">

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
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
        
  <?php endif ?>
</section>