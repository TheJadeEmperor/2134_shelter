
  (function ($) {
  
  "use strict";

    // NAVBAR
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    $(function() {
      $('.hero-slides').vegas({
          slides: [
              { src: 'images/hero/hero_7.jpg' },
              { src: 'images/hero/hero_1.jpg' },
              { src: 'images/hero/hero_2.jpg' },
              { src: 'images/hero/hero_3.jpg' },
              { src: 'images/hero/hero_4.jpg' },
              { src: 'images/hero/hero_5.jpg' }, 
              { src: 'images/hero/hero_6.jpg' }
          ],
          timer: false,
          transitionDuration: 5000,
          animationDuration: 9000,
          animation: 'kenburns',
      });
    });
    
    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height() + 60;
  
      scrollToDiv(elWrapped,header_height);
      return false;
  
      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-navheight;
  
        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });
  
  })(window.jQuery);


