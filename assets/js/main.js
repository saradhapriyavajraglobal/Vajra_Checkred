// function togglemenu() {

// 	let NavBar = document.querySelector("#menu-primary-navigation");
	
// 	NavBar.classList.toggle("open");
//   }

// define all UI variable
const navToggler = document.querySelector('.nav-toggler');
const navMenu = document.querySelector('.nav-primary ul');
const navLinks = document.querySelectorAll('.nav-primary a');

// load all event listners
allEventListners();

// functions of all event listners
function allEventListners() {
    // toggler icon click event
    navToggler.addEventListener('click', togglerClick);
    // nav links click event
    navLinks.forEach(elem => elem.addEventListener('click', navLinkClick));
}

// togglerClick function
function togglerClick() {
    navToggler.classList.toggle('toggler-open');
    navMenu.classList.toggle('open');
}

// navLinkClick function
function navLinkClick() {
    if (navMenu.classList.contains('open')) {
        navToggler.click();
    }
}

// jQuery(window).scroll(function () {
//     if (jQuery(this).scrollTop() > 50) {
//         jQuery('header').addClass('bg-header');
//     } else {
//         jQuery('header').removeClass('bg-header');
//     }
// });

///header
var scroll = 0;
// Header Scroll

if (jQuery(window).width() > 768) {

jQuery( window ).scroll(function() {

var scrollPos = jQuery(window).scrollTop();

var width=jQuery( window ).width();

if ( scrollPos > 60 && width > 1200) {

if ( scroll === 0 ) {

jQuery('header').addClass('header-saddow');

jQuery('header').animate({

top: '0px'

},300);

scroll++; 

}

}

if ( scrollPos === 0 && width > 1200) {

jQuery('header').removeClass('header-saddow');

jQuery('header').animate({

top: '0'

},300);

scroll = 0;

}

});

}

if (jQuery(window).width() < 768) {

jQuery( window ).scroll(function() {

var scrollPos = jQuery(window).scrollTop();

var width=jQuery( window ).width();

if ( scrollPos > 60 && width < 1200) {

if ( scroll === 0 ) {

jQuery('header').addClass('header-saddow');

jQuery('header').animate({

top: '-90px'

},300);

scroll++; 

}

}

if ( scrollPos === 0 && width < 1200) {

jQuery('header').removeClass('header-saddow');

jQuery('header').animate({

top: '0'

},300);

scroll = 0;

}

});

}


// var path = document.querySelector('.line1');
// var length = path.getTotalLength();
// // Clear any previous transition
// path.style.transition = path.style.WebkitTransition = 'none';
// // Set up the starting positions
// path.style.strokeDasharray = length + ' ' + length;
// path.style.strokeDashoffset = length;
// // Trigger a layout so styles are calculated & the browser
// // picks up the starting position before animating
// path.getBoundingClientRect();
// // Define our transition
// path.style.transition = path.style.WebkitTransition =
//   'stroke-dashoffset 2s ease-in-out';
// // Go!
// path.style.strokeDashoffset = '0';


// var wrapper = document.querySelector('.animation svg')
// var btnDraw = document.querySelector('.btn-draw')
// var btnErase = document.querySelector('.btn-erase')

// // We are only adding and removing the 'active' class,
// // the entire animation is defined in the CSS code
// function draw() {
//   wrapper.classList.add('active')
// }

// function erase() {
//   wrapper.classList.remove('active')
// }

// // Add handlers to our buttons
// btnDraw.addEventListener('click', draw, false)
// btnErase.addEventListener('click', erase, false)

// // Play draw animation once
// setTimeout(draw, 300)


jQuery('header a[href*="#"]:not([href="#"]):not([href="#show"]):not([href="#hide"])').click(function () {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
            return false;
        }
    }
});

jQuery('footer a[href*="#"]:not([href="#"]):not([href="#show"]):not([href="#hide"])').click(function () {
    if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = jQuery(this.hash);
        target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            jQuery('html,body').animate({
                scrollTop: target.offset().top - 80
            }, 1000);
            return false;
        }
    }
});

/*** Blog slider ***/
jQuery(document).ready(function () {
    jQuery('.blog-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        speed: 300,
        dots: false,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 5000,
		
		responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
        			slidesToScroll: 2,
					dots: true,
                }
            },
			{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
        			slidesToScroll: 1,
					dots: true,
                }
            },
        ]
    });
});

//**Get Started Page**//

