<!-- Projects Slider-->
<section class="main-proyectos ">
  <div class="main-nivel__small">
    <small class="nivel-small">
      ACERCA DE
    </small>
  </div>
  <div class="main-nivel__title ">
    <h1 class="title-nivel2--line-center title-nivel2--line">
      <strong> NUESTROS</strong> PROYECTOS
    </h1>
  </div>
  <div class="main-proyectos__text">
    <p class="proyectos-text main-general__description">
      Nos conectamos con lo que más te gusta para estructurar, gerencias y comercializar proyectos inmobiliarios, en lugares increíbles que te permitan hacer realidad los espacios que siempre has soñado. 
    </p>
  </div>

  <div class="container">
    <div class=" main-proyectos__content container-prueba">
      <div class="slider-prueba ">
        <div class="slider-prueba2">
          <?php $args = array( 'post_type' => 'Proyectos'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if( get_field('proyectos') == 'Preventa'): ?>
            <div class="main-proyectos__items">
              <div class="main-proyectos__card">
                <div class="main-card__proyectos--img">
                  <img class="img-card__proyectos" src="<?php the_field('logo_de_ubicacion') ?>" alt="">
                </div>
                <div class="main-proyectos__body">
                  <div class="main-card__proyectos--title">
                    <p class="title-card__proyectos">
                      <?php the_title(); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--text">
                    <p class="text-card__proyectos main-general__description">
                    <?php echo excerpt(30); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--buttom">
                    <a class="btn_custom btn--medium btn--filled2" href="<?php the_permalink(); ?>">
                      Ver más
                    </a>
                  </div>
                </div>
              </div>
              <div class="main-proyectos__img">
                <div class="main-proyectos__img--hidden">
                  <span class="line"></span>
                  <span class="line line-bottom"></span>
    
                  <img class="img-proyectos" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
              </div>
            </div>
          <?php endif; endwhile; ?>
          <!-- <div class="main-proyectos__items">
            <div class="main-proyectos__card">
              <div class="main-card__proyectos--img">
                <img class="img-card__proyectos" src="<?php echo get_template_directory_uri();?>/assets/img/logo_2.png" alt="">
              </div>
              <div class="main-proyectos__body">
                <div class="main-card__proyectos--title">
                  <p class="title-card__proyectos">
                    Maderos de Retiro
                  </p>
                </div>
                <div class="main-card__proyectos--text">
                  <p class="text-card__proyectos main-general__description">
                    Apartamentos en El Retiro, Antioquia, en un municipio de gran crecimiento y valorización. A pocos
                    minutos de la ciudad de Medellín, en un punto con todos los servicios cerca. Vive en el campo con
                    todas las comodidades de la ciudad a pocos pasos de...
                  </p>
                </div>
                <div class="main-card__proyectos--buttom">
                  <a class="btn_custom btn--medium btn--filled2" href="">
                    Ver más
                  </a>
                </div>
              </div>
            </div>
            <div class="main-proyectos__img">
              <div class="main-proyectos__img--hidden">
                <span class="line"></span>
                <span class="line line-bottom"></span>
  
                <img class="img-proyectos" src="<?php echo get_template_directory_uri();?>/assets/img/image_13.png">
              </div>
            </div>
          </div> -->
        </div>
  
  
        <div class="slider-prueba2">
          <?php $args = array( 'post_type' => 'Proyectos'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if( get_field('proyectos') == 'Construcción'): ?>
            <div class="main-proyectos__items">
              <div class="main-proyectos__card">
                <div class="main-card__proyectos--img">
                  <img class="img-card__proyectos" src="<?php the_field('logo_de_ubicacion') ?>" alt="">
                </div>
                <div class="main-proyectos__body">
                  <div class="main-card__proyectos--title">
                    <p class="title-card__proyectos">
                      <?php the_title(); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--text">
                    <p class="text-card__proyectos main-general__description">
                    <?php echo excerpt(30); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--buttom">
                    <a class="btn_custom btn--medium btn--filled2" href="<?php the_permalink(); ?>">
                      Ver más
                    </a>
                  </div>
                </div>
              </div>
              <div class="main-proyectos__img">
                <div class="main-proyectos__img--hidden">
                  <span class="line"></span>
                  <span class="line line-bottom"></span>
    
                  <img class="img-proyectos" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
              </div>
            </div>
          <?php endif; endwhile; ?>
        </div>
  
        <div class="slider-prueba2">
        <?php $args = array( 'post_type' => 'Proyectos'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php if( get_field('proyectos') == 'Entrega inmediata'): ?>
            <div class="main-proyectos__items">
              <div class="main-proyectos__card">
                <div class="main-card__proyectos--img">
                  <img class="img-card__proyectos" src="<?php the_field('logo_de_ubicacion') ?>" alt="">
                </div>
                <div class="main-proyectos__body">
                  <div class="main-card__proyectos--title">
                    <p class="title-card__proyectos">
                      <?php the_title(); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--text">
                    <p class="text-card__proyectos main-general__description">
                    <?php echo excerpt(30); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--buttom">
                    <a class="btn_custom btn--medium btn--filled2" href="<?php the_permalink(); ?>">
                      Ver más
                    </a>
                  </div>
                </div>
              </div>
              <div class="main-proyectos__img">
                <div class="main-proyectos__img--hidden">
                  <span class="line"></span>
                  <span class="line line-bottom"></span>
    
                  <img class="img-proyectos" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
              </div>
            </div>
          <?php endif; endwhile; ?>
        </div>
  
        <div class="slider-prueba2">
        <?php $args = array( 'post_type' => 'Proyectos'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
          <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="main-proyectos__items">
              <div class="main-proyectos__card">
                <div class="main-card__proyectos--img">
                  <img class="img-card__proyectos" src="<?php the_field('logo_de_ubicacion') ?>" alt="">
                </div>
                <div class="main-proyectos__body">
                  <div class="main-card__proyectos--title">
                    <p class="title-card__proyectos">
                      <?php the_title(); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--text">
                    <p class="text-card__proyectos main-general__description">
                    <?php echo excerpt(30); ?>
                    </p>
                  </div>
                  <div class="main-card__proyectos--buttom">
                    <a class="btn_custom btn--medium btn--filled2" href="<?php the_permalink(); ?>">
                      Ver más
                    </a>
                  </div>
                </div>
              </div>
              <div class="main-proyectos__img">
                <div class="main-proyectos__img--hidden">
                  <span class="line"></span>
                  <span class="line line-bottom"></span>
    
                  <img class="img-proyectos" src="<?php echo get_the_post_thumbnail_url(); ?>">
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
  
      </div>
    </div>
  </div>
  <div class="mask-images-text">
    <p>PROYECTO</p>
  </div>
</section>

