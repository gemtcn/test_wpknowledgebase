import $ from "jquery";
// import bootstrap from "bootstrap/dist/js/bootstrap";

// Show account menu
$('#toggleAccountMenu').on('click', function () {
  $('.wp-main--header__account--menu').toggleClass('show');
})

// Toggle sub item on sidebar
$('.wp-main--sidebar__group--submenu > p').on('click', function () {
  const arrowRight = 'url(../images/icon-arrow-right.svg) no-repeat 50%';
  const arrowDown = 'url(../images/icon-arrow-down.svg) no-repeat 50%';
  const hasUl = $(this).next('ul').length == 1;
  if ($(this).next('ul').hasClass('show')) {
    $(this).children('.wp-main--sidebar__group--icon').css('background', arrowRight);
    $(this).next('ul').removeClass('show');
  } else if (hasUl && !$(this).next('ul').hasClass('show')) {
    $(this).children('.wp-main--sidebar__group--icon').css('background', arrowDown);
    $(this).next('ul').addClass('show');
  }
})

$('#toggleMobileMenu').on('click', function () {
  if ($('#mobileMenu').hasClass('show')) {
    $('#mobileMenu').removeClass('show');
    $('body').removeClass('no-scroll');
    $(this).children('img').attr('src', '../dist/images/icon-show-menu.svg');
  } else {
    $('#mobileMenu').addClass('show');
    $('body').addClass('no-scroll');
    $(this).children('img').attr('src', '../dist/images/icon-close-menu.svg');
  }
})

$(window).on('click', function () {
  $('.wp-main--header__account--menu').removeClass('show');
  $('body').removeClass('no-scroll');
});

$('.wp-main--header__account--menu, #toggleAccountMenu').on('click', function (event) {
  event.stopPropagation();
});