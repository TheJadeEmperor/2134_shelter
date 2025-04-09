var $=jQuery.noConflict();

jQuery(document).ready(function($) {
    
    //naviagte lightbox
    $("body").keydown(function(e) {
      if(e.keyCode == 37) { // left
        plusSlides(-1); console.log('plusSlides(-1);');
      }
      else if(e.keyCode == 39) { // right
        plusSlides(1); console.log('plusSlides(1);');
      }
      else if(e.keyCode == 27) { //esc
          var anime = $('.open').attr('id'); 
        closeModal(anime); console.log('closeModal();');
      }
    });


    //hoverbox_video element
    let vidArray = $(".hoverbox_video");

    $(vidArray).hover(function(){ //unmute vid when mouseover vide s
        //console.log($(this)); 
        $(this)[0].muted = false;
    });

    $(vidArray).mouseleave(function() {  //mute vid on mouse leave
        $(this)[0].muted = true;
    });

    $(vidArray).on('click', function(event) {
        event.preventDefault();
        //var video = document.getElementById('myVideo');

        if ($(this)[0].requestFullscreen) {
            $(this)[0].requestFullscreen();
        } else if ($(this)[0].mozRequestFullScreen) { // Firefox
            $(this)[0].mozRequestFullScreen();
        } else if ($(this)[0].webkitRequestFullscreen) { // Chrome, Safari and Opera
            $(this)[0].webkitRequestFullscreen();
        } else if ($(this)[0].msRequestFullscreen) { // IE/Edge
            $(this)[0].msRequestFullscreen();
        }
    });

});


function openModal(anime) {
    document.getElementById(anime).style.display = "block";
    //add class to anime div
    $('#'+anime).addClass('open');
}
  
function closeModal(anime) {
    console.log('closeModal ' + anime); 
    $('.modal').css('display', 'none');
    $('#'+anime).removeClass('open');
}

  
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    console.log('currentSlide slideIndex '+n);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i; 

    var slides = $('.open').find('.mySlides'); //lightbox_main_image
    var dots = $('.open').find('.demo'); //slides under main img
    //console.log('slides ' + slides);
    //console.log('dots ' + dots);

    var captionText = document.getElementById("caption");
    
    if (n > slides.length) {slideIndex = 1} //last slide
    if (n < 1) {slideIndex = slides.length} //no slides 
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");

    }

     //show 4 slides only
     for (i = 0; i < dots.length; i++) {

       
             dots[i].style.display = "none"; 
      
             if(slideIndex+2 == i || slideIndex+1 == i || slideIndex == i || slideIndex-1 == i) { 
                //4 slides nearest slideIndex
                 dots[i].style.display = "block"; 
                 console.log('i: '+i+' slideIndex: '+slideIndex);
             }
     
           }
     
     
 
    if (slides.length === 0) {
        console.warn("No slides found.");
        return; // Stop execution
    }

      slides[slideIndex-1].style.display = "block";
      //dots[slideIndex-1].className += " active";
      //captionText.innerHTML = dots[slideIndex-1].alt;
    
}