///pop_up
$(document).ready(function () {
  function setCookie(name, value, expiredays) {
    var todayDate = new Date();

    todayDate.setDate(todayDate.getDate() + expiredays);

    document.cookie =
      name +
      '=' +
      escape(value) +
      '; path=/; expires=' +
      todayDate.toGMTString() +
      ';';
  }

  var popup = '.popup';
  var chkbox = '#not_today';

  $(popup)
    .find('.close_btn')
    .click(function () {
      var chk = $(chkbox).prop('checked');

      if (chk) {
        setCookie('exCookie', 'done', 1);
      }

      $(popup).stop().slideUp(300);
    });

  var cookieData = document.cookie;

  if (cookieData.indexOf('exCookie=done') < 0) {
    $(popup).slideDown(300);
  } else {
    $(popup).slideUp(300);
  }
});

/* account & main_slider*/
$(document).ready(function () {
  var swiper = new Swiper('#main_slider .swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
    autoplay: {
      delay: 6000,
    },
    on: {
      init: function () {
        //초기실행 이벤트
        $('#main_slider .slide01 p').addClass('active');
        $('#main_slider .slide02 span').addClass('active');
        $('#main_slider .slide03 .text_box > *').addClass('active');
      },
      slideChange: function () {
        $('#main_slider .slide01 p').removeClass('active');
        $('#main_slider .slide02 span').removeClass('active');
        $('#main_slider .slide03 .text_box > *').removeClass('active');
      },
      slideChangeTransitionEnd: function () {
        $('#main_slider .slide01 p').addClass('active');
        $('#main_slider .slide02 span').addClass('active');
        $('#main_slider .slide03 .text_box > *').addClass('active');
      },
    },
  });

  $('.account').click(function (e) {
    e.preventDefault();
    var pHeight = $('.popup').height();
    var dHeight = $(document).height();

    if ($('.popup').is(':hidden')) {
      $('.form_bg').height(dHeight - 40);
      $('.form_bg').css('top', 40);
    } else {
      $('.form_bg').height(dHeight - pHeight - 40);
      $('.form_bg').css('top', pHeight + 40);

      $('.popup')
        .find('.close_btn')
        .click(function () {
          $('.form_bg').height(dHeight - 40);
          $('.form_bg').css('top', 40);
        });
    }

    var has = $('.account').hasClass('active');
    if (has) {
      swiper.autoplay.start();
      $('.account + form').stop().slideUp('fast');
      $('.account').removeClass('active');
      $('.form_bg').fadeOut('fast');
    } else {
      $('.account + form')
        .stop()
        .slideDown('fast', function () {
          $('.account').addClass('active');
          $('.form_bg').fadeIn('fast');
          swiper.autoplay.stop();
        });
    }
  });

  $('.form_bg').click(function () {
    $('.account').trigger('click');
  });
});

//best_sellers
$(document).ready(function () {
  $(window).resize(function () {
    var w = $(window).width();
    var minWidth = 1320;
    var rightMargin = (w - minWidth) / 2;

    if (w > 1320) {
      $('#best_sellers .swiper-container').width(1620 + rightMargin);
    } else {
      $('#best_sellers .swiper-container').width(1620);
    }
  });

  $(window).trigger('resize');

  var swiper = new Swiper('#best_sellers .swiper-container', {
    slidesPerView: 'auto',
    spaceBetween: 50,
    loop: true,
    navigation: {
      nextEl: '#best_sellers .swiper-button-next',
    },
  });
});

//book_of_month
$(document).ready(function () {
  var movingPoint = $('#book_of_month').offset().top - 600;
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > movingPoint) {
      $('#book_of_month').find('.m_book01').addClass('active');
    }
    if (scrollTop < movingPoint - 300) {
      $('.m_book01').removeClass('active');
    }
  });

  var movingPoint02 = $('.m_book02').offset().top - 600;
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > movingPoint02) {
      $('#book_of_month').find('.m_book02').addClass('active');
    }
    if (scrollTop < movingPoint - 300) {
      $('.m_book02').removeClass('active');
    }
  });

  var movingPoint03 = $('.m_book03').offset().top - 600;
  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > movingPoint03) {
      $('#book_of_month').find('.m_book03').addClass('active');
    }
    if (scrollTop < movingPoint - 300) {
      $('.m_book03').removeClass('active');
    }
  });

  $('#book_of_month a').mouseenter(function () {
    $(this).addClass('active');
  });
  $('#book_of_month a').mouseleave(function () {
    $(this).removeClass('active');
  });
});

