$(document).ready(function(){
    $(function() {    
    $('.header-menu').before('<div class="menuTrigger"><i></i></div>');
    $('.menuTrigger').click(function() {
        $('body').toggleClass('mobile-open');
        $('.childTrigger').removeClass('child-open');
        $('.header-menu').slideToggle(200);
        return false;
     });
  
   $('.hs-item-has-children > a ').after('<div class="childTrigger"></div>');
    $('.childTrigger').click(function() {
        $(this).parent().siblings('.hs-item-has-children').find('.childTrigger').removeClass('child-open');        
        $(this).parent().siblings('.hs-item-has-children').find('.hs-menu-children-wrapper').slideUp(250)
        $(this).next('.hs-menu-children-wrapper').slideToggle(250);         
        $(this).next('.hs-menu-children-wrapper').children('.hs-item-has-children').find('.hs-menu-children-wrapper').slideUp(250);         
        $(this).next('.hs-menu-children-wrapper').children('.hs-item-has-children').find('.child-trigger').removeClass('child-open');
        $(this).toggleClass('child-open');
        return false;
    });

     var currentUrl = window.location.href;
    
    $(".header-menu ul li a").each(function() {
        if (this.href === currentUrl) {
            $(this).closest('li').addClass("is-active");
        }
    });

  });

// Header Search    
 $('.header-search .search-icon').click(function(){
    $('.search-bar').toggleClass('active-search');
    $('.search-bar .search-field').focus();
 });


// Hero Slider
 $('.hero_slider').slick({
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    vertical: true,
    verticalSwiping: true,
    autoplay: true,
    autoplaySpeed: 5000,
 });
  

// Logo Slider
  $('.logo_slider').slick({
    speed: 8000,
    autoplay: true,
    autoplaySpeed: 0,
    cssEase: 'linear',
    draggable:false,
    focusOnSelect:false,
    pauseOnFocus:false,
    pauseOnHover:false,
    variableWidth: true,
    infinite: true,
    arrows: false,
  });


// Service Slider
 $('.service-inn').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '0px',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        centerPadding: '180px',
        arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        centerPadding: '150px',
        arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
         centerPadding: '20px',
        arrows: false,
        dots: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
 });


// testimonial Slider
 $('.testimonial_slide').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    // autoplay: true

 });


// Signal About Video  
 // $(".about-vdo").each(function () {
 //  $(this).click(function () {
 //    var video = $(this).find("video").get(0); // Get the video element inside the clicked card
   
 //    // Pause all other videos
 //    $("video").each(function() {
 //      if (this !== video) {
 //        this.pause(); // Pause all other videos except the clicked one
 //      }
 //        $(this).parent().removeClass('show');
 //    });

 //    // Toggle play/pause for the clicked video
 //    if (video.paused) {
 //      $(this).addClass('show'); // Add 'show' class to indicate the video is playing
 //      video.play();  // Play the clicked video
 //    } else {
 //      $(this).removeClass('show'); // Remove 'show' class if the video is paused
 //      video.pause();  // Pause the clicked video
 //    }
 //  });
  
 // });

 //Popup Video
 $('.play-icon').click(function(){
    $('.video-popup').show();
    $("video").trigger("play");
 });
 $('.vdopopup-inn .close, .video-popup').click(function(){
    $('.video-popup').hide();
    $("video").trigger("pause");
 });

// Counter Section
 var a = 0;
$(window).on('load scroll', function() {
    var $counter = $(".counter");
    if ($counter.length) {
        var oTop = $counter.offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.count').each(function() {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ 
                    Counter: $this.text() 
                }, {
                    duration: 5000,
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    } 
                });
            });   
            a = 1;
        }
    }
});



});




