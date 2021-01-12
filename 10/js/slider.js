$(document).ready(function(){


/////////////Slider


$('.slider').slick({
  autoplay: true,
  dots: true,
  centerMode: true,
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        slidesToShow: 1
      }
    }
  ]
});

  $(window).scroll(function() {
    if($(this).scrollTop() > 550) {
      $ ('.scroll_up').fadeIn();
    } else {
      $ ('.scroll_up').fadeOut();
    }
  });
  $('.scroll_up').click(function(){
    $("html, body").animate({scrollTop: 0}, 900)
    return false;
  });
  //плавный переход от ссылки до якоря
  $('a[href^="#"]').on("click", function (event) {
          //отменяем стандартную обработку нажатия по ссылке
          event.preventDefault();
          //забираем идентификатор блока с атрибута href
          var id  = $(this).attr('href'),
          //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
          //анимируем переход на расстояние - top за 1500 мс
          $('html, body').animate({scrollTop: top}, 1500);
      });

////////////Menu Bar

  $('.menu_bar, .menu-link').click(function(event){
    $('.menu-list, .menu_bar, .line, body ').toggleClass('active_menu_bar');
  });
});