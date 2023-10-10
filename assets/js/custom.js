(function ($) {
 "use strict";
$(document).ready(function(){
	  
		/*
		Mean Menu Responsive
		============================*/		
        jQuery('nav#main-menu').meanmenu();				
		/*
		Why Choose Us Crousel
		============================*/ 	
		  $(".all-team").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:true, 
			dots:false, 
			margin:30,
			items :4,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},				
				992:{
					items:4
				}
			}
		  }); 
		/*
		Testimonial Crousel
		============================*/ 	
		  $(".all-testimonial").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			dots:true, 
			items :3,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:2
				},				
				1000:{
					items:3
				}
			}			
		  }); 			  
		/*
		Project Feed Back Crousel
		============================*/ 	
		  $(".project-feedback").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			dots:false, 
			items :1,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
			
				0:{
					items:1
				},				
				600:{
					items:1
				},
				768:{
					items:1
				},				
				992:{
					items:1
				},				
				1000:{
					items:1
				}
			}
		  }); 		   			
		/*
		Testimonial Crousel
		============================*/ 	
		  $(".all-testimonial").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			dots:true, 
			items :1,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				768:{
					items:1
				},				
				1000:{
					items:1
				}
			}			
		  }); 			
	
		/*
		Slider Crousel
		============================*/ 
		$(".all-slide").owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            autoplay: true,	
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            mouseDrag: false,
            touchDrag: false,
        });
        
        $(".all-slide").on("translate.owl.carousel", function(){
            $(".slider-text h1").removeClass("animated fadeInUp").css("opacity", "0");
            $(".slider-text h2").removeClass("animated fadeInUp").css("opacity", "0");
            $(".slider-text ul").removeClass("animated fadeInUp").css("opacity", "0");
        });
        
        $(".all-slide").on("translated.owl.carousel", function(){
            $(".slider-text h1").addClass("animated fadeInUp").css("opacity", "1");
            $(".slider-text h2").addClass("animated fadeInUp").css("opacity", "1");
            $(".slider-text ul").addClass("animated fadeInUp").css("opacity", "1");
        });	
		
		/*
		Patner Crousel
		============================*/ 	
		  $(".all-patner").owlCarousel({
			autoplay: true, 
			pagination:false,
			nav:false, 
			dots:true, 
			items :4,
			navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
			
				0:{
					items:2
				},				
				600:{
					items:2
				},
				768:{
					items:2
				},				
				992:{
					items:4
				},				
				1000:{
					items:4
				}
			}
		  }); 
		/*
		Price Range Js
		============================*/					
		$( "#price_id" ).slider({
			range: true,
			min: 0,
			max: 100,
			values: [ 0, 30 ],
			slide: function( event, ui ) {
				$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
			}
		});
		$( "#amount" ).val( "$" + $( "#price_id" ).slider( "values", 0 ) +
			" - $" + $( "#price_id" ).slider( "values", 1 ) );	
			
		/*
		scrollUp
		============================*/	
		$.scrollUp({
			scrollText: '<i class="fa fa-long-arrow-up"></i>',
			easingType: 'linear',
			scrollSpeed: 900,
			animation: 'fade'
		});	
		/*
		Counter Js
		============================*/ 
        $('.counter').counterUp({
            delay: 10,
            time: 1000			
        });
			
		/*
		Magnific Popup
		============================*/ 		
        $('.gallery-photo').magnificPopup({
            type: 'image',
            gallery: {
              enabled: true
            },
        });	 		
		/*
		Magnific Video Popup
		============================*/ 		
        $('.mfp-iframe').magnificPopup({
            type: 'iframe'
        });	 

		/*
		Project Gallery Js
		============================*/	
		$(".gallery-container").isotope({
		itemSelector: '.filtr-item',
		layoutMode: 'fitRows',
		});
		$("ul.simplefilter li").on("click",function(){
		$("ul.simplefilter li").removeClass("active");
		$(this).addClass("active");
		 
		var selector = $(this).attr('data-filter');
		$(".gallery-container").isotope({
		filter: selector,
		animationOptions: {
		duration: 750,
		easing: 'linear',
		queue: false,
		}
		});
		return false;
		});
		
		/*
		Preeloader
		============================*/
		$(window).on("load", function() {
			$('#preloader').fadeOut();
			$('#preloader-status').delay(200).fadeOut('slow');
			$('body').delay(200).css({'overflow-x':'hidden'});
		});


        
		
		
	});	
})(jQuery);

