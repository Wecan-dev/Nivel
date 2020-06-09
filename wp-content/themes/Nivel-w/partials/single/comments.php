<!-- Seccion de comentarios-->
<div class="main-blog__comment">
<div class="main-contactform__btnbox">
    <button class="btn_custom btn--medium btn--filled--black">
    Comentarios
    </button>
</div>



<div class="main-blog__infogrid mb-4">
    
    <div class="main-blog__infoimg">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/image_7.png" alt="">
    </div>
    <div class="main-blog__infotext">
    <div class="main-blog__infotext--top main-blog__infotext--column">
        <strong>
        Jonathan Arias
        </strong>
        <p class="main-sidebar__griddate mt-3 mb-3">Julio 19 del 2020</p>
    </div>
    <p class="main-blog__description">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
        unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <a href="" class="main-blog__link main-blog__link--black">Responder</a>
    </div>


</div>
<div class="main-blog__infogrid mb-4">
    <div class="main-blog__infoimg">
    <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/image_7.png" alt="">
    </div>
    <div class="main-blog__infotext">
    <div class="main-blog__infotext--top main-blog__infotext--column">
        <strong>
        Andrea Morales
        </strong>
        <p class="main-sidebar__griddate mt-3 mb-3">Julio 19 del 2020</p>
    </div>
    <p class="main-blog__description">Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
        unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    <a href="" class="main-blog__link main-blog__link--black">Responder</a>
    </div>


</div>
<div class="main-contactform__btnbox">
    <a href="#comments" class="btn_custom btn--medium btn--filled--black">
    Comenta aquí
    </a>
</div>
<div id="comments">
    <?php comments_template();?>
</div>
<!-- <p class="main-blog__description">Tu correo electrónico no será publicado*</p>
<form action="">
    <div class="form-group">
    <textarea class="main-blog__forms main-blog__textarea" placeholder="Tu comentario" rows="8"></textarea>
    </div>
    <div class="form-group form-group__grid">
    <input class="main-blog__forms form-control" id="formGroupExampleInput" placeholder="Nombre"
        type="text">
    <input class="main-blog__forms form-control" id="formGroupExampleInput" placeholder="Email" type="text">
    <div class="">
        <button class="btn_custom btn--medium btn--filled--black">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/Blog/send.png" alt="">
        </button>
    </div>
    </div>
    <div class="custom-control custom-checkbox my-1 mr-sm-2">
    <input class="custom-control-input" id="customControlInline" type="checkbox">
    <label class="custom-control-label main-blog__description mt-0" for="customControlInline">
        Guardar mi nombre, email en este sitio para la próxima vez que comente.
    </label>

    </div>
</form> -->


<!-- END Seccion de comentarios-->