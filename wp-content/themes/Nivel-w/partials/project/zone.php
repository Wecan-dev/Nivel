<section class="main-details__projects--zona ">
  <?php if(get_field('zonas_comunes') == 1): ?>
    <div class="main-details__projects--content">
      <div class="main-details__descripcion">
        <div class="main-details__projects--title">
          <h1 class="title-nivel2--line title-nivel2--line-initial ">
            <strong> ZONAS</strong> COMUNES
          </h1>

        </div>
        <div class="main-details__icono--content">

          <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Locales comerciales'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                      Locales comerciales
                    </p>
                  </div>
                </div>
                <?php else:?>
                <?php
            endif;
            endforeach;
          endif; ?>


        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Jardines interiores'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle3.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Jardines interiores
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Zona de pinic'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle4.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Zona de pinic
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>


        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Espacios de mascostas'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle5.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Espacios de mascostas
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Reserva natural'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Reserva natural
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>


        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Vías internas pavimentadas'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Vías internas pavimentadas
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>


        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Portería'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Portería
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Vigilancia 24 horas'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Vigilancia 24 horas
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>


        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Entorno campestre'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Entorno campestre
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Amplio lobby de ingreso'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Amplio lobby de ingreso
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>



        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Solarium con Zona BBQ'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Solarium con Zona BBQ
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Living room con chimenea'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Living room con chimenea
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Juegos infantiles'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Juegos infantiles
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Gimnasio completamente dotado'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Gimnasio completamente dotado
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Jacuzzi con hidromasajes'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Jacuzzi con hidromasajes
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Parqueadero de bicicletas'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Parqueadero de bicicletas
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>

        <?php // descripcion_zonas ( value )
          $descripcion_zonas_array = get_field( 'descripcion_zonas' );
          if ( $descripcion_zonas_array ):
            foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
              <?php if( $descripcion_zonas_item == 'Salón social'): ?>
                <div class="main-details__icono">
                  <div class="main-details__icono--img">
                    <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                  </div>
                  <div class="main-details__icono--text">
                    <p class="text-icono__projects">
                    Salón social
                    </p>
                  </div>
                </div>
                <?php else:?>

                <?php
            endif;
            endforeach;
          endif; ?>



          <?php if(get_field('cargar_pdf')): ?>
            <div class="main-details__video--buttom">
              <a class="btn_custom btn--medium btn--filled2" target="_blank" href="<?php the_field('cargar_pdf') ?>">
                VER PRESENTACIÓN
              </a>
            </div>
          <?php else: ?>

          <?php endif ?>
        </div>
      </div>
      <div class="main-details__projects--slick">
        <div class="main-details__slick--content">
          <?php if(get_field('imagen_zona_1')): ?>
            <div class="main-details__slick--items">
              <div class="main-details__slick--img">
                <img class="details-slick__img" src="<?php the_field('imagen_zona_1');?>">
              </div>
            </div>
          <?php else: ?>

          <?php endif ?>


          <?php if(get_field('imagen_zona_2')): ?>
            <div class="main-details__slick--items">
              <div class="main-details__slick--img">
                <img class="details-slick__img" src="<?php the_field('imagen_zona_2');?>">
              </div>
            </div>
          <?php else: ?>
          
          <?php endif ?>
          <?php if(get_field('imagen_zona_3')): ?>
            <div class="main-details__slick--items">
              <div class="main-details__slick--img">
                <img class="details-slick__img" src="<?php the_field('imagen_zona_3');?>">
              </div>
            </div>
          <?php else: ?>
          
          <?php endif ?>
        </div>
      </div>
    </div>
  <?php else: ?>

  <?php endif ?>
</section>