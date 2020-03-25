<section class="main-details__ubicacion">
  <div class="main-details__ubicacion--content">
    <div class="main-details__ubicacion--img">
      <div class="mask">
        <div class="main-icono__ubicacion">
          <img class="img-icono__ubicacion" src="<?php echo get_template_directory_uri();?>/assets/img/logo-3.png">
        </div>
      </div>
      <img class="img-ubicacion" src="<?php echo get_template_directory_uri();?>/assets/img/imagen-ubicacion.png">
    </div>
    <div class="main-details__ubicacion--form">
      <div class="main-contactform__box">
        <h2>
          <strong>Quiero recibir
          </strong>
          <br>
          información de este proyecto
        </h2>
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
        </form>
      </div>
    </div>
  </div>

</section>