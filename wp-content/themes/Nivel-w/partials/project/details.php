<section class="main-details__projects">
  <div class="container">
  <?php if(get_field('agregar_descripcion') == 1): ?>
    <div class="main-details__projects--content">
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
      <div class="main-details__descripcion">
        <div class="main-details__projects--title">
          <h1 class="title-nivel2--line title-nivel2--line-initial title-nivel2--line-initial--projects">
            <strong> Información</strong> <br> DEL PROYECTO
          </h1>

        </div>
        <div class="main-details__icono--content lines">
          <div class="main-fqa__center">
            <div class="wrapper center-block">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <?php if(get_field('zonas_comunes') == 1): ?>
                    <h4 class="panel-title">

                    <?php  if(get_field( 'titulo_de_zonas' ) == 'Zonas comunes'): ?>
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        zonas comunes
                      </a>
                    <?php else: ?>

                    <?php endif; ?>

                    <?php  if(get_field( 'titulo_de_zonas' ) == 'Zonas para divertirse'): ?>
                    
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        zonas para divertirse
                      </a>
                    <?php else: ?>
                      
                    <?php endif; ?>

                    <?php  if(get_field( 'titulo_de_zonas' ) == 'Espacios para disfrutar'): ?>
          
                      
                    <?php else: ?>
                      
                    <?php endif; ?>

                    <?php  if(get_field( 'titulo_de_zonas' ) == 'Características'): ?>
              
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Características
                      </a>
                    <?php else: ?>
                      
                    <?php endif; ?>
                      
                    </h4>
                    <?php else: ?>
            
                  <?php endif; ?>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-05.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-06.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img//Icons/iconos1-07.png">
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
                            <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-08.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-09.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-10.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-11.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-12.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-13.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-14.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-15.png">
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
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
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


                    <?php // descripcion_zonas ( value )
                    $descripcion_zonas_array = get_field( 'descripcion_zonas' );
                    if ( $descripcion_zonas_array ):
                      foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                        <?php if( $descripcion_zonas_item == 'Zona húmeda Piscina niños y adultos'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-21.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Zona húmeda Piscina niños y adultos
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
                        <?php if( $descripcion_zonas_item == 'Espacio para Gimnasio'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-13.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Espacio para Gimnasio
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
                        <?php if( $descripcion_zonas_item == 'Zonas verdes privadas'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle3.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Zonas verdes privadas
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
                        <?php if( $descripcion_zonas_item == 'Gimnasio'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-13.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Gimnasio
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
                        <?php if( $descripcion_zonas_item == 'Zonas verdes '): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle3.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Zonas verdes 
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
                        <?php if( $descripcion_zonas_item == 'Cancha recreativa '): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-29.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Cancha recreativa 
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
                        <?php if( $descripcion_zonas_item == 'Salón de juegos con billar y mesa de cartas'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-30.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Salón de juegos con billar y mesa de cartas 
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
                        <?php if( $descripcion_zonas_item == 'Zona húmeda con turco'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-21.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Zona húmeda con turco 
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
                        <?php if( $descripcion_zonas_item == 'Terraza Solarium con asoleadoras, calentadores y Bbq'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-31.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Terraza Solarium con asoleadoras, calentadores y Bbq 
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
                        <?php if( $descripcion_zonas_item == 'Sendero para caminar'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle3.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Sendero para caminar 
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
                        <?php if( $descripcion_zonas_item == 'Circuito deportivo'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-22.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Circuito deportivo 
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
                        <?php if( $descripcion_zonas_item == 'Gimnasio al aire libre'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-23.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Gimnasio al aire libre 
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
                        <?php if( $descripcion_zonas_item == 'Casa típica'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Casa típica 
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
                        <?php if( $descripcion_zonas_item == 'Teatro al aire libre'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-25.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Teatro al aire libre
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
                        <?php if( $descripcion_zonas_item == 'Senderos ecológicos'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle3.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Senderos ecológicos
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
                        <?php if( $descripcion_zonas_item == 'Mirador'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-26.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Mirador
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
                        <?php if( $descripcion_zonas_item == 'Circuito de ciclomontañismo'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-27.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Circuito de ciclomontañismo
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
                        <?php if( $descripcion_zonas_item == 'Oratorio'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-28.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Oratorio
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
                        <?php if( $descripcion_zonas_item == '6 locales comerciales'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                            <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              6 locales comerciales
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
                        <?php if( $descripcion_zonas_item == '1 local ancla'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              1 local ancla 
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
                        <?php if( $descripcion_zonas_item == 'Amplio espacio para bodegaje'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Amplio espacio para bodegaje
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
                        <?php if( $descripcion_zonas_item == 'Posibilidad de mezzanine'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-17.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Posibilidad de mezzanine
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
                        <?php if( $descripcion_zonas_item == 'Posibilidad de local comercial'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Posibilidad de local comercial
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
                        <?php if( $descripcion_zonas_item == '3 pisos'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              3 pisos
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
                        <?php if( $descripcion_zonas_item == 'Redes eléctricas y telecomunicaciones subterráneas'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-18.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Redes eléctricas y telecomunicaciones subterráneas
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
                        <?php if( $descripcion_zonas_item == 'Acueducto y alcantarillado'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-19.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Acueducto y alcantarillado
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
                        <?php if( $descripcion_zonas_item == 'Red de gas'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-20.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Red de gas
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
                        <?php if( $descripcion_zonas_item == 'Todos los lotes se entregan con una zona plana para facilitar el desarrollo de vivienda'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Todos los lotes se entregan con una zona plana para facilitar el desarrollo de vivienda
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
                        <?php if( $descripcion_zonas_item == 'Salón social con terraza'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-31.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Salón social con terraza
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
                        <?php if( $descripcion_zonas_item == 'Terraza panorámica'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-31.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Terraza panorámica
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
                        <?php if( $descripcion_zonas_item == 'Sky work panorámico'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-32.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Sky work panorámico
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
                        <?php if( $descripcion_zonas_item == 'Oficina adminsitración'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-33.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Oficina adminsitración
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
                        <?php if( $descripcion_zonas_item == 'Lobby doble altura'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-34.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Lobby doble altura
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
                        <?php if( $descripcion_zonas_item == 'Salón de cardio'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-23.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Salón de cardio 
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
                        <?php if( $descripcion_zonas_item == 'Salón de entrenamiento'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-30.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Salón de entrenamiento
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
                        <?php if( $descripcion_zonas_item == 'Sauna y turco '): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Sauna y turco 
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
                        <?php if( $descripcion_zonas_item == 'Jacuzzi'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-14.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Jacuzzi 
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
                        <?php if( $descripcion_zonas_item == 'Glamping'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-39.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Glamping 
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
                        <?php if( $descripcion_zonas_item == 'Salón de juegos infantiles'): ?>
                          <div class="main-details__icono">
                            <div class="main-details__icono--img">
                              <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-40.png">
                            </div>
                            <div class="main-details__icono--text">
                              <p class="text-icono__projects">
                              Salón de juegos infantiles 
                              </p>
                            </div>
                          </div>
                          <?php else:?>

                          <?php
                      endif;
                      endforeach;
                    endif; ?>


        
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      acerca de proyectos
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <div class="main-details__video--title">
                      <p class="details-video__title">
                        <?php the_field('titulo_pequeno')?>
                      </p>
                    </div>
                    <div class="main-details__video--text">
                      <p class="details-video__text">
                        <?php the_content() ?>
                        
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Detalles de proyectos
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">

                  <?php if(get_field('bloques_y_piso')):?>
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
                    <?php else:?>
                    
                    <?php endif; ?>

                    <?php if(get_field('apartamentos_por_piso')):?>

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

                    <?php else:?>
                    
                    <?php endif; ?>
                    
                    <?php if(get_field('cantidad_de_apartamento')):?>
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
                    <?php else:?>
                    
                    <?php endif; ?>


                    


                    <?php if(get_field('metros_cuadrados')):?>

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
                    <?php else:?>
                    
                    <?php endif; ?>


                    <?php if(get_field('descripcion_completa')):?>
                  
                      <div class="main-details__icono main-details__icono--full">
                        <!--
                        <div class="main-details__icono--img">
                          <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                        </div>-->

                        <div class="main-details__icono--text">
                          <p class="text-icono__projects">
                            <?php the_field('descripcion_completa');?>
                          </p>
                        </div>
                      </div>
                    <?php else:?>
                    
                    <?php endif; ?>

                    <?php if(get_field('telefono')):?>
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
                    <?php else:?>
                  
                    <?php endif; ?>

                    <?php if(get_field('celular')):?>
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
                    <?php else:?>
                  
                    <?php endif; ?>


                    <?php if(get_field('correo_electronico')):?>
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

                    <?php else:?>
                  
                    <?php endif; ?>
                  </div>
                </div>
              </div>

            
            </div>
            </div>
          </div>
          
        </div>        
      </div>
      
        

      
    </div>
  <?php else: ?>
        
  <?php endif ?>
  </div>
</section>