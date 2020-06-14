
$(document).ready(function(){
  /* Owl carousel fire function */
  $(".owl-carousel").owlCarousel({
    items: 4,
    loop: true, 
    smartSpeed: 500,
    autoplay: true,
    autoplayTimeout: 3000
  });
});


/* toggle language menu */
$('.lang-switch .current-lang').click(function(e) {
  e.preventDefault();
  $('.lang-switch .sub-menu').slideToggle(300);
})

/* Open small nav menu */
$('.sm-navbar .toggler').click(function() {
  $('.sm-navbar ul').css('transform', 'translateX(0)');
})

/* Close small nav menu */
$('.sm-navbar .close').click(function() {
  $('.sm-navbar ul').css('transform', 'translateX(500px)');
})

/* Contact form validation function */
function validation() {
  let valid = true,
      email = /^[A-Za-z0-9_-]+@(hotmail|gmail|yahoo)\.com$/;
  
  if (!$('#name').val() || !$('#phone').val() || !$('#message').val()) {
    return valid = false;
  }

  if ( email.test($('#email').val()) === false ) {
    return valid = false;
  }
  return valid;
}

$('#submit-btn').click(function(e) {
  if ( !validation() ) {
    e.preventDefault();
    console.log('prevented')
  }
});






/*

  CIRCLE SLIDER

*/
