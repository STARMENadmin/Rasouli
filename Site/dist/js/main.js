jQuery(function($){

$(document).ready(function(){
	

	   // slide in nav
    
        function slideFromTopNav(){
               if($(window).scrollTop() >= 600){   
                    $('.header-nav').addClass('slideDown');              
                }else{
                    $('.header-nav').removeClass('slideDown');
                }
        }
    
    
     
            
   // lazy load setions{
	   
   $(window).scroll( function(){
	
			$('.fade-in').each( function(){
			var objBot = $(this).offset().top + ($(this).outerHeight() / 3);
			var winBot = $(window).scrollTop() + $(window).height();

			if( winBot > objBot ){
				$(this).animate({
					opacity: 1
				}, 500 );
			}
		});
	
	
	});

        
        
           
       
    
    
$(window).scroll(function(){
    
          if ($(window).width() > 940) { 
              slideFromTopNav(); 
          } else { 
              

         }
                      
                
});
    
            $('.hamburger').click(function() {      
             $('.header-nav').addClass('slideLeft'); 
                $(this).hide();
                $('.closeNav').show();
           
            });
            
                $('.closeNav').click(function() {      
             $('.header-nav').removeClass('slideLeft'); 
                $(this).hide();
                $('.hamburger').show();
           
            });
	
	// Parallax
	
/*
		function parallax(){
		    var scrolled = $(window).scrollTop();
		    var elementOffset = $('.parallaxwrapper').offset().top;
		    $('.paraImage2').css('bottom', + (scrolled * 0.2 / 2 ) + 'px');
		}
		
		$(window).scroll(function(e){
		    parallax();
		});
*/

/*
function simpleParallax(intensity, element) {
        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var height = element.height();
            
            var imgPos = scrollTop / intensity  + 'px';
            element.css('transform', 'translateY(' + imgPos + ')');
        });
    }
	var test = $(".paraImage2");
	
	
	simpleParallax(15, test);
*/
	
	

      $('.home-section-6').slick({
          prevArrow: $('#homeBlogPrevious'),
          nextArrow: $('#homeBlogNext'),
            slide: '.slickWrapper',
            infinite: true,
            slidesToShow: 1,
             responsive: [
                {
                    breakpoint: 769,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: false
                    
                  }
                }

              ]
      });

  
  	$('.testimonialHoverText').hide();
  	$('.testimonialOpacity').hide();
   
    $(' .hoverWrapper').mouseenter(function() {
	  	$(this).children('.testimonialHoverText').fadeIn(700);
	  	$(this).children('.testimonialOpacity').fadeIn(700);		 
    });
    
        $(' .hoverWrapper').mouseleave(function() {
	  	$(this).children('.testimonialHoverText').fadeOut();
	  	$(this).children('.testimonialOpacity').fadeOut();		 
    });
    
    // procedure section
    $(' .expandColumn').mouseenter(function() {
        
         if ($(window).width() > 768) { 
        
            $(this).children('.copyWrapper').children('.proPara').stop().slideToggle();
            $(this).children('.copyWrapper').children('.roundButton').children('.bg').addClass('bgOver');
            $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.a').addClass('blackBG');
            $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.b').addClass('blackBG');
           $(this).children('.copyWrapper').children('.roundButton').children('.readmore').stop().fadeIn();
             

             
         }
        
        
    });
    
     $(' .expandColumn').mouseleave(function() {
         
          if ($(window).width() > 768) { 
         
             $(this).children('.copyWrapper').children('.proPara').stop().slideToggle();
             $(this).children('.copyWrapper').children('.roundButton').children('.bg').removeClass('bgOver');
             $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.a').removeClass('blackBG');
             $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.b').removeClass('blackBG');
             $(this).children('.copyWrapper').children('.roundButton').children('.readmore').stop().fadeOut();
              
          }
    });
    

    $('.expandColumn').click(function() {
        
         if ($(window).width() > 768) { 
             
                $(this).children('.copyWrapper').fadeOut(200);
                $(this).siblings().children('.copyWrapper').fadeOut();

                $('.CloseRoundButton').delay(500).animate({opacity: 1});

               $(this).children('.columnOverlay').fadeOut();
               $(this).siblings().children('.columnOverlay').fadeIn();

               $(this).children('.columnOpen').delay(400).fadeIn(300);
               $(this).siblings().children('.columnOpen').fadeOut(100);


               $(this).siblings().children('.verticalText').fadeIn();
               $(this).children('.verticalText').hide();

               $(this).siblings().animate({width: '5%'}, 500, 'linear');
               $(this).animate({width: '85%'}, 500, 'linear');
             
         } else{
             $(this).siblings().children('.copyWrapper').children('.proPara').stop().slideUp();
            $(this).children('.copyWrapper').children('.proPara').stop().slideToggle();
            $(this).siblings().children('.copyWrapper').children('.roundButton').children('.bg').removeClass('bgOver');
             $(this).children('.copyWrapper').children('.roundButton').children('.bg').toggleClass('bgOver');
            $(this).siblings().children('.copyWrapper').children('.roundButton').children('.cross').children('.a').removeClass('blackBG');
            $(this).siblings().children('.copyWrapper').children('.roundButton').children('.cross').children('.b').removeClass('blackBG');
            $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.a').toggleClass('blackBG');
            $(this).children('.copyWrapper').children('.roundButton').children('.cross').children('.b').toggleClass('blackBG');
           //$(this).children('.copyWrapper').children('.roundButton').children('.readmore').stop().fadeIn();
             
         }
    });
    
    $(' .CloseRoundButton').mouseenter(function() {
	    
	   $(this).children('.bg').addClass('bgOver');
       $(this).children('.cross').children('.a').addClass('blackBG');
       $(this).children('.cross').children('.b').addClass('blackBG');
       
        
    });
    
    $('.CloseRoundButton').mouseleave(function() {
	   $(this).children('.bg').removeClass('bgOver');
       $(this).children('.cross').children('.a').removeClass('blackBG');
	   $(this).children('.cross').children('.b').removeClass('blackBG');
    });
    
    $('.CloseRoundButton').click(function() {
	    $('.column').children('.columnOpen').fadeOut(100);
	    $(this).children('.copyWrapper').delay(500).fadeIn();
	    $('.CloseRoundButton').animate({opacity: 0}, 200);
	    $('.column').children('.columnOverlay').fadeOut();
	    $('.proceduresMenu .column').animate({width: '25%'}, 500, 'linear');
	    $('.column').siblings().children('.verticalText').fadeOut();
	    $('.column').siblings().children('.copyWrapper').fadeIn();
	    
	});
    
    
    // The conditions page spinal video dropdown menu
    
     $('.dropbtn').click(function() {
            $('.dropdown-content').addClass('show');
         });
    
         $('.buttonLink').click(function() {
            $('.dropdown-content').removeClass('show');
         });
    
    
    // video buttons
     $(' .video-Button').mouseenter(function() { 
        $(this).children('.videoButtonOverlay').stop().fadeOut();
         $(this).children('.videoText-2').stop().fadeIn();
         $(this).children('.downArrowSmall').stop().fadeIn();
     });
     $('.video-Button').mouseleave(function() { 
         $(this).children('.videoButtonOverlay').stop().fadeIn();
         $(this).children('.videoText-2').stop().fadeOut();
         $(this).children('.downArrowSmall').stop().fadeOut();
     });
    
    // video selecting
    
 
       
         $('.video-Button').click(function() {
              var videoButtonID = this.id.slice(-1);
              var copyId = "#player-copy-" + videoButtonID;
              var videoPlayerID = "#player-" + videoButtonID;
             //hides and shows text
             $(".player-copy").hide();
             $(copyId).show();
             //hides and shows video players
              $(".video-player").hide();
             $(videoPlayerID).show();
             //scroll to
             var offset = 150;
            $('html, body').animate({
                    scrollTop: $(".video-player-section").offset().top - offset
            }, 500);
             
         });
    
        $('.buttonLink').click(function() {
              var videoButtonID = this.id.slice(-1);
              var copyId = "#player-copy-" + videoButtonID;
              var videoPlayerID = "#player-" + videoButtonID;
             //hides and shows text
             $(".player-copy").hide();
             $(copyId).show();
             //hides and shows video players
              $(".video-player").hide();
             $(videoPlayerID).show();
            //scroll to
             var offset = 150;
            $('html, body').animate({
                    scrollTop: $(".video-player-section").offset().top - offset
            }, 500);
         });
         
     
     
     
     //outpataient jump links
      	$('.spineItemPageLink-1').click(function() {
	      	
             var offset = 50;
            $('html, body').animate({
                    scrollTop: $(".outpatient-section-3").offset().top - offset
            }, 500);
            
        });
        
        $('.spineItemPageLink-2').click(function() {
	      	
             var offset = 50;
            $('html, body').animate({
                    scrollTop: $(".outpatient-section-4").offset().top - offset
            }, 500);
            
        });
        
        $('.spineItemPageLink-3').click(function() {
	      	
             var offset = 50;
            $('html, body').animate({
                    scrollTop: $(".outpatient-section-5").offset().top - offset
            }, 500);
            
        });
     

		
		

		  
		     
		     
		 $('.tweet').twittie({
            dateFormat: '%b. %d, %Y',
            template: '{{tweet}}  <a href="{{url}}" target="_blank">Details</a>',
            count: 5,
            hideReplies: true
        }, function() {
	        
	        $('.tweet ul').slick({
			    infinite: true,
			    autoplay: true,
			    fade: true,
			    arrows: false,
			    slidesToShow: 1,
			   	slidesToScroll: 1
		  	});
		  
		  	$( ".tweet ul li" ).wrapInner( "<p class='tweetText'></p>");
		  	//$('.tweet ul li').prepend('  <div class="twitterLogo"><img src="../img/twitterLogo.png" /></div>');
        
		});
    
    
    // procedures page select neck section 
    
    $('#procedures-selectSpine .spineItem').click(function() {
        var dropDownID = this.id.slice(-1);
        var hotSpotID = "#hotspot-" + dropDownID;
        $('.hotSpot').removeClass('hotSpotActive');
        $(hotSpotID).addClass('hotSpotActive');
        $(this).siblings().children('.copyWrapper').stop().slideUp();
        $(this).children('.copyWrapper').stop().slideToggle();
        $(this).toggleClass("itemOpen");
        $(this).siblings().removeClass("itemOpen");  

    });
    
    $('.hotSpot').click(function() {
	    var hotSpotID = this.id.slice(-1);
	    var dropDownID = "#spineItem-" + hotSpotID;
	    $('.hotSpot').removeClass('hotSpotActive');
	   
	    $(this).addClass("grow");
	    $(this).siblings().removeClass("grow");

	    
	    $(this).addClass('hotSpotActive');
	    $(dropDownID).children('.copyWrapper').stop().slideToggle();
	    $(dropDownID).siblings().children('.copyWrapper').stop().slideUp();
	    $(dropDownID).toggleClass("itemOpen");
		$(dropDownID).siblings().removeClass("itemOpen"); 

	});
    
     

        //foooter
        $( "#datepicker" ).datepicker();
        
        
        
$(".search .search-input").attr('placeholder', 'Search this website');
        
        
        
		      
  
  
});

});