//event
$(document).ready(function () {
  var swiper = new Swiper('#event .swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      type: 'progressbar',
    },
    autoplay: {
      delay: 4000,
    },
    loop: true,
  });
});

//new_books
$(document).ready(function () {
  var swiper1 = new Swiper('#new_books .slider_wrap01 .swiper-container', {
    loop: true,
    navigation: {
      nextEl: '#new_books .swiper-button-next',
      prevEl: '#new_books .swiper-button-next',
    },
    effect: 'fade',
    simulateTouch: false,
    allowTouchMove: false,
  });
  var swiper2 = new Swiper('#new_books .slider_wrap02 .swiper-container', {
    slidesPerView: '3',
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: '#new_books .swiper-button-next',
      prevEl: '#new_books .swiper-button-next',
    },
    simulateTouch: false,
    allowTouchMove: false,
  });
});

//podcast
$(document).ready(function () {
  $(window).resize(function () {
    var w = $(window).width();
    var minWidth = 1320;
    var rightMargin = (w - minWidth) / 2;

    if (w > 1320) {
      $('#podcast .wrap').width(1320 + rightMargin);
    } else {
      $('#podcast .wrap').width(1320);
    }
  });

  $(window).trigger('resize');

  var mySwiper = new Swiper('#podcast .swiper-container', {
    direction: 'vertical',
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: false,
      draggable: true,
    },
    mousewheel: true,
    mousewheelControls: true,
    on: {
      slideChange: function () {
        $(player01)[0].contentWindow.postMessage(
          '{"event":"command","func":"' + 'stopVideo' + '","args":""}',
          '*'
        );
        $(player02)[0].contentWindow.postMessage(
          '{"event":"command","func":"' + 'stopVideo' + '","args":""}',
          '*'
        );
        $(player03)[0].contentWindow.postMessage(
          '{"event":"command","func":"' + 'stopVideo' + '","args":""}',
          '*'
        );
        $('#podcast .btn').fadeIn(0);
      },
    },
  });

  var playBtn01 = '#podcast .play01';
  var playBtn02 = '#podcast .play02';
  var playBtn03 = '#podcast .play03';
  var pauseBtn01 = '#podcast .pause01';
  var pauseBtn02 = '#podcast .pasue02';
  var pauseBtn03 = '#podcast .pause03';
  var video = '#podcast iframe';

  var player01 = $(playBtn01).prev();
  var player02 = $(playBtn02).prev();
  var player03 = $(playBtn03).prev();

  $(playBtn01).click(function () {
    $(this).fadeOut('fast');
    $(player01)[0].contentWindow.postMessage(
      '{"event":"command","func":"' + 'playVideo' + '","args":""}',
      '*'
    );
  });
  $(playBtn02).click(function () {
    $(this).fadeOut('fast');
    $(player02)[0].contentWindow.postMessage(
      '{"event":"command","func":"' + 'playVideo' + '","args":""}',
      '*'
    );
  });
  $(playBtn03).click(function () {
    $(this).fadeOut('fast');
    $(player03)[0].contentWindow.postMessage(
      '{"event":"command","func":"' + 'playVideo' + '","args":""}',
      '*'
    );
  });
});

// notice
$(document).ready(function () {
  var swiper = new Swiper('#notice .swiper-container', {
    direction: 'vertical',
    autoplay: {
      delay: 4000,
    },
    loop: true,
  });
});

// mobile & pc compatible

$(document).ready(function () {
  var mobile_keys = new Array(
    'iPhone',
    'iPad',
    'Android',
    'BlackBerry',
    'Windows Phone',
    'Windows CE',
    'LG',
    'MOT',
    'SAMSUNG',
    'SonyEricsson',
    'Nokia'
  );

  if (document.URL.match('move_pc_screen')) {
    $('.go_mobile').fadeIn(0);
    mobile_keys = null;
  }

  for (var i in mobile_keys) {
    if (navigator.userAgent.match(mobile_keys[i]) != null) {
      location.href =
        'https://glimkim.github.io/BookAnd_Rebranding_Project_Mobile/';
      break;
    }
  }
});

// subscribe
$(document).ready(function () {
  $('#subscribe button').click(function () {
    var inputValue = $('#subscribe_box').val();
    if (inputValue.length > 0) {
      alert('구독해주셔서 감사합니다. 좋은 소식으로 찾아가겠습니다!');
    } else {
      alert('이메일 주소를 입력해주세요.');
    }
    $('#subscribe_box').val('');
  });
});
