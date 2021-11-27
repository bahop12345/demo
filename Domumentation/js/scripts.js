wnHeight = jQuery(window).height();
(function($){
  jQuery(function(){

  	wnHeight = jQuery(window).height();
    wnWidth  = jQuery(window).width();    

    jQuery('.parallax').parallax();

    jQuery('.slider-wrapper').animate({'height':wnHeight})

    jQuery(window).scroll(function(){
    	scrolledPosition = jQuery(this).scrollTop();
		if (jQuery(this).scrollTop() > 1) {
			jQuery('.navbar-fixed').addClass('sticky');
		} else {
			jQuery('.navbar-fixed').removeClass('sticky');
		}

		jQuery('.slider-descriptions').css({'top':-scrolledPosition});
        jQuery('.slider-wrapper').find('.slider-nav > span').css({'top':scrolledPosition/2});
	});

     // Mobile nav (@media < 993)
        jQuery('.nav-toggle').click(function() {
            var menu = jQuery('.main-menu');
            var menuParent = jQuery('.left-menu')
            if(menu.is(':visible')){
                menu.hide();
                jQuery(this).removeClass('open');
                jQuery('body').css({'overflow':'auto'});
            } else {                
                menu.show();
                jQuery(this).addClass('open');
                jQuery('body').css({'overflow':'hidden'});
            }
        })

    $('.timeline').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        centerMode: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
    $('.testimonial').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    $('.c_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
    });

    if(wnWidth > 991) {
        jQuery('.centered').each(function(){
            parentHeight    = jQuery(this).parent('.row').height();
            marginTop       = parentHeight - jQuery(this).height();
            if(jQuery(this).height() < parentHeight) {
                jQuery(this).css({'margin-top':marginTop/2})
            }
        })
    }

  }); // end of document ready
})(jQuery); // end of jQuery name space