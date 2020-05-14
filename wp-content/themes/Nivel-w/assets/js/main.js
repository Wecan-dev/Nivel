$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
    $('.p-2').toggleClass('p-10')
    $('.hamburger-inner').toggleClass('inner-small')
  })
})

$(function () {
  'use strict'

  $('.nav-link__mobile').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
  })
})


$('.panel-heading').click(function(){
  $('.panel-collapse').removeClass('show');
  $('.panel-heading').removeClass('active');
  $(this).addClass('active')
  // $('.panel-collapse').on('show.bs.collapse', function () {
  //   $('.panel-heading').removeClass('active');
  //   $(this).siblings('.panel-heading').addClass('active');
  // });

  // $('.panel-collapse').on('hide.bs.collapse', function () {
  //   $('.panel-collapse').removeClass('show');
  //   $(this).siblings('.panel-heading').removeClass('active');
  // });
})


// MOdal static
// $('.main-video__items').click(function(){
//   $('.videoSolutions').modal({backdrop: 'static', keyboard: false})
// })


// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {

    $('.main-icono__footer').addClass('open');

  } else {
    $('.main-icono__footer').removeClass('open');

  }
});


$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.navbar-brand').addClass('d-none');
    $('.main-brand button').addClass('openMenu');
    $('html').addClass('fixed');
  } else {
    $(this).removeClass("is-active")
    $('html').removeClass('fixed');
    if ($(window).width() <= 767) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $('.main-brand button').removeClass('openMenu');
    }
  }
});

// Menú fixed
// $(window).scroll(function () {
//   if ($(document).scrollTop() > 70 && ($(window).width() <= 991)) {
//     $('.navbar').addClass('fixed-nav');

//   } else {
//     $('.navbar').removeClass('fixed-nav');

//   }
// });

$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >=0)) {
    $('.navbar').addClass('fixed-nav')
    $('.navbar-brand').addClass('iso-small')
    $('.nav-link').addClass('fixed-color'); 
  } else {
    $('.navbar').removeClass('fixed-nav')
    $('.navbar-brand').removeClass('iso-small')
    $('.nav-link').removeClass('fixed-color');
  }
});


/* Formularios*/
document.getElementById('s').placeholder='Buscar';
document.getElementById('searchsubmit').value='';


document.getElementById('comment').placeholder='Comentario';
document.getElementById('author').placeholder='Nombre';
document.getElementById('email').placeholder='Correo';

$('.form-submit > input[type=submit]').addClass('btn_custom btn--medium btn--filled--black');
document.getElementById('submit').value='';
$('.comment-form-cookies-consent label').text('Guardar mi nombre, email en este sitio para la próxima vez que comente.')
$('.comment-form-cookies-consent label').addClass('custom-control-label main-blog__description mt-0');
$('.comment-notes').text('Tu correo electrónico no será publicado*')
$('.comment-notes').addClass('main-blog__description')


$('.comment-reply-link').addClass('main-blog__link main-blog__link--black')
$('.comment-meta > a').addClass('main-sidebar__griddate mt-3 mb-3')
$('.comment-body > p').addClass('main-blog__description')
$('cite.fn').addClass('')


$(".comment-author img").attr("src","http://localhost/Nivel/wp-content/themes/Nivel-w/assets/img/Blog/image_7.png");



 

$( ".comment" ).append("<div style='order:-1; margin-right:40px;' class='img-avatar'></div>" );
$(".img-avatar").append("<img alt='' src='http://localhost/Nivel/wp-content/themes/Nivel-w/assets/img/Blog/image_7.png' srcset='http://0.gravatar.com/avatar/fc7ea081bbad6c64335cf8c8a01c0e12?s=64&amp;d=mm&amp;r=g 2x' class='avatar avatar-32 photo'>");

$('.commentlist').append("<div class='main-contactform__btnbox main-contactform__btnbox1'></div>")
$('.main-contactform__btnbox1').append("<a href='#comments' class='btn_custom btn--medium btn--filled--black'>Comenta aquí</a>")


$("input#field_29yf4d").attr("pattern","[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}");