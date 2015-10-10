/* ================================================== *
 *
 *    jquery.bootstrap-autohidingnavbar.js
 *
 * ================================================== */

// Return settings is $('.navbar-fixed-top').autoHidingNavbar('disableAutohide',false);
$('.navbar-fixed-top').autoHidingNavbar('disableAutohide',false);
$(window).scroll(function () {
  var header = $('#header');
  var scroll = $(document).scrollTop();
  if(scroll >= 1){  // 0=default, 1=scroll-start
    header.addClass('is-black');
  } else {
    header.removeClass('is-black');
  }
});

// is Shown ?
var $navbar_collapse = $('.navbar-collapse');
$navbar_collapse.on('show.bs.collapse', function () {
  $(this).parents('.navbar').addClass('is-show');
});
$navbar_collapse.on('hidden.bs.collapse', function () {
  $(this).parents('.navbar').removeClass('is-show');
});
// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
