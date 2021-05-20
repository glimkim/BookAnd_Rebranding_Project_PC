//concert
$(document).ready(function(){
    $.ajax({
        url: '../js/community.json',
        dataType: 'json',
        success: function(data){
            var validData = data.concert;
            if(validData.length > 0){
                var ul = $('<ul />');
                
                for(var i in validData){
                    
                    var li = $('<li />');
                    
                    var $url = validData[i].url;
                    var $title = validData[i].title;
                    var $date = validData[i].date;
                    
                    var img = $('<img />').attr({
                        src: $url,
                        alt: "북콘서 이미지" + (Number(i) + 1),
                        onerror: 'javascript:this.src="images/error.jpg"'
                    });
                    
                    var eventImg = $('<a href=#event />').attr('alt','해당 페이지로 이동');
                    eventImg.append(img);
                    
                    li.append(
                        eventImg,
                        $('<h5 />').text($title),
                        $('<p class="date" />').text('등록일 : ' + $date)
                    );
                    
                    
                    
                    ul.append(li);
                }
                
                
                $('.concert > p').after(ul);
                
            }else{
               $('.concert > p').after('<p>데이터를 읽어오는 데 실패하였습니다.</p>'); 
            }
        },
        error: function(){
            $('.concert > p').after('<p>데이터를 읽어오는 데 실패하였습니다.</p>');
        }
    });
});

//event
$(document).ready(function(){
    $.ajax({
        url: '../js/community.json',
        dataType: 'json',
        success: function(data){
            var validData = data.event;
            if(validData.length > 0){
                var ul = $('<ul />');
                
                for(var i in validData){
                    
                    var li = $('<li />');
                    
                    var $url = validData[i].url;
                    var $title = validData[i].title;
                    var $date = validData[i].date;
                    
                    var img = $('<img />').attr({
                        src: $url,
                        alt: "이벤트 이미지" + (Number(i) + 1),
                        onerror: 'javascript:this.src="images/error.jpg"'
                    });
                    
                    var eventImg = $('<a href=#event />').attr('alt','이벤트 페이지로 이동');
                    eventImg.append(img);
                    
                    li.append(
                        eventImg,
                        $('<h5 />').text($title),
                        $('<p class="date" />').text('등록일 : ' + $date)
                    );
                    
                    
                    
                    ul.append(li);
                }
                
                
                $('.event > p').after(ul);
                
            }else{
               $('.event > p').after('<p>데이터를 읽어오는 데 실패하였습니다.</p>'); 
            }
        },
        error: function(){
            $('.event > p').after('<p>데이터를 읽어오는 데 실패하였습니다.</p>');
        }
    });
});
