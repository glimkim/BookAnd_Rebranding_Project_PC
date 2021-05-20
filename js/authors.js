$(document).ready(function(){
    var btn = '.select button';
    
    $(btn).click(function(){
        $(this).next().slideToggle('fast');
        $(this).toggleClass('active');
    });
    
    $(btn).parent().mouseleave(function(){
        $(this).find('ul').slideUp(); 
        $(btn).removeClass('active');
        
    });
    
    $(btn).next().find('a').click(function(){
            var newText = $(this).text();
            var selected = $(btn).text();
        
            $(this).text(selected);
            $(btn).text(newText); 
        });

    $(btn).next().find('li:last-child a').keydown(function(e){
        if(e.keyCode == 9){
            if(!e.shiftKey){
                $(btn).parent().trigger('mouseleave');
            }
        }
    });
    
    $(btn).keydown(function(e){
        if(e.keyCode == 9){
            if(e.shiftKey){
                $(this).parent().trigger('mouseleave');
            }
        }
    });
    
    $.ajax({
        url: '../js/author.json',
        dataType: 'json',
        success: function(data){
            var data01 = data.g;
            var data02 = data.n;
            var data03 = data.d;
            var data04 = data.l;
            var data05 = data.m;
            var data06 = data.b;
            var data07 = data.s;
            var data08 = data.a;
            var data09 = data.j;
            var data10 = data.ch;
            var data11 = data.k;
            var data12 = data.t;
            var data13 = data.p;
            var data14 = data.h;
            
            var allData = data01.concat(data02).concat(data03).concat(data04).concat(data05).concat(data06).concat(data07).concat(data08).concat(data09).concat(data10).concat(data11).concat(data12).concat(data13).concat(data14);
          
            var dataArray = [allData, data01, data02, data03, data04, data05, data06, data07, data08, data09, data10, data11, data12, data13, data14];
            
            function dataPrint(index){
                if(dataArray[index].length > 0){
                    
                    var ul = $('<ul />');
                    
                    for(var i in dataArray[index]){
                        var li = $('<li />');
                        
                        var $name = dataArray[index][i].name;
                        
                        
                        li.append(
                            $('<a href="#detail" />').text($name)
                        );
                        
                        
                        ul.append(li);
                    }
                    
                    $('.author_list').prepend(ul);
                }
                
               
                }
            
             dataPrint(0);
            
            var num = 12; 
            
            $('.author_list').find('li:gt(' + (num - 1) + ')').slideUp(0);
            
            var pack = 1; 
            
            $('.author_list').find('.more_btn').click(function(){
                var listlength = $('.author_list').find('li').length;
                var lastNum = Math.floor(listlength / num) + 1;
                pack++;
                if(listlength != num){
                    if(pack > lastNum){
                    alert('마지막입니다.');
                    }else{
                        $('.author_list').find('li:lt(' + (num * pack) + ')').slideDown(300);
                    }
                }else{
                    alert('마지막입니다.');
                }
                    
            });
            
            $('.order a').click(function(e){
                e.preventDefault();
                
                $('.order a').removeClass('active');
                $(this).addClass('active');
                
                var index = $(this).parent().index();
                
                $('.author_list').find('ul').remove(0);
                
                dataPrint(index);
                
                $('.author_list').find('li:gt(' + (num - 1) + ')').slideUp(0);
                pack = 1;
                
            });
        },
        error: function(){
            $('.author_list').append('<p>데이터를 읽어오는 데 실패하였습니다.</p>');
        }
    });
    
});

$(document).ready(function(){
    
    var newText = $('.interview_list li').length;
    console.log(newText);
    
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
    
    
});











