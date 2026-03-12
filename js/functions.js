
$('.apport-silder').slick({
    autoplay: true,
    arrows: false,
  centerMode: true,
  // cssEase: 'linear',

//   centerPadding: '90px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        // centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        // centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

