$(document).ready(function(){
    var appearAt1 = $('.story').offset().top - 500;
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > appearAt1){
            $('.story .active_wrap, .story img').addClass('active');
        }
        if(scrollTop < appearAt1 - 300){
            $('.story .active_wrap, .story img').removeClass('active');
        }
    });
    
    var appearAt2 = $('.slogan').offset().top - 500;
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > appearAt2){
            $('.slogan .active_top, .slogan img, .slogan .text_box > p').addClass('active');
        }
        if(scrollTop < appearAt2 - 300){
            $('.slogan .active_top, .slogan img, .slogan .text_box > p').removeClass('active');
        }
    });
    
    var appearAt3 = $('.vision').offset().top - 600;
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if(scrollTop > appearAt3){
            $('.vision .active_wrap, .vision').addClass('active');
        }
        if(scrollTop < appearAt3 - 300){
            $('.vision .active_wrap, .vision').removeClass('active');
        }
    });
    
});