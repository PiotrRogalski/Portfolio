$(document).ready(function() { 

  //back to top button
  var btn = $('#backToTop');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 600) {
      btn.addClass('show-back-to-top-button');
    } else {
      btn.removeClass('show-back-to-top-button');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

//animation go to link
$('a[href^="#"]').on('click', function(event) {

if ($(this).hasClass('use-path-animation')==true){
    var target = $( $(this).attr('href') );

    if( target.length ) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 500);
    }
    }
  });

});