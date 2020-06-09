<section class="main-about" style="">
  <div class="main-about__bg "></div>
  <div class="main-about__bg--icono">
    <img class="img-icono__bg" src="<?php echo get_template_directory_uri();?>/assets/img/icono-bg.png">
  </div>
  <div class="main-about__bg--icono2">
    <img class="img-icono__bg2" src="<?php echo get_template_directory_uri();?>/assets/img/ img.png">
  </div>
  <div class="main-about__title container">
    <h1 class="title-nivel">
      LO QUE <span class="palabra-nivel">HACEMOS </span>
    </h1>

  </div>
  <div class="main-about__content container">
    <div class="main-about-carousel">
      <?php $args = array(

        'orderby' => 'slug',
        'order' => 'ASC'
      );
      $proyecto_categories = get_terms('proyectos_nivel', $args);
      $counterNumber = 1;
      foreach ($proyecto_categories as $proyecto_category): ?>

        <div class="main-about__card">
          <div class="main-about-card__body">
            <span class="main-about__counter"><?php if($counterNumber < 10 ): echo '0'.$counterNumber; else:echo $counterNumber; endif;  ?> </span>
            <div class="main-about-card__title">
              <a href="<?php echo $url_category = get_term_link( $proyecto_category ); ?>">
                <p class="about-card__title">
                  <?php echo $proyecto_category->name;?>
                </p>

              </a>

              <div class="main-about__buttom">
                <a class="btn--filled--about" href="<?php echo $url_category = get_term_link( $proyecto_category ); ?>">
                  LEER MÁS
                </a>
              </div>
            </div>

          </div>
          <div class="main-about__img">
            <div class="main-about__img--mask">
              <div class="main-about__icono">
                <img class="icono-mask" src="<?php the_field('icono')?>">
              </div>
              <div class="main-about__icono--title">
                <img class="icono-mask" src="<?php the_field( 'icono', $proyecto_category ); ?>">
                <a href="<?php echo $url_category = get_term_link( $proyecto_category ); ?>" class="about-title__icono">
                  <?php echo $proyecto_category->name;?>
                </a>
                <div class="main-about__icono--text">
                  <p class="about-text__icono">
                    <?php echo $proyecto_category->description;?>
                  </p>
                </div>

              </div>
            </div>
            <a class="main-about__links" href="<?php echo $url_category = get_term_link( $proyecto_category ); ?>">
              <img class="img-about" src="<?php the_field( 'imagen_principal', $proyecto_category ); ?>">
            </a>
          </div>
        </div>
        <?php $counterNumber++; endforeach; ?>

      <!-- <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 02 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              APARTAMENTOS
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_3.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_3.png">
              <a href="#" class="about-title__icono">
                APARTAMENTOS
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_18.png">
        </div>
      </div>
      <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 03 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              LOTES
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_4.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon_4.png">
              <a href="#" class="about-title__icono">
                LOTES
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_19.png">
        </div>
      </div>
      <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 04 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              COMERCIAL
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
              <a href="#holaa" class="about-title__icono">
                COMERCIAL
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_20.png">
        </div>
      </div>
      <div class="main-about__card">
        <div class="main-about-card__body">
          <span class="main-about__counter"> 05 </span>
          <div class="main-about-card__title">
            <p class="about-card__title">
              COMERCIAL
            </p>
            <div class="main-about__buttom">
              <a class="btn--filled--about" href="#">
                LEER MÁS
              </a>
            </div>
          </div>

        </div>
        <div class="main-about__img">
          <div class="main-about__img--mask">
            <div class="main-about__icono">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
            </div>
            <div class="main-about__icono--title">
              <img class="icono-mask" src="<?php echo get_template_directory_uri();?>/assets/img/icon.png">
              <a href="#" class="about-title__icono">
                COMERCIAL
              </a>
              <div class="main-about__icono--text">
                <p class="about-text__icono">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </p>
              </div>

            </div>
          </div>
          <img class="img-about" src="<?php echo get_template_directory_uri();?>/assets/img/image_20.png">
        </div>
      </div> -->

    </div>
  </div>
</section>