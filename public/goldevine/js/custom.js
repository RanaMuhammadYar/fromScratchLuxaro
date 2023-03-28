<<<<<<< Updated upstream
$(".menu-btn").click(function(){
  $("#nav").toggleClass("active");
});

$('.banner-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>"
=======
$(".menu-btn").click(function () {
    $("#nav").toggleClass("active");
});

$('.banner-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>"
>>>>>>> Stashed changes
});


$('.explore-slider').slick({
<<<<<<< Updated upstream
  slidesToShow: 2,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
    }
  },  {
    breakpoint: 992,
    settings: {
      slidesToShow: 5,
      slidesToScroll: 1,
    }
  }]
});

$('.slider').slick({ 
  slidesToShow: 2,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
    }
  },  {
    breakpoint: 992,
    settings: {
      slidesToShow: 6,
      slidesToScroll: 1,
    }
  }]
});

$('.gv-featured-project-slider').slick({ 
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
    }
  },  {
    breakpoint: 992,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
    }
  }]
});

$('.categories-slider').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
    }
  },  {
    breakpoint: 992,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
         prevArrow:"<button type='button' class='slick-prev'><img src='images/left-arrow.png'></button>",
          nextArrow:"<button type='button' class='slick-next'><img src='images/right-arrow.png'></button>",
    }
  }]
});

$('.project-page-slider').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
  responsive: [{
    breakpoint: 768,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
    }
  },  {
    breakpoint: 992,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 1,
    }
  }]
});

$('.product-detail-merchant').slick({
  rows: 2,
  dots: false,
  arrows: true,
  infinite: true,
  speed: 300,
  slidesToShow: 6,
  slidesToScroll: 6
});

$('.detail-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: false,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  asNavFor: '.detail-nav-slider',
});

$('.detail-nav-slider').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  asNavFor: '.detail-slider',
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>"
});

$('.detail-slider-gv').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: false,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  asNavFor: '.detail-nav-slider-gv',
});

$('.detail-nav-slider-gv').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: true,
  dots: false,
  arrows: true,
  focusOnSelect: true,
  autoplay: false,
  mobileFirst: true,
  asNavFor: '.detail-slider-gv',
  prevArrow:"<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>"
});

$('.slider-wrap').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: true,
  centerMode: true,
  variableWidth: true,
  infinite: true,
  focusOnSelect: true,
  cssEase: 'linear',
  touchMove: true,
  prevArrow:"<button type='button' class='slick-prev'><img src='images/left-arrow.png'></button>",
  nextArrow:"<button type='button' class='slick-next'><img src='images/right-arrow.png'></button>",
  
 
=======
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
        }
    }]
});

$('.slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 6,
            slidesToScroll: 1,
        }
    }]
});

$('.gv-featured-project-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }]
});

$('.categories-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>",
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            prevArrow: "<button type='button' class='slick-prev'><img src='images/left-arrow.png'></button>",
            nextArrow: "<button type='button' class='slick-next'><img src='images/right-arrow.png'></button>",
        }
    }]
});

$('.project-page-slider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    prevArrow:"<button type='button' class='slick-prev'><img src='http://127.0.0.1:8000/goldevine/images/arrow-left.png'></button>",
    nextArrow:"<button type='button' class='slick-next'><img src='http://127.0.0.1:8000/goldevine/images/arrow-next.png'></button>",    

    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
        }
    }, {
        breakpoint: 992,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
        }
    }]
});

$('.product-detail-merchant').slick({
    rows: 2,
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 6
});

$('.detail-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: false,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    asNavFor: '.detail-nav-slider',
});

$('.detail-nav-slider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    asNavFor: '.detail-slider',
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>"
});

$('.detail-slider-gv').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: false,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    asNavFor: '.detail-nav-slider-gv',
});

$('.detail-nav-slider-gv').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    dots: false,
    arrows: true,
    focusOnSelect: true,
    autoplay: false,
    mobileFirst: true,
    asNavFor: '.detail-slider-gv',
    prevArrow: "<button type='button' class='slick-prev'><img src='images/arrow-left.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/arrow-next.png'></button>"
});

$('.slider-wrap').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    focusOnSelect: true,
    cssEase: 'linear',
    touchMove: true,
    prevArrow: "<button type='button' class='slick-prev'><img src='images/left-arrow.png'></button>",
    nextArrow: "<button type='button' class='slick-next'><img src='images/right-arrow.png'></button>",


>>>>>>> Stashed changes
});


var imgs = $('.slider-wrap img');
<<<<<<< Updated upstream
imgs.each(function(){
  var item = $(this).closest('.item');
  item.css({
    'background-image': 'url(' + $(this).attr('src') + ')', 
    'background-position': 'center',            
    '-webkit-background-size': 'cover',
    'background-size': 'cover', 
  });
  $(this).hide();
=======
imgs.each(function () {
    var item = $(this).closest('.item');
    item.css({
        'background-image': 'url(' + $(this).attr('src') + ')',
        'background-position': 'center',
        '-webkit-background-size': 'cover',
        'background-size': 'cover',
    });
    $(this).hide();
>>>>>>> Stashed changes
});


$("input[type=file]").change(function (e) {
<<<<<<< Updated upstream
  $(this).parents(".uploadFile").find(".filename").text(e.target.files[0].name);
});
=======
    $(this).parents(".uploadFile").find(".filename").text(e.target.files[0].name);
});
>>>>>>> Stashed changes
