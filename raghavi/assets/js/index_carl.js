$(document).ready(function(){
    $('.Slick-Slide').slick({
      slidesToShow:5,
      slidesToScroll:1,
      autoplay:true,
      autoplaySpeed:1000,
      arrows:false,
      dots:false,
      pauseOnHover:false,
      responsive: [
        {
          breakpoint: 1704,
          settings: {
            slidesToShow: 4
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 635,
          settings: {
            slidesToShow: 1
          }
        },
        {
          breakpoint: 508,
          settings: {
          
            slidesToShow: 1
          }
        },
        {
          breakpoint: 400,
          settings: {
          
            slidesToShow: 1
          }
        }
      ]
    });
  });