/* jQuery('.click-next input:radio').change(function(){

    var form_next= jQuery(this).parents(".wpforms-page");
	
   // jQuery('.wpforms-page').fadeOut('slow'); 
    // jQuery('html, body').animate({
    //     scrollTop: jQuery(".wpforms-page ").offset().top
//     // });
//     jQuery('html, body').animate({
//         scrollTop: "0px"
//     }, 800);

    setTimeout(function(){
        form_next.find("button.wpforms-page-button.wpforms-page-next").click();    
    }, 1200);

}); */


// jQuery(function() {    
//     jQuery('.left-img').hover(function () {
//         jQuery(".cnt1").css("display", "none");
//         var test = jQuery(".cnt-"+this.id).css("display", "block");
//     },
//     function () {
//         jQuery(".cnt1").css("display", "block");
//         jQuery(".cnt-"+this.id).css("display", "none");
//     });
//     });

 jQuery(document).ready(function(){
   jQuery('.card-slider').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     autoplay: false,
     autoplaySpeed: 1000,
     arrows:false,
     dots:false,
	  infinite: true,
	   centerMode: true,
			centerPadding: '50px',
	   
	   responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
        			slidesToScroll: 2,
					centerPadding: '0px',
                }
            },
			{
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
        			slidesToScroll: 1,
					centerPadding: '30px',
                }
            },
        ]
     
   });
 });
// jQuery(function() { 
//   function readingTime() {
//     const text = document.getElementById("article").innerText;
//     const wpm = 225;
//     const words = text.trim().split(/\s+/).length;
//     const time = Math.ceil(words / wpm);
//     document.getElementById("time").innerText = time;
//   }
//   readingTime();
// 	 });
jQuery(function () {
    var txt = jQuery("#blog-cnt").text();
    
    wordCount = txt.replace( /[^\w ]/g, "" ).split( /\s+/ ).length;

    var readingTimeInMinutes = Math.floor(wordCount / 228) + 1;
    var readingTimeAsString = readingTimeInMinutes;
    
   jQuery('#time').html(readingTimeAsString);
});

jQuery(document).ready(function () {
    jQuery('.hair-loss-slide').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        dots: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 5000,
		responsive: [
			{
                breakpoint: 991,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
        			slidesToScroll: 1,
                }
            },
        ]
    });
});

// jQuery(document).ready(function () {
//     jQuery('#blog-slick-slider').slick({
//         arrows: true,
//         autoplay: false,
//         autoplaySpeed: 5000,
//         dots: false,
//         infinite: true,
//         slidesToShow: 3,
//         slidesToScroll: 3,
//         speed: 300,
//         nextArrow: '<a class="slide-arrow next-arrow"></a>',
//         prevArrow: '<a class="slide-arrow prev-arrow"></a>',
		
// 		responsive: [
//             {
//                 breakpoint: 1199,
//                 settings: {
//                     dots: false,
//                     slidesToShow: 2,
//         			slidesToScroll: 2,
//                 }
//             },
// 			{
//                 breakpoint: 767,
//                 settings: {
//                     arrows: false,
// 					dots: true,
//                     slidesToShow: 1,
//         			slidesToScroll: 1,
//                 }
//             },
//         ]
//     });
// });

jQuery(document).ready(function() {
	if (jQuery(window).width() < 768) {       // if width is less than 600px
  var numSlick = 0;
  jQuery('.headway-tab .nav-tabs').each(function () {
    numSlick++;
    jQuery(this).addClass('slider-' + numSlick).slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.tab-content.slider-' + numSlick
    });
  });


  numSlick = 0;
  jQuery('.headway-tab .tab-content').each(function () {
    numSlick++;
    jQuery(this).addClass('slider-' + numSlick)
      .slick({
        dots: false,
        infinite: true,
        speed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
		fade: true,
		arrows:true,
        asNavFor: '.headway-tab .nav-tabs.slider-' + numSlick,
        autoplay: false,
      })
	 
  });

  // execute mobile function
}
	});

jQuery(document).ready(function() {
var blogsec = jQuery('.left-section');
var vTop = jQuery(blogsec).offset().top + jQuery(blogsec).outerHeight() - window.innerHeight;
jQuery(function() {
    
    jQuery(window).scroll(function() {
        
        if(jQuery(window).scrollTop() >  vTop){
            jQuery(".wp-image-662").css({'z-index':'-1'});
        }else{
            jQuery(".wp-image-662").css({'z-index':'1'});
        }
    });
});});

jQuery(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 85;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Read More";
    var lesstext = "Read Less";
    

    jQuery('.more').each(function() {
        var content = jQuery(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            jQuery(this).html(html);
        }
 
    });
 
    jQuery(".morelink").click(function(){
        if(jQuery(this).hasClass("less")) {
            jQuery(this).removeClass("less");
            jQuery(this).html(moretext);
        } else {
            jQuery(this).addClass("less");
            jQuery(this).html(lesstext);
        }
        jQuery(this).parent().prev().toggle();
        jQuery(this).prev().toggle();
        return false;
    });
});

jQuery(document).ready(function() {
    if (jQuery(window).width() < 768) {
     jQuery(".content-wrap").slick({
      arrows: false,
      dots: true,
      slidesToShow: 1,
      slidesToScroll:1,
    //   rows:2,
      infinite:false,
      autoplay: false,
     });
    }

  });

// Upload Image Section 
jQuery( '.upload-image .dz-message' ).append( '<a class="upload-cta" href="#">Upload</a>' );

    jQuery(function () {
        jQuery(".grid-list").slice(0, 3).show();
        jQuery("#loadmore").on('click', function (e) {
            e.preventDefault();
        //alert("enter");
            jQuery(".grid-list:hidden").slice(0, 3).slideDown();
            if (jQuery(".grid-list:hidden").length == 0) {
                jQuery("#loadmore").fadeOut('slow');
            }
            
        });
      });
      jQuery(function () {
        jQuery(".grid-list-2").slice(0, 3).show();
        jQuery("#loadmore-2").on('click', function (e) {
            e.preventDefault();
        //alert("enter");
            jQuery(".grid-list-2:hidden").slice(0, 3).slideDown();
            if (jQuery(".grid-list-2:hidden").length == 0) {
                jQuery("#loadmore-2").fadeOut('slow');
            }
            
        });
      });
      jQuery(function () {
        jQuery(".grid-list-3").slice(0, 3).show();
        jQuery("#loadmore-3").on('click', function (e) {
            e.preventDefault();
        //alert("enter");
            jQuery(".grid-list-3:hidden").slice(0, 3).slideDown();
            if (jQuery(".grid-list-3:hidden").length == 0) {
                jQuery("#loadmore-3").fadeOut('slow');
            }
            
        });
      });
      jQuery(function () {
        jQuery(".grid-list-4").slice(0, 3).show();
        jQuery("#loadmore-4").on('click', function (e) {
            e.preventDefault();
        //alert("enter");
            jQuery(".grid-list-4:hidden").slice(0, 3).slideDown();
            if (jQuery(".grid-list-4:hidden").length == 0) {
                jQuery("#loadmore-4").fadeOut('slow');
            }
            
        });
      });
      jQuery(function () {
        jQuery(".grid-list-5").slice(0, 3).show();
        jQuery("#loadmore-5").on('click', function (e) {
            e.preventDefault();
        //alert("enter");
            jQuery(".grid-list-5:hidden").slice(0, 3).slideDown();
            if (jQuery(".grid-list-5:hidden").length == 0) {
                jQuery("#loadmore-5").fadeOut('slow');
            }
            
        });
      });
     jQuery(function () {
        jQuery(".faq-grid-list").slice(0, 3).show();
        jQuery("#faq-loadmore").on('click', function (e) {
            e.preventDefault();
        //alert("enter");
            jQuery(".faq-grid-list:hidden").slice(0, 1).slideDown();
            if (jQuery(".faq-grid-list:hidden").length == 0) {
                jQuery("#faq-loadmore").fadeOut('slow');
            }
            
        });
      });
jQuery(function () {
    jQuery(".blog-download").slice(0, 3).show();
    jQuery("#down-loadmore").on('click', function (e) {
        e.preventDefault();
    //alert("enter");
        jQuery(".blog-download:hidden").slice(0, 3).slideDown();
        if (jQuery(".blog-download:hidden").length == 0) {
            jQuery("#down-loadmore").fadeOut('slow');
        }
        
    });
  });

jQuery("[name=package_name]").change(function(){
    var radioValue = jQuery("input[name=package_name]:checked").val();
    jQuery("a.buy_now_button").attr("href", radioValue);
});

jQuery(".wpforms-pagebreak-center").click(function() {
    jQuery('html, body').animate({
        scrollTop: jQuery(".header-main").offset().top
    }, 2000);
});

// Get Startd Page Age Valadation 18 to 55 

jQuery(function($){
    $( '.wpf-num-limit input' ).attr({ 'min':18, 'max':55} ); 
});

// jQuery(".wpforms-pagebreak-center").click(function() {
//     jQuery('html, body').animate({
//         scrollTop: jQuery("html").offset().top
//     }, 'fast');
// });



 jQuery(".sign-out-icon").click(function(){
    
        jQuery("#nav-ul").toggle();
    
    });
     
    jQuery(".sign-in-icon").click(function(){
    
        jQuery("#nav-ul").toggle();
    
    });