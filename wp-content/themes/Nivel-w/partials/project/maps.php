<?php if(get_field('planos') == 1): ?>
  <section class="main-details__projects--planos ">
    <div class="container">
      <div class="main">
        <div class="slider slider-for" >
          <?php if(get_field('imagen_del_plano')): ?>
            <div class="main-details__planos--items">
              <div class="main-details__planos-text">
                <div class="planos-center">
                  <h1 class="title-nivel2--line  title-nivel2--line-initial">
                    <strong> PLANOS</strong>
                  </h1>
                  <div class="main-maps__content">
                    
                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Alcobas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcobas-terminadas.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Alcobas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salón comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/salon-comedor.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salón comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina con mesón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina con mesón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropa'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/zona-de-ropas.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropa
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 69.82m2 - 1 piso'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 69.82m2 - 1 piso
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 129.39m2 - 2 pisos'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 129.39m2 - 2 pisos
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas de 55 m2 a 69.9 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas de 55 m2 a 69.9 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcobas 2 o 3  terminados'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcobas-terminadas.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcobas 2 o 3  terminados
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona Social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/zona-social-habitaciones.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona Social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso laminado en madera'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/piso-madera.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso laminado en madera
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/amplio-balcon.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/cocina.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso y/o enchapes en cerámica'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/piso-ceramica.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso y/o enchapes en cerámica
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Se entrega horno'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/horno.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Se entrega horno
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cubierta y extractor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/extractor.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cubierta y extractor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Muebles'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/muebles.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Muebles
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Quartzstone'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/quartzstone.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Quartzstone
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cabinas en vidrio templado'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/cabinas-en-vidrio-templado.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cabinas en vidrio templado
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Iluminación LED'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/Iluminación-led.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Iluminación LED
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área de 55 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área de 55 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salon comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/salon-comedor.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salon comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Amplio balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/amplio-balcon.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Amplio balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina abierta'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/cocina-abierta.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina abierta
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/area-social.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área social 
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/zona-de-ropas.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño y vestier'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcoba-principal-con-baño-y-vestier.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño y vestier
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/2-alcobas-auxiliares.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Independiente Baño social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/independiente-baño-social.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Independiente Baño social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con futuro baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/independiente-baño-social.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con futuro baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcoba-principal-con-baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares o 1 alcoba y múltiple'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/2-alcobas-auxiliares-o1alcoba-y-múltiple.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares o 1 alcoba y múltiple
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 1 de 260 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 1 de 260 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 2 de 175.75 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 2 de 175.75 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Frente de 9.20'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Frente de 9.20
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Profundidad desde 10.70 mts'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/profundidad.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Profundidad desde 10.70 mts
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '17 lotes'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  17 lotes
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas 2500 y 3000 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas 2500 y 3000 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona totalmente plana'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona totalmente plana
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
              

            </div>
            <?php else: ?>

            <?php endif; ?>
            <?php if(get_field('imagen_del_plano_2')): ?>
              <div class="main-details__planos--items">
                <div class="main-details__planos-text">
                  <div class="planos-center">
                    <h1 class="title-nivel2--line  title-nivel2--line-initial">
                      <strong> PLANOS</strong>
                    </h1>
                    <div class="main-maps__content">
                    
                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Alcobas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Alcobas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salón comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salón comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina con mesón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina con mesón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropa'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/zona-de-ropas.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropa
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 69.82m2 - 1 piso'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 69.82m2 - 1 piso
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 129.39m2 - 2 pisos'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 129.39m2 - 2 pisos
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas de 55 m2 a 69.9 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas de 55 m2 a 69.9 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcobas 2 o 3  terminados'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcobas 2 o 3  terminados
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona Social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona Social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso laminado en madera'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/piso-ceramica.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso laminado en madera
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/amplio-balcon.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso y/o enchapes en cerámica'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/piso-ceramica.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso y/o enchapes en cerámica
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Se entrega horno'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Se entrega horno
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cubierta y extractor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/extractor.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cubierta y extractor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Muebles'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Muebles
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Quartzstone'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/quartzstone.png.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Quartzstone
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cabinas en vidrio templado'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cabinas en vidrio templado
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Iluminación LED'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Iluminación LED
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área de 55 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área de 55 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salon comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salon comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Amplio balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Amplio balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina abierta'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina abierta
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área social 
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño y vestier'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño y vestier
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Independiente Baño social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/independiente-baño-social.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Independiente Baño social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con futuro baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcoba-principal-con-futuro-baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con futuro baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcoba-principal-con-baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares o 1 alcoba y múltiple'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares o 1 alcoba y múltiple
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 1 de 260 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 1 de 260 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 2 de 175.75 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 2 de 175.75 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Frente de 9.20'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/frente-9.20.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Frente de 9.20
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Profundidad desde 10.70 mts'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Profundidad desde 10.70 mts
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '17 lotes'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  17 lotes
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas 2500 y 3000 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas 2500 y 3000 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona totalmente plana'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona totalmente plana
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


              </div>
              <?php else: ?>

              <?php endif; ?>

              <?php if(get_field('imagen_del_plano_3')): ?>
                <div class="main-details__planos--items">
                  <div class="main-details__planos-text">
                    <div class="planos-center">
                      <h1 class="title-nivel2--line  title-nivel2--line-initial">
                        <strong> PLANOS</strong>
                      </h1>
                      <div class="main-maps__content">
                    
                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Alcobas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Alcobas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salón comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salón comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina con mesón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina con mesón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropa'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropa
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 69.82m2 - 1 piso'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 69.82m2 - 1 piso
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 129.39m2 - 2 pisos'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 129.39m2 - 2 pisos
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas de 55 m2 a 69.9 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas de 55 m2 a 69.9 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcobas 2 o 3  terminados'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcobas 2 o 3  terminados
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona Social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona Social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso laminado en madera'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/piso-madera.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso laminado en madera
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso y/o enchapes en cerámica'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso y/o enchapes en cerámica
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Se entrega horno'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/horno.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Se entrega horno
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cubierta y extractor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cubierta y extractor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Muebles'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Muebles
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Quartzstone'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/quartzstone.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Quartzstone
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cabinas en vidrio templado'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cabinas en vidrio templado
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Iluminación LED'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/Iluminación-led.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Iluminación LED
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área de 55 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área de 55 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salon comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salon comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Amplio balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/amplio-balcon.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Amplio balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina abierta'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina abierta
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/area-social.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área social 
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño y vestier'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcoba-principal-con-baño-y-vestier.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño y vestier
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/2-alcobas-auxiliares.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Independiente Baño social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Independiente Baño social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con futuro baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con futuro baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares o 1 alcoba y múltiple'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares o 1 alcoba y múltiple
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 1 de 260 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 1 de 260 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 2 de 175.75 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 2 de 175.75 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Frente de 9.20'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Frente de 9.20
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Profundidad desde 10.70 mts'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Profundidad desde 10.70 mts
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '17 lotes'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  17 lotes
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas 2500 y 3000 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas 2500 y 3000 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona totalmente plana'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona totalmente plana
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


                </div>
                <?php else: ?>

                <?php endif; ?>

                <?php if(get_field('imagen_del_plano_4')): ?>
                  <div class="main-details__planos--items">
                    <div class="main-details__planos-text">
                      <div class="planos-center">
                        <h1 class="title-nivel2--line  title-nivel2--line-initial">
                          <strong> PLANOS</strong>
                        </h1>
                        <div class="main-maps__content">
                    
                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Alcobas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/2-alcobas-auxiliares.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Alcobas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salón comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salón comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                    <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina con mesón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina con mesón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropa'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle2.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropa
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 69.82m2 - 1 piso'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 69.82m2 - 1 piso
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Casa de 129.39m2 - 2 pisos'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Casa de 129.39m2 - 2 pisos
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>

                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas de 55 m2 a 69.9 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas de 55 m2 a 69.9 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcobas 2 o 3  terminados'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/alcobas-terminadas.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcobas 2 o 3  terminados
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona Social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/zona-social-habitaciones.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona Social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso laminado en madera'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso laminado en madera
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                       <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Piso y/o enchapes en cerámica'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Piso y/o enchapes en cerámica
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Se entrega horno'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Se entrega horno
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cubierta y extractor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cubierta y extractor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Baños'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/baño.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Baños
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Muebles'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/muebles.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Muebles
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Quartzstone'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Quartzstone
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cabinas en vidrio templado'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cabinas en vidrio templado
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Iluminación LED'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Iluminación LED
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área de 55 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área de 55 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Salon comedor'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Salon comedor
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Amplio balcón'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Amplio balcón
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Cocina abierta'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/cocina-abierta.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Cocina abierta
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Área social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Área social 
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona de ropas'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona de ropas
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño y vestier'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño y vestier
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Independiente Baño social'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Independiente Baño social
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con futuro baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con futuro baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Alcoba principal con baño'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Alcoba principal con baño
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '2 alcobas auxiliares o 1 alcoba y múltiple'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  2 alcobas auxiliares o 1 alcoba y múltiple
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 1 de 260 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 1 de 260 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Bodega tipo 2 de 175.75 m2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/Icons/iconos1-16.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Bodega tipo 2 de 175.75 m2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Frente de 9.20'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle9.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Frente de 9.20
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Profundidad desde 10.70 mts'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Profundidad desde 10.70 mts
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == '17 lotes'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle8.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  17 lotes
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Áreas 2500 y 3000 mts2'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle6.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Áreas 2500 y 3000 mts2
                                </p>
                              </div>
                            </div>
                            <?php else:?>
                            <?php
                        endif;
                        endforeach;
                      endif; ?>
                      <?php // descripcion_zonas ( value )
                      $descripcion_zonas_array = get_field( 'descripcion_planos' );
                      if ( $descripcion_zonas_array ):
                        foreach ( $descripcion_zonas_array as $descripcion_zonas_item ):?>
                          <?php if( $descripcion_zonas_item == 'Zona totalmente plana'): ?>
                            <div class="main-maps__items">
                              <div class="main-details__icono--img">
                                <img class="icono-img__projects" src="<?php echo get_template_directory_uri();?>/assets/img/icono-detalle7.png">
                              </div>
                              <div class="main-details__icono--text">
                                <p class="text-icono__projects">
                                  Zona totalmente plana
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


                  </div>
                  <?php else: ?>

                  <?php endif; ?>
                </div>
                <div class="slider slider-nav  <?php if(get_field('imagen_del_plano_2')){ echo 'slider-nav--mt';} ?>" >

                  <?php  if(get_field('imagen_del_plano')):?>
                    <div class="main-details__planos--img">
                      <img onclick="openModal1();currentSlide1(1)" style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano') ?>">
                    </div>
                    <?php else: ?>

                    <?php endif; ?>
                    <?php  if(get_field('imagen_del_plano_2')):?>
                      <div class="main-details__planos--img">
                        <img onclick="openModal1();currentSlide1(2)" style="" src="<?php the_field('imagen_del_plano_2') ?>">
                      </div>
                      <?php else: ?>

                      <?php endif; ?>
                      <?php  if(get_field('imagen_del_plano_3')):?>
                        <div class="main-details__planos--img">
                          <img onclick="openModal1();currentSlide1(3)" style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_3') ?>">          
                        </div>
                        <?php else: ?>

                        <?php endif; ?>

                        <?php  if(get_field('imagen_del_plano_4')):?>
                          <div class="main-details__planos--img">
                            <img onclick="openModal1();currentSlide1(4)" style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_4') ?>">          
                          </div>
                          <?php else: ?>

                          <?php endif; ?>


                        </div>

                      </div>
                    </div>
                  </section>
                  <?php else: ?>

                  <?php endif; ?>

                  <style>





                    /* PLANOS */
                   
                   .slider-nav .slick-dots li.slick-active {
                    width: 13px;
                    height: 13px;
                    border: 1px solid #d71f26;
                    border-radius: 50%;
                    background-color: #d71f26;
                  }
                  .slider-nav .slick-dots li button {
                    width: 10px;
                    height: 10px;
                    border: 1px solid #d71f26;
                    border-radius: 50%;
                    background-color: transparent;
                  }
                  .slider-for .slick-dots li{
                   margin-right: 10px;
                   width: 100px;
                   height: 50px;
                   border: 1px solid #d71f26;
                   border-radius: 0;
                   background-color: transparent;
                   position: relative;
                   font-size: 14px;
                 }
                 .slider-for .slick-dots li.slick-active {
                   width: 100px;
                   height: 50px;
                   border: 1px solid #d71f26;
                   border-radius: 0;
                   background-color: #d71f26;


                 }
                 .slider-for .slick-dots {
                  position: absolute;
                  bottom: -60px;
                }

                .slider-for .slick-dots li:nth-child(1):after{
                 content: '<?php the_field('item_plano_1') ?>';
                 color: #d71f26;
                 /* top: 0.7rem;
                 position: absolute;
                 left: 1.5rem; */
               }

               .slider-for .slick-dots li:nth-child(2):after{
                 content: '<?php the_field('item_plano_2') ?>';
                 color: #d71f26;
                 /* top: 0.7rem;
                 position: absolute;
                 left: 1.5rem; */
               }
               .slider-for .slick-dots li:nth-child(3):after{
                 content: '<?php the_field('item_plano_3') ?>';
                 color: #d71f26;
                 /* top: 0.7rem; */
                 /* position: absolute;
                 left: 1.5rem; */
               }
               .slider-for .slick-dots li:nth-child(4):after{
                 content: '<?php the_field('item_plano_4') ?>';
                 color: #d71f26;
                 /* top: 0.7rem; */
                 /* position: absolute;
                 left: 1.5rem; */
               }
               .slider-for .slick-dots li.slick-active:nth-child(1):after{
                 color: #fff;
                 /* top: 0.7rem; */
                 /* position: absolute;
                 left: 1.5rem; */
               }
               .slider-for .slick-dots li.slick-active:nth-child(2):after{
                 color: #fff;
                 /* top: 0.7rem; */
                 /* position: absolute;
                 left: 1.5rem; */
               }
               .slider-for .slick-dots li.slick-active:nth-child(3):after{
                 color: #fff;
                 /* top: 0.7rem; */
                 /* position: absolute;
                 left: 1.5rem; */
               }
               .slider-nav .slick-dots li {
                height: 13px !important;
                width: 13px !important;;
              }
              .slider-for .slick-dots li.slick-active:nth-child(4):after{
               color: #fff;
               /* top: 0.7rem;
               position: absolute;
               left: 1.5rem; */
             }
             .slider-for .slick-dots li button{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 12px;
             }
           </style>



<div id="myModal1" class="modal">


	<div class="modal-content">
		<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal1()">
			<span aria-hidden='true' class='fa fa-close'></span>
		</button>

      <?php  if(get_field('imagen_del_plano')):?>
			  <div class="mySlides1">
          <div class="main-details__slick--img">
            <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano') ?>">
          </div>
        </div>
      <?php else: ?>

      <?php endif; ?>
        <?php  if(get_field('imagen_del_plano_2')):?>
          <div class="mySlides1">
            <div class="main-details__slick--img">
              <img style="" src="<?php the_field('imagen_del_plano_2') ?>">
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>
        <?php  if(get_field('imagen_del_plano_3')):?>
          <div class="mySlides1">
            <div class="main-details__slick--img">
              <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_3') ?>">          
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>
        <?php  if(get_field('imagen_del_plano_4')):?>
          <div class="mySlides1">
            <div class="main-details__slick--img">
              <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_4') ?>">          
            </div>
          </div>
        <?php else: ?>

        <?php endif; ?>
      
		<a class="prev" onclick="plusSlides1(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides1(1)">&#10095;</a>



	</div>
</div>