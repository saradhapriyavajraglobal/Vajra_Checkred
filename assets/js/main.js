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
      cssEase: 'linear'

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
      cssEase: 'linear'
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
  arrows: true,
  dots: false,
  autoplay:false,
  autoplaySpeed:2000,
  asNavFor:'.content-wrap'
});

jQuery('.content-wrap').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  autoplay:false,
  autoplaySpeed:2000,
  asNavFor:'.banner-slider'
});
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
