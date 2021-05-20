//site_map
$(document).ready(function(){
    
    
    $('.sitemap_icon').click(function(){
         
        $('.sitemap').stop().slideDown(300);
        $('html, body').css('overflow','hidden');
        
    });
    
    $('.sitemap_close').click(function(){
        $('.sitemap').stop().slideUp(300);
        $('html, body').css('overflow','visible');
    });
    
    
});

//auto_login
$(document).ready(function(){
    $('#auto_login').change(function(){
        if($(this).prop('checked')){
            $(this).prop('value','1');
        }else{
            $(this).prop('value','0');
        }   
    });
});

//header
$(document).ready(function(){
    var main = '.main_nav';
    var sub = '.sub_nav';
    var speed = 'fast';

    $(main).mouseenter(function(){
        $(sub).stop().slideUp(speed); 
        $(this).next().stop().slideDown(speed); 
        $(this).parent().addClass('active');
        
        $(this).parent().mouseleave(function(){
            $(this).find(sub).stop().slideUp(speed);
            $(main).parent().removeClass('active');
        });
    });
    
    $(main).focus(function(){
        $(this).next().stop().slideDown(speed);
        $(this).parent().addClass('active');
    });
     $(sub).find('li:last-child').keydown(function(e){
        if(e.keyCode == 9){ 
            if(!e.shiftKey){
                $(main).parent().removeClass('active');
            }          
        }
    });
    
    $(main).keydown(function(e){
        if(e.keyCode == 9){ 
            if(e.shiftKey){ 
                $(this).next().stop().slideUp(speed);
                $(this).parent().removeClass('active');
            }
        }
    });
    
    $(sub).find('li:last a').keydown(function(e){
        if(e.keyCode == 9){ 
            if(!e.shiftKey){ 
                $(this).parents(sub).stop().slideUp(speed);
                $(this).parents(sub).prev().removeClass('active');
            }
        }
    });
    

    $('header').mouseleave(function(){
        $(main).removeClass('active');
        $(sub).stop().slideUp(speed);
    });
    
    $('header .language .last a').click(function(){
        alert('Sorry! We are still working on our English website.');
    });
});


/* family_site */
$(function(){
    //문서객체는 변수에 담기
    var box = '.family_site';
    
    $(box).change(function(){
        var addr = $(this).val();

        if(addr != '#'){
            window.open(addr);
        }
    });
    
});

/* scroll_top */
$(document).ready(function(){
    var btn = '.scroll_top a';
    var easing = 'easeOutQuart';
    var btnWidth = $(btn).width();
    var minWidth = 1320;
    var stopWidth = minWidth + (btnWidth * 2) + 20;
    
    $(window).scroll(function(){
        var top = $(window).scrollTop();
        var wWidth = $(window).width();
        
        if(top < 1200 || wWidth < stopWidth){ 
            $(btn).parent().stop().fadeOut(300);
        }else{
            $(btn).parent().stop().fadeIn(300);
        }
        
    });
    
    $(window).trigger('scroll');
    
    $(window).resize(function(){
        $(window).trigger('scroll');
    });
    
    $(btn).click(function(e){
        e.preventDefault();
        
        $('html, boday').animate({scrollTop:0},900,easing);
    });
    
});




