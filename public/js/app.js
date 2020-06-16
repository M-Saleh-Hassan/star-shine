/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  /* Owl carousel fire function */
  var owl = $(".owl-gallery");
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
  $(document).keyup(function (e) {
    if (e.keyCode == 37) {
      owl.trigger('prev.owl.carousel');
    } else if (e.keyCode == 39) {
      owl.trigger('next.owl.carousel');
    }
  });
  /* Skitter Slider fire function */

  $(function () {
    if ($('.skitter-large').length) {
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

$('.lang-switch .current-lang').click(function (e) {
  e.preventDefault();
  $('.lang-switch .sub-menu').slideToggle(300);
});
/* Open small nav menu */

$('.sm-navbar .toggler').click(function () {
  $('.sm-navbar .menu-container').fadeIn(300);
  $('.sm-navbar ul').css('transform', 'translateX(0)');
});
/* Close small nav menu */

$('.sm-navbar .close').click(function () {
  $('.sm-navbar .menu-container').fadeOut(300);
  $('.sm-navbar ul').css('transform', 'translateX(500px)');
});
/* Contact form validation function */

function validation() {
  var valid = true,
      email = /^[A-Za-z0-9_-]+@(hotmail|gmail|yahoo)\.com$/;

  if (!$('#name').val() || !$('#phone').val() || !$('#message').val()) {
    return valid = false;
  }

  if (email.test($('#email').val()) === false) {
    return valid = false;
  }

  return valid;
}

$('#submit-btn').click(function (e) {
  if (!validation()) {
    e.preventDefault();
    console.log('prevented');
  }
});
var timer;
$('#name').keyup(function () {
  clearTimeout(timer);
  timer = setTimeout(function () {
    if (!$('#name').val()) {
      $('#name').siblings('.err').css('display', 'block');
    } else {
      $('#name').siblings('.err').css('display', 'none');
    }
  }, 500);
});
$('#phone').keyup(function () {
  clearTimeout(timer);
  timer = setTimeout(function () {
    if (!$('#phone').val()) {
      $('#phone').siblings('.err').css('display', 'block');
    } else {
      $('#phone').siblings('.err').css('display', 'none');
    }
  }, 500);
});
$('#message').keyup(function () {
  clearTimeout(timer);
  timer = setTimeout(function () {
    if (!$('#message').val()) {
      $('#message').siblings('.err').css('display', 'block');
    } else {
      $('#message').siblings('.err').css('display', 'none');
    }
  }, 500);
});
var gridImgs = $('.our-gallery .grid-container .box .img-container'),
    modalImgs = $('.our-gallery .owl-gallery .img-container');
gridImgs.click(function () {
  var i = $(this).attr('data-index');
  console.log(modalImgs[i]);
  $(".owl-gallery").trigger("to.owl.carousel", [i, 5]);
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
$(document).keyup(function (e) {
  if (e.keyCode == 27) {
    closeCarouselModal();
  }
});
$('.carousel-modal').click(function (e) {
  if (e.target == $('.carousel-modal')[0]) {
    closeCarouselModal();
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\star-shine\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\star-shine\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });