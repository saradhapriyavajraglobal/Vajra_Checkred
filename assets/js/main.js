jQuery(document).ready(function(){
    jQuery('.inte-carousel').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrow: false,
      dots: false,
      autoplay:true,
      autoplaySpeed:0,
      speed: 4000,
      cssEase: 'linear',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
      ],

    });
    
    jQuery('.inte-carousel-rtl').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrow: false,
      dots: false,
      autoplay:true,
      autoplaySpeed:0,
      speed: 4000,
      rtl: true,
      cssEase: 'linear',
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
      ],
    });
  });

  jQuery(document).ready(function () {
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 50) {
            jQuery('.header-main').addClass('bg-header');
        } else {
            jQuery('.header-main').removeClass('bg-header');
        }
    });
      });


//Banner slider

jQuery(document).ready(function(){
jQuery('.banner-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade:true,
  arrows: true,
  dots: false,
  autoplay:true,
  speed:1000,
  autoplaySpeed:7000,
  cssEase: 'ease-in-out',
  asNavFor:'.content-wrap'
});

jQuery('.content-wrap').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  fade:true,
  arrows: false,
  dots: false,
  autoplay:true,
  speed:1000,
  autoplaySpeed:7000,
  cssEase: 'ease-in-out',
  asNavFor:'.banner-slider'
});
});
var $status = jQuery('.counter-info');
var $slickElement = jQuery('.banner-slider');

$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
    //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
    var i = (currentSlide ? currentSlide : 0) + 1;
    $status.html( i + ' / ' + slick.slideCount);
});
      jQuery(function($){
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
      });



  //Works tab section//
  
  jQuery(document).ready(function () {
    // Add active for collapse element which is open by default
    jQuery(".collapse.show").each(function () {
      jQuery(this).prev(".card-header").addClass("active");
    });
  
    //  active class on show hide of collapse element
    jQuery(".collapse").on('show.bs.collapse', function () {
      jQuery(this).prev(".card-header").addClass("active");
    }).on('hide.bs.collapse', function () {
      jQuery(this).prev(".card-header").removeClass("active");
    });
  });