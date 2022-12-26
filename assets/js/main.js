jQuery(document).ready(function(){
    jQuery('.inte-carousel').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrow: false,
      dots: false,
      autoplay:true,
      autoplaySpeed:800,
    });
    
    jQuery('.inte-carousel-rtl').slick({
      infinite: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      arrow: false,
      dots: false,
      autoplay:true,
      autoplaySpeed:800,
      rtl: true,
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