<section class="main-nosotros__video">
  <div class="main-nosotros__video--img"  data-toggle="modal" data-target="#videoQuienesSomos-<?php the_id();?>">
    <div class="mask-video">
      <div class="main-nosotros__icono">
        <div class="main-nosotros__mask--text">
          <p class="small-mask__nosotros">
            Nueva presentación
          </p>
          <p class="text-nosotros__mask">
            <?php the_field('titulo_video');?>
          </p>
          <div class="main-nosotros__icono--img">
            <img class="icono-video__nosotros" src="<?php echo get_template_directory_uri();?>/assets/img/play.png">
          </div>

        </div>
      </div>
    </div>
    <video class="nosotros-video__img" src="<?php the_field('video');?>">
    <source src="<?php the_field('video') ?>" type="video/mp4">
    </video>
  </div>
</section>

<div class="modal fade videoSolutions" id="videoQuienesSomos-<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
    
      <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="main-video__img video-full">
      <!-- <div class="">
        <div class="main-details__video--icono">
            
            </div>
          </div> -->
          
            <video id="modal-video" controls class="img-video" src="<?php the_field('video') ?>"></video>
        
        </div>
      </div>
    
    </div>
  </div>
</div>  