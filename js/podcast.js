$(document).ready(function(){
     var newText = $('.video_list li').length;
    
    $('.post').html('총 게시물 <span>' + newText + '</span> 건');
    
    
    
    $('.text_bottom').each(function(){
        var contents = $(this).text();
        if(contents.length > 240){
            var newContents = contents.substr(0, 240);
            $(this).text(newContents + ' · · ·');
        }else{
            $(this).text(contents);
        }
    });
    
    $('.video_list li a').colorbox({
        iframe: true,
        width:1000,
        height:550,
    });
    
    $(document).bind('cbox_open', function(){
      $('html, body').css('overflow','hidden');
    });
    
    $(document).bind('cbox_closed', function(){
      $('html, body').css('overflow','auto');
    });
    
});

