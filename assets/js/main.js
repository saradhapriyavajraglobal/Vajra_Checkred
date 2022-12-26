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