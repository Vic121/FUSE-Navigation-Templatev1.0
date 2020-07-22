 /*-------------------------------------------------------------------------------
    Navigation - Hide mobile menu after clicking on a link
  -------------------------------------------------------------------------------*/

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });


    $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
  });


  /*-------------------------------------------------------------------------------
    PRE LOADER
  -------------------------------------------------------------------------------*/
(function($) {
    "use strict";
    //On load
     $(window).on('load', function() {
         var load;
         setTimeout(function() {
             $('body').addClass('load');
         }, 500);

            
     });

})(jQuery);
  /*-------------------------------------------------------------------------------
    PRE modal
  -------------------------------------------------------------------------------*/

// Get the modal
var modal = document.getElementById('id01fuse');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
  
  /*-------------------------------------------------------------------------------
    Section3--> Setting
  -------------------------------------------------------------------------------*/
var scrollTop = 0;

$(".content-wrapper").scroll(function () {
	if ($(this).scrollTop() > 300) {
		$(".menu-bar-wrapper").css('bottom', -$(this).scrollTop());
		return false;
	}
	$(".menu-bar-wrapper").css('bottom', -$(this).scrollTop());
	var st = jQuery(this).scrollTop();

	if (st > 20) {
		if (st < scrollTop) {
			jQuery(".menu-bar").addClass("active");
		} else {
			jQuery(".menu-bar").removeClass("active");
		}
		scrollTop = st;
	}

});
  /*-------------------------------------------------------------------------------
    section-1 ->fullscreen -> swiper1
  -------------------------------------------------------------------------------*/

var swiper1 = new Swiper ('.swiper1', {
  // Optional parameters
  loop: true,
  slidesPerView : 3,
  centeredSlides : true,
  effect : 'coverflow',
  coverflow: {
            rotate: 1,
            stretch: 0,
            depth: 200,
            modifier: 3,
            slideShadows : true
        },
   
  // If we need pagination
  pagination: '.swiper-pagination1',
   paginationClickable: true,
  // Navigation arrows
  nextButton: '.swiper-button-next',
  prevButton: '.swiper-button-prev',
    
  })
  /*-------------------------------------------------------------------------------
    section-5 ->Mobile swiper3
  -------------------------------------------------------------------------------*/

var swiper3 = new Swiper('.swiper3', {
    pagination: '.swiper-pagination3',
    paginationClickable: true,
	slidesPerView: 2,
	 spaceBetween: 5,
	 effect : 'coverflow',
}); 

 /*-------------------------------------------------------------------------------
    section-2->PRODUCT swiper2
  -------------------------------------------------------------------------------*/

var swiper2 = new Swiper('.swiper2', {
    pagination: '.swiper-pagination2',
    paginationClickable: true,

});