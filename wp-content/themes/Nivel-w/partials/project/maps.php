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
                  <p class="details-planos__text">
                    <?php the_field('descripcion_del_plano'); ?>
                  </p>
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
                  <p class="details-planos__text">
                    <?php the_field('descripcion_del_plano'); ?>
                  </p>
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
                  <p class="details-planos__text">
                    <?php the_field('descripcion_del_plano'); ?>
                  </p>
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
                  <p class="details-planos__text">
                    <?php the_field('descripcion_del_plano'); ?>
                  </p>
                </div>
              </div>
              
            
            </div>
          <?php else: ?>
          
          <?php endif; ?>
        </div>
        <div class="slider slider-nav" >
          <div class="main-details__planos--img">
            <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano') ?>">
          </div>
          <div class="main-details__planos--img">
            <img style="" src="<?php the_field('imagen_del_plano_2') ?>">
          </div>
          <div class="main-details__planos--img">
            <img style="height:100%;width:100%;" src="<?php the_field('imagen_del_plano_3') ?>">          
          </div>
        </div>

      </div>
    </div>
  </section>
<?php else: ?>
      
<?php endif; ?>




<style>

/* PLANOS */
.slider-nav {
	margin-top: 70px;
}
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
	content: '49 m';
	color: #d71f26;
	top: 0.7rem;
    position: absolute;
    left: 2rem;
}

.slider-for .slick-dots li:nth-child(2):after{
	content: '49 m';
	color: #d71f26;
	top: 0.7rem;
    position: absolute;
    left: 2rem;
}
.slider-for .slick-dots li:nth-child(3):after{
	content: '49 m';
	color: #d71f26;
	top: 0.7rem;
    position: absolute;
    left: 2rem;
}
.slider-for .slick-dots li.slick-active:nth-child(1):after{
	color: #fff;
	top: 0.7rem;
    position: absolute;
    left: 2rem;
}
.slider-for .slick-dots li.slick-active:nth-child(2):after{
	color: #fff;
	top: 0.7rem;
    position: absolute;
    left: 2rem;
}
.slider-for .slick-dots li.slick-active:nth-child(3):after{
	color: #fff;
	top: 0.7rem;
    position: absolute;
    left: 2rem;
}


</style>