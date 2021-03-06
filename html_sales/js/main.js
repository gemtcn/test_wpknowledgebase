import $ from "jquery";
// import bootstrap from "bootstrap/dist/js/bootstrap";

$('#spc-register--modal__close').on('click', function() {
  $(this).parent('.spc-register--modal').addClass('hidden');
})

// Toggle mobile menu
$('#showMobileMenu').on('click', function () {
  if ($('.spc-header--main__content').hasClass('show')) {
    $('.spc-header--main__content').removeClass('show');
    $(this).removeClass('close');
    $('body').removeClass('no-scroll');
  } else {
    $('.spc-header--main__content').addClass('show');
    $(this).addClass('close');
    $('body').addClass('no-scroll');
  }
})