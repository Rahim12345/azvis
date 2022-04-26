window.addEventListener("load",()=>{
  document.querySelector(".preloader").classList.add("hidden");

setTimeout(function(){
  document.querySelector(".preloader").style.display="none";
      

  },500);
});



jQuery(document).ready(function(){
  "use strict";

  
  // navbar
  $(window).on("scroll",function(){
    if($(this).scrollTop()>30){
        $(".header").addClass("sticky");
    }
    else{
        $(".header").removeClass("sticky");
    }
})
  // Image lazy load  
  lozad(".lozad", { 
		rootMargin: "300px 0px",
		loaded: function (el) {
			el.classList.add("is-loaded");
		}
	}).observe();
	lozad(".lazy-load-bg", {}).observe(); 


  // Slideshow
  var swiperWorkWork = new Swiper(".alt-menu .swiper-container", {
    slidesPerView: 7,
    spaceBetween: 20,
    autoplaySpeed: 4000,
    autoplay: false,
    speed: 4000,
    loop: true,
    breakpoints: {
      320: {
        slidesPerView: 2,
        allowTouchMove: true,
      },
      640: {
        slidesPerView: 3,
        allowTouchMove: true,
      },
      767: {
        slidesPerView: 4,
        allowTouchMove: true,
      },
      991: {
        slidesPerView: 4,
        allowTouchMove: true,
      },
     
      1200: {
        slidesPerView: 5,
        mousewheel: false,
       
      },
      1299 :{
        mousewheel: false,
        allowTouchMove: false,
        slidesPerView: 7,
      }
    },

    pagination: {
      el: ".alt-menu .swiper-pagination",
      type: "progressbar",
    },

    navigation: {
      nextEl: ".alt-menu .next",
      prevEl: ".alt-menu .prev",
    },
  });
 // Slideshow -partners
  var swiperWorkWork = new Swiper(".partners .swiper-container", {
    slidesPerView: 1,
    spaceBetween: 20,
    autoplaySpeed: 4000,
    autoplay: false,
    speed: 1000,
    loop: true,
    breakpoints: {
      1200:{
        slidesPerView: 1,
      },
      640: {
        slidesPerView: 1,
        
      },
    },
    pagination: {
      el: ".partners .swiper-pagination",
      type: "progressbar",
    },

    navigation: {
      nextEl: ".partners .next",
      prevEl: ".partners .prev",
    },
  });
 
});
$('#phone-number', '#contact-form')

.keydown(function (e) {
    var key = e.which || e.charCode || e.keyCode || 0;
    $phone = $(this);

    // Don't let them remove the starting '('
    if ($phone.val().length === 1 && (key === 8 || key === 46)) {
        $phone.val('('); 
        return false;
    } 
    // Reset if they highlight and type over first char.
    else if ($phone.val().charAt(0) !== '(') {
        $phone.val('('+$phone.val()); 
    }

    // Auto-format- do not expose the mask as the user begins to type
    if (key !== 8 && key !== 9) {
        if ($phone.val().length === 4) {
            $phone.val($phone.val() + ')');
        }
        if ($phone.val().length === 5) {
            $phone.val($phone.val() + ' ');
        }           
        if ($phone.val().length === 9) {
            $phone.val($phone.val() + '-');
        }
    }

    // Allow numeric (and tab, backspace, delete) keys only
    return (key == 8 || 
            key == 9 ||
            key == 46 ||
            (key >= 48 && key <= 57) ||
            (key >= 96 && key <= 105)); 
})

.bind('focus click', function () {
    $phone = $(this);

    if ($phone.val().length === 0) {
        $phone.val('(');
    }
    else {
        var val = $phone.val();
        $phone.val('').val(val); // Ensure cursor remains at the end
    }
})

.blur(function () {
    $phone = $(this);

    if ($phone.val() === '(') {
        $phone.val('');
    }
});




  // click events
$(document).ready(function(){
  $(".myclick").click(function(){
    $(".active").addClass('active');
  });

  $(".click").click(function(){
    $("#modal").css("display","flex");
  });
  $(".menu-toggle-mobile").click(function(){
    // $(this).toggleClass("is-active");
    $(".vs-menu-wrapper").addClass("vs-body-visible");
  });
  $( ".vs-menu-toggle" ).click(function() {
    $(".vs-menu-wrapper").removeClass("vs-body-visible");
    });
  
    wow = new WOW({
      animateClass: 'animated',
      offset: 100
  });
  wow.init();
 
  $(".menu-toggle").click(function(e){
    e.preventDefault();
    $(this).toggleClass("is-active");
   
    $(".header__main__holder__navigation").toggleClass('active');
  });
  $('.carousel').carousel({
    interval: 10000,
    cycle: true,
    pause: "null"
  });
  
})


