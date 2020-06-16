
$(document).ready(function(){
  /* Owl carousel fire function */
  let owl = $(".owl-gallery");

  $(".owl-sponsors").owlCarousel({
    items: 4,
    loop: true, 
    smartSpeed: 500,
    autoplay: true,
    autoplayTimeout: 3000
  });

  $(".owl-gallery").owlCarousel({
    items: 1,
    loop: false, 
    smartSpeed: 500,
    autoplay: false,
    nav: true,
    dots: true,
    mergeFit: false
  });

  $(document).keyup(function(e) {
    if (e.keyCode == 37) {
      owl.trigger('prev.owl.carousel');
    } else if (e.keyCode == 39) {
      owl.trigger('next.owl.carousel');
    }
  })


  /* Skitter Slider fire function */
  $(function() {
    if ( $('.skitter-large').length ) {
      $('.skitter-large').skitter({
        velocity: 0.8,
        interval: 3000,
        navigation: false,
        numbers: false,
        dots: false,
        preview: false,
        stop_over: false,
        theme: 'square',
        responsive: {
          small: {
            max_width: 768
          },
          medium: {
            max_width: 1024
          }
        }
      });
    }
  });

});


/* toggle language menu */
$('.lang-switch .current-lang').click(function(e) {
  e.preventDefault();
  $('.lang-switch .sub-menu').slideToggle(300);
})

/* Open small nav menu */
$('.sm-navbar .toggler').click(function() {
  $('.sm-navbar .menu-container').fadeIn(300);
  $('.sm-navbar ul').css('transform', 'translateX(0)');
})

/* Close small nav menu */
$('.sm-navbar .close').click(function() {
  $('.sm-navbar .menu-container').fadeOut(300);
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



let timer;
$('#name').keyup(function() {
  clearTimeout(timer);
  timer = setTimeout(function() {
    if ( !$('#name').val() ) {
      $('#name').siblings('.err').css('display', 'block');
    } else {
      $('#name').siblings('.err').css('display', 'none');
    }
  },500)
})

$('#phone').keyup(function() {
  clearTimeout(timer);
  timer = setTimeout(function() {
    if ( !$('#phone').val() ) {
      $('#phone').siblings('.err').css('display', 'block');
    } else {
      $('#phone').siblings('.err').css('display', 'none');
    }
  },500)
})

$('#message').keyup(function() {
  clearTimeout(timer);
  timer = setTimeout(function() {
    if ( !$('#message').val() ) {
      $('#message').siblings('.err').css('display', 'block');
    } else {
      $('#message').siblings('.err').css('display', 'none');
    }
  },500)
})




let gridImgs = $('.our-gallery .grid-container .box .img-container'),
    modalImgs = $('.our-gallery .owl-gallery .img-container');

    gridImgs.click(function() {
      let i = $(this).attr('data-index');
      console.log( modalImgs[i] )
      $(".owl-gallery").trigger("to.owl.carousel", [i, 5])
      $('.carousel-modal').css({
        opacity: 1,
        visibility: 'visible'
      });
      $('.carousel-modal .content').css('transform', 'translateY(0)');
    });


    /* Close gallery modal Function*/
    function closeCarouselModal() {
      $('.carousel-modal').css({
        opacity: 0,
        visibility: 'hidden'
      });
      $('.carousel-modal .content').css('transform', 'translateY(-75px)');
    }

    $('.carousel-modal .close').click(closeCarouselModal);
    $(document).keyup(function(e) {
      if (e.keyCode == 27) {
        closeCarouselModal();
      }
    })
    $('.carousel-modal').click(function(e) {
      if ( e.target == $('.carousel-modal')[0] ) {
        closeCarouselModal();
      }
    })


    