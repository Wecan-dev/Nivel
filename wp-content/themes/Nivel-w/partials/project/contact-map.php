<section class="main-details__ubicacion" id="main-details__ubicacion">
  <div class="main-details__ubicacion--content">
    <div class="main-details__ubicacion--img">
      <div class="mask">
        <div class="main-icono__ubicacion">
          <img class="img-icono__ubicacion" src="<?php echo get_template_directory_uri();?>/assets/img/logo-3.png">
        </div>
      </div>
      <iframe style="width: 100%;height: 100%;" 
    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3966.4497363100777!2d-75.57303108600856!3d6.204252595508624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sCra%2042A%20%23%201-15%2C%20Torre%204%2C%20Oficina%20307%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20San%20Fernando%20Plaza%2C%20Medell%C3%ADn%2C%20CO!5e0!3m2!1ses!2sve!4v1584460257028!5m2!1ses!2sve"
    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="main-details__ubicacion--form">
      <div class="main-contactform__box">
        <h2>
          <strong>Quiero recibir
          </strong>
          <br>
          información de este proyecto
        </h2>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
        <!--
        <form action="">
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput" placeholder="Nombre" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput" placeholder="Apellidos" type="text">
          </div>
          <div class="d-flex">
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="tel">
            </div>
          </div>
          <div class="form-group">
            <textarea class="main-contactform__textarea" placeholder="Mensaje" rows="8"></textarea>
          </div>
          <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input class="custom-control-input" id="customControlInline" type="checkbox">
            <label class="custom-control-label" for="customControlInline">
              Acepto
            </label>
            <a class="main-contactform__textlink" href="#">
              términos y condiciones
            </a>
          </div>
          <div class="main-contactform__btnbox">
            <button class="btn_custom btn--medium btn--filled--red">
              Enviar
            </button>
          </div>
        </form>-->
      </div>
    </div>
  </div>

</section>