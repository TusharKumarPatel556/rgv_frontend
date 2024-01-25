$(document).ready(function(){
    $('.testimonials').slick({
      slidesToShow:3,
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
            slidesToShow: 3
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 935,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 678,
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