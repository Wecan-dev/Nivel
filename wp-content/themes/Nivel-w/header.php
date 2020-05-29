<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Nivel Propiedad Raíz: Proyectos inmobiliarios y comerciales en Antioquia.</title>

	<!-- Behavioral Meta Data -->
	<meta content='width=device-width, initial-scale=1, user-scalable=no' name='viewport'>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#212121">
	
	<!-- Google Meta Data -->
	<meta name='description', content='<?php if(is_home()){echo 'Estructuramos, gerenciamos y comercializamos proyectos en lugares increíbles. Apartamentos, Lotes de Vivienda, Parques Empresariales y Locales Comerciales.';}?>'>
  <meta name='description', content='<?php if(is_page( 7 )){echo 'Apartamentos, Lotes de Vivienda, Parques Empresariales y Locales Comerciales.';}?>'>
  <meta name='description', content='<?php if(is_page( 11 )){echo 'Descubre en nuestro blog las últimas tendencias en proyectos inmobiliarios y estilo de vida.';}?>'>
  <meta name='description', content='<?php if(is_page( 5 )){echo 'Somos una empresa con más de 30 años de experiencia en el sector inmobiliario.';}?>'>
  <meta name='description', content='<?php if(is_page( 19 )){echo 'Regístrate y haz tu solicitud de cotización.';}?>'>
  <meta name='description', content='<?php if(is_page( 17 )){echo 'Teléfono: 432 02 00. Horario de atención: 8:00 a. m - 6:00 p.m, lunes a viernes.';}?>'>
	<meta name='keywords', content=''>
	<meta name="robots" content="index, follow">

  <!-- Blog Meta Data -->
  <meta name="dc.language" content="es">
  <meta name="dc.source" content="<?php bloginfo('url');?>">
  <meta itemprop="url" content="<?php bloginfo('url');?>">

  <!-- Twitter Card Meta Data -->
  <meta content='summary' name='twitter:card'>
  <meta content='<?php bloginfo('url');?>' name='twitter:site'>
  <meta content='Nivel Propiedad Raíz: Proyectos inmobiliarios y comerciales en Antioquia.' name='twitter:title'>
  <meta name='twitter:description', content='<?php if(is_home()){echo 'Estructuramos, gerenciamos y comercializamos proyectos en lugares increíbles. Apartamentos, Lotes de Vivienda, Parques Empresariales y Locales Comerciales.';}?>'>
  <meta name='twitter:description', content='<?php if(is_page( 7 )){echo 'Apartamentos, Lotes de Vivienda, Parques Empresariales y Locales Comerciales.';}?>'>
  <meta name='twitter:description', content='<?php if(is_page( 11 )){echo 'Descubre en nuestro blog las últimas tendencias en proyectos inmobiliarios y estilo de vida.';}?>'>
  <meta name='twitter:description', content='<?php if(is_page( 5 )){echo 'Somos una empresa con más de 30 años de experiencia en el sector inmobiliario.';}?>'>
  <meta name='twitter:description', content='<?php if(is_page( 19 )){echo 'Regístrate y haz tu solicitud de cotización.';}?>'>
  <meta name='twitter:description', content='<?php if(is_page( 17 )){echo 'Teléfono: 432 02 00. Horario de atención: 8:00 a. m - 6:00 p.m, lunes a viernes.';}?>'>

  <!-- Open Graph Meta Data -->
  <meta content='website' property='og:type'>
  <meta content='<?php echo get_template_directory_uri();?>/assets/img/logo.png' property='og:image'>
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta content='' property='og:description'>
  <meta property="og:type" content="">
  <meta property="og:image" content="<?php echo get_template_directory_uri();?>/assets/img/logo.png">

  <!-- Links -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/offcanvas.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/contacto.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">

  <?php wp_head(); ?>
</head>

<body>
  
  <header id="home">
    <nav class="navbar navbar-expand-lg fixed-top navbar-fixed-js">
      <div class="container">
        <div class="main-brand">
          <a class="navbar-brand" href="<?php echo bloginfo('url').'/';?>">
            <img class="img-logo" src="<?php echo get_template_directory_uri();?>/assets/img/logo.png">
          </a>
          <button class="navbar-toggler p-2  hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
          type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>

        </button>
      </div>

      <div class="navbar-collapse offcanvas-collapse">
        <div class="navbar-nav mr-autos">
  
            <li class="nav-item">
              <a class="nav-link nav-link__mobile <?php if(is_home()){echo ' active';}?> " href="<?php echo bloginfo('url').'/';?>">Inicio </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile <?php if(is_page( 7 )){echo ' active';}?> " href="<?php echo bloginfo('url').'/proyecto';?>">Proyectos  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile <?php if(is_page( 11 )){echo ' active';}?>" href="<?php echo bloginfo('url').'/blog';?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile <?php if(is_page( 5 )){echo ' active';}?>" href="<?php echo bloginfo('url').'/nosotros';?>">Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link__mobile <?php if(is_page( 19 )){echo ' active';}?>" href="<?php echo bloginfo('url').'/servicios';?>">Servicio al cliente</a>
            </li>

            <!--<li class="nav-item">
              <a class="nav-link nav-link__mobile" href="< ?php echo bloginfo('url').'/inversion';?>">invierte desde el
                exterior</a>
              </li>-->
              <li class="nav-item">
                <a class="nav-link <?php if(is_page( 17 )){echo ' active';}?> " href="<?php echo bloginfo('url').'/contacto';?>">contacto</a>
              </li>
              <li class="nav-item">
                <a href="https://www.facebook.com/nivelpropiedadraiz" target="_blank" class="mr-3">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/fb_2.png" alt="">

                </a>
                <a href="https://www.instagram.com/nivelpropiedadraiz/" target="_blank" class="mr-3">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/instagram.png" alt="">

                </a>
              </li>
            </div>
          </div>
        </div>

      </nav>
    </header>