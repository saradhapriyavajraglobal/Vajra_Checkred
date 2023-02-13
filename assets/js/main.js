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
  autoplay:false,
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
  autoplay:false,
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
      // jQuery(function($){
      //   // define all UI variable
      //   const navToggler = document.querySelector('.nav-toggler');
      //   const navMenu = document.querySelector('.nav-primary ul');
      //   const navLinks = document.querySelectorAll('.nav-primary a');
      
      //   // load all event listners
      //   allEventListners();
      
      //   // functions of all event listners
      //   function allEventListners() {
      //     // toggler icon click event
      //     navToggler.addEventListener('click', togglerClick);
      //     // nav links click event
      //     navLinks.forEach(elem => elem.addEventListener('click', navLinkClick));
      //   }
      
      //   // togglerClick function
      //   function togglerClick() {
      //     navToggler.classList.toggle('toggler-open');
      //     navMenu.classList.toggle('open');
      //   }
      
      //     // navLinkClick function
      //     function navLinkClick() {
      //       if (navMenu.classList.contains('open')) {
      //         navToggler.click();
      //       }
      //     }
      // });



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



  // jQuery('.img-slider').slick({
  //   infinite: false,
  //   slidesToShow: 4,
  //   slidesToScroll: 1,
  //   arrows: false,
  //   dots: false,
  //   autoplay:true,
  //   responsive: [
  //     {
  //       breakpoint: 767,
  //       settings: {
  //         slidesToShow: 2,
  //         slidesToScroll: 1,
  //       },
  //     },
  //   ],

  // });



  jQuery(function($) {
    // Add en remove class on menu item hover  
    jQuery('.head-tab > li').mouseover(function(){
      jQuery(this).addClass('show').siblings().removeClass('show');
    });
  });

  jQuery(function($) {
  const text= "Are you looking to work with some of the brightest minds in cloud security and build intelligent solutions for enterprises?";

let letters = text.split("");

let textLength = letters.length -1;

letters.forEach((item,index)=>{
    const target = document.querySelector(".text-holder");
    let element = document.createElement("span");
    element.classList.add("textswipe");
    element.id = `i${index}`;
    element.innerText = item;
    target.appendChild(element);
});

function animate(){
    let textList = document.querySelectorAll(".textswipe");

    textList.forEach((element,index)=>{
        setTimeout(()=>{
            let id = element.getAttribute('id');
            document.getElementById(id)?.classList.toggle('opaque');
            resetAnimation(index);
        },(index + (textLength/10))*100*(100/textLength))
    })
}

function resetAnimation(index){
    if(index ==textLength){
        animate();
    }
}

animate();

});

 jQuery('.img-wrap').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    autoplay:true,
    centerMode: true,
		centerPadding: '70px',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],

  });


  jQuery(document).ready(function(event){
    jQuery('.boxselect').change(function(){
      $this = jQuery(this);
      jQuery('.box').hide();
      jQuery('.'+$this.val()).show();
      console.log("showing "+$this.val()+" boxes");
     });
  });


  jQuery(document).ready(function () {
	
    jQuery(".upload-content .wpcf7-form-control-wrap").append("<span>Resume*</span>");	
    
    });
      
    jQuery('.upload-content .wpcf7-form-control-wrap input').click(function() { 
      
        jQuery(".upload-content .wpcf7-form-control-wrap span").remove();
        jQuery(".upload-content .wpcf7-form-control-wrap input").css("color","#ABAFB4");
    
    });



    jQuery(document).ready(function() {

      const divs = document.querySelectorAll(".shine");
      
      document.addEventListener("mousemove", function(event) {
    
        for (let i = 0; i < divs.length; i++) {
    
          let currentDiv = event.target.closest(".benefits-card");
          if (currentDiv === divs[i].parentNode) {
            let x = event.clientX - (divs[i].parentNode.offsetWidth / 10);
            let y = event.clientY - (divs[i].parentNode.offsetHeight / 10);
      
            divs[i].style.left = x + "px";
            divs[i].style.top = y + "px";
          }else {
            divs[i].style.left = "";
            divs[i].style.top = "";
          }
    
        }
    
      });
    
    });
    
    
    




    
    
    
    


    
    
    
    
    

    
    
