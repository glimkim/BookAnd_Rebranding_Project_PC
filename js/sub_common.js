/* account */
$(document).ready(function(){

    
    $('.account').click(function(e){
        e.preventDefault();
        var pHeight = $('.popup').height();
        var dHeight = $(document).height();

        if($('.popup').is(':hidden')){
            $('.form_bg').height(dHeight- 40);
            $('.form_bg').css('top', 40);
        }else{
            $('.form_bg').height(dHeight - pHeight - 40);
            $('.form_bg').css('top',pHeight + 40);
            
            $('.popup').find('.close_btn').click(function(){
                $('.form_bg').height(dHeight- 40);
                $('.form_bg').css('top', 40);
            });
        }
        
        var has = $('.account').hasClass('active');
        if(has){
            $('.account + form').stop().slideUp('fast');
            $('.account').removeClass('active');
            $('.form_bg').fadeOut('fast');
        }else{
            $('.account + form').stop().slideDown('fast', function(){
            $('.account').addClass('active');
            $('.form_bg').fadeIn('fast');
            });
        }
         
    });
    
    $('.form_bg').click(function(){
        $('.account').trigger('click');
    });
    
    
});


$(document).ready(function(){
    
    $('#sub_main .addclass_text, #sub_main span, #sub_main img').addClass('active');
    $('.addclass').addClass('active');
    $('.gnb > ul > li.bookmark').addClass('index');
});


$(document).ready(function(){
    $('#sub_title h3').addClass('active');
    $('#sub_contents').addClass('active');
});




