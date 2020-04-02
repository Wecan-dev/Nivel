<section class="main-enlaces" style="">
		<div class="main-enlaces__content container">
			<div class="main-enlaces__nivel">
        <a href="<?php echo bloginfo('url').'/';?>">
          <div class="main-nivel__logo">
            <img class="img-enlaces__logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">
          </div>
        </a>
				<div class="main-enlaces__nivel--text">
					<p class="enlaces-nivel__text">
					Respaldo, conocimiento, profesionalismo y calidad en lo que hacemos para entregar siempre lo mejor en cada proyecto a nuestros clientes.</p>
				</div>
				<div class="main-enlaces__redes">
					<div class="main-redes__fb">
						<a href="" target="_blank">
							<img class="img-redes" src="<?php echo get_template_directory_uri();?>/assets/img/fb.png">
						</a>
					</div>
					<div class="main-redes__instagram">
						<a href="" target="_blank">
							<img class="img-redes" src="<?php echo get_template_directory_uri();?>/assets/img/instagram.png">
						
						</a>
					</div>
				</div>
			</div>
			<div class="main-enlaces__menu">
				<div class="main-enlaces__title">
					<p class="enlaces-title">
						MENÚ
					</p>
				</div>
				<ul class="list-menu">
					<li class="items-menu">
						<a class="link-enlaces" href="<?php echo bloginfo('url').'/proyecto';?>">
							Proyectos
						</a>
					</li>
					<li class="items-menu">
						<a class="link-enlaces" href="<?php echo bloginfo('url').'/blog';?>">
							Mapa de inmuebles
						</a>
					</li>
					<li class="items-menu">
						<a class="link-enlaces" href="<?php echo bloginfo('url').'/nosotros';?>">
							La empresa
						</a>
					</li>
					<li class="items-menu">
						<a class="link-enlaces" href="<?php echo bloginfo('url').'/servicios';?>">
							Servicios al cliente
						</a>

					</li>
					<li class="items-menu">
						<a class="link-enlaces" href="<?php echo bloginfo('url').'/inversion';?>">
							Invierta desde el exterior
						</a>

					</li>
					<li class="items-menu">
						<a class="link-enlaces" href="<?php echo bloginfo('url').'/contacto';?>">
							Contacto
						</a>

					</li>
				</ul>
			</div>
			<div class="main-enlaces__instagram">
				<div class="main-enlaces__title">
					<p class="enlaces-title">
						INSTAGRAM
					</p>
				</div>
				<div class="main-instagram__content">
					<div class="main-instagram__img">
						<img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/image_2.png">
					</div>
					<div class="main-instagram__img">
						<img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/image_4.png">
					</div>
					<div class="main-instagram__img">
						<img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/image_5.png">
					</div>
					<div class="main-instagram__img">
						<img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/image_3.png">
					</div>
					<div class="main-instagram__img">
						<img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/image_5.png">
					</div>
					<div class="main-instagram__img">
						<img class="img-instagram" src="<?php echo get_template_directory_uri();?>/assets/img/image_4.png">
					</div>
				</div>
			</div>
			<div class="main-direccion">
				<div class="main-enlaces__title">
					<p class="enlaces-title">
						CONTÁCTANOS
					</p>
				</div>
				<div class="list-direccion__title">
					<p class="list-title">
						Dirección
					</p>
				</div>
				<ul class="list-direccion">
					<li class="items-direccion">
						<a class="link-enlaces" href="#">
							Dirección
							Cra 42A # 1-15, Torre 4, Oficina 307 San Fernando Plaza, Medellín, CO
						</a>

					</li>

				</ul>
				<div class="list-direccion__title">
					<p class="list-title">
					Teléfono
					</p>
				</div>
				<ul class="list-direccion">
					<li class="items-direccion">
						<a class="link-enlaces" href="+574320200">
							432 02 00
						</a>

					</li>
				</ul>
				<div class="list-direccion__title">
					<p class="list-title">
						Horario de atención administrativa
					</p>
				</div>
				<ul class="list-direccion">
					<li class="items-direccion">
						<a class="link-enlaces" href="#">
							8am-6pm, Lunes a Viernes
						</a>

					</li>
				</ul>
			</div>
		</div>
		</div>
	</section>
	<footer class="main-end">
		<div class="main-end__text">
			<p class="end-text">
				Copyright © 2020 Branch
			</p>
		</div>
		<div class="main-icono__footer">
			<a href="#">
				<img class="icono-footer" src="<?php echo get_template_directory_uri();?>/assets/img/3.png">
			</a>
		</div>
	</footer>

    <!-- Modal Video Solutions -->
  <?php $args = array( 'post_type' => 'soluciones'); ?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="modal fade videoSolutions" id="videoSolutions-<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
          <div class="modal-body">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="main-video__img">
          <div class="">
            <div class="main-details__video--icono">
                
                </div>
              </div>
              <?php if(get_field('imagen')): ?>
                <img class="img-video" src="<?php the_field('imagen') ?>">
              <?php else: ?>
                <video id="modal-video" controls class="img-video" src="<?php the_field('video') ?>"></video>
              <?php endif; ?>
            </div>
          </div>
        
        </div>
      </div>
    </div>  
  <?php endwhile; ?>



   <!-- Modal Video Solutions -->
   <?php $args = array( 'post_type' => 'proyectos'); ?>   
  <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="modal fade videoSolutions" id="videoProject-<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
          <div class="modal-body">
        
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="main-video__img">
          <div class="">
            <div class="main-details__video--icono">
                
                </div>
              </div>
            <?php if(get_field('carga_de_video')):?>
				<video id="modal-video" controls class="img-video" src="<?php the_field('carga_de_video')?>">
				</video>
			<?php else:?>
				<img class="img-video"  src="<?php echo get_template_directory_uri();?>/assets/img/imagen-detalle5.png">
			<?php endif; ?>
            </div>
          </div>
        
        </div>
      </div>
    </div>  
  <?php endwhile; ?>
	<script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/settings-slick.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

</html>