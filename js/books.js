//booksection
$(document).ready(function(){
    var menu = '.booksection .contents_nav';
    var contents = '.booksection .contents_wrap';
    
    $(menu).find('li:first a').addClass('active');
    $(contents).find('div:first').fadeIn(0);
    
    $.ajax({
        url: "../js/section.json",
        dataType: "json",
        success: function(data){
            var data01 = data.literature;
            var data02 = data.humanities;
            var data03 = data.essay;
            var data04 = data.art;
            
            var allData = data04.concat(data01).concat(data03).concat(data02);
          
            var dataArray = [allData, data01, data02, data03, data04];
            
            function dataPrint(index){
                if(dataArray[index].length > 0){
                    
                    var ul = $('<ul />');
                    
                    for(var i in dataArray[index]){
                        var li = $('<li />');
                        
                        var $book = dataArray[index][i].book;
                        var $author = dataArray[index][i].author;
                        var $description = dataArray[index][i].description;
                        var $url = dataArray[index][i].url;
                        
                        var title = $('<div class="title" />');
                        
                        var figure = $('<figure />');
                        var a = $('<a href="#bookmark" />');
                        var img = $('<img />').attr({src:$url, alt:"분야별 도 이미지" + (Number(i) + 1), onerror: 'javascript:this.src="images/error.jpg"'});
                        
                        figure.append(
                            img,
                            a);
                        
                        title.append(
                            $('<h4 />').text($book),
                            $('<p />').text(' by ' + $author)
                        );
                        
                        li.append(
                            figure,
                            title,
                            $('<p />').text($description)
                        );
                        
                        
                        ul.append(li);
                    }
                    
                    $(contents).find('> div').append(ul);
                }
                
               
                }
            
            dataPrint(0);
            
            var num = 9; 
            
            $(contents).find('li:gt(' + (num - 1) + ')').slideUp(0);
            
            var pack = 1; 
            
            $(contents).find('.more_btn').click(function(){
                var listlength = $(contents).find('li').length;
                var lastNum = Math.floor(listlength / 9) + 1;
                pack++;
                if(listlength != 9){
                    if(pack > lastNum){
                    alert('마지막입니다.');
                    }else{
                        $(contents).find('li:lt(' + (num * pack) + ')').slideDown(600);
                    }
                }else{
                    alert('마지막입니다.');
                }
                    
            });
            
            $('.booksection figure').find('a').click(function(){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                }else{
                    $(this).addClass('active');
                }
            });
            
             $('li').find('p').each(function(){
                var pText = $(this).text();

                if(pText.length >= 57){
                    var newText = pText.substr(0, 57);
                    $(this).text(newText + ' · · ·');
                }
            });
            
            
            $(menu).find('a').click(function(e){
                e.preventDefault();
                $(menu).find('a').removeClass('active');
                $(this).addClass('active');
                
                var index = $(this).parent().index();
                
                $(contents).find('ul').remove(0);
                
                dataPrint(index);
                
                $(contents).find('li:gt(' + (num - 1) + ')').slideUp(0);
                pack = 1;
                
                $('.booksection figure').find('a').click(function(){
                    if($(this).hasClass('active')){
                        $(this).removeClass('active');
                    }else{
                        $(this).addClass('active');
                    }
                });

                 $('li').find('p').each(function(){
                    var pText = $(this).text();

                    if(pText.length >= 56){
                        var newText = pText.substr(0, 56);
                        $(this).text(newText + ' · · ·');
                    }
                });
            
                
            });
            
           
            
        },
        error: function(){
            contents.after('<p>데이터를 가져오는 데 실패하였습니다.</p>');
        }
    });
});

//newbooks
$(document).ready(function(){
    
    var contents = '.newbooks > p';
    
    $.ajax({
        url: '../js/books.json',
        dataType: 'json',
        success: function(data){
            var validData = data.newbooks;
            
           function dataPrint(){
                if(validData.length > 0){
                    var ul = $('<ul />');
                    
                    for(var i in validData){
                        var li = $('<li />');
                        
                        var $book = validData[i].book;
                        var $author = validData[i].author;
                        var $description = validData[i].description;
                        var $url = validData[i].url;
                        
                        var title = $('<div class="title" />')
                        
                        var figure = $('<figure />');
                        var a = $('<a href="#bookmark" />');
                        var img = $('<img />').attr({src:$url, alt:"신간도서 이미지" + (Number(i) + 1), onerror: 'javascript:this.src="images/error.jpg"'});
                        
                        figure.append(
                            img,
                            a);
                        
                        title.append(
                            $('<h4 />').text($book),
                            $('<p />').text(' by ' + $author)
                        );
                        
                        li.append(
                            figure,
                            title,
                            $('<p />').text($description)
                        );
                        
                        
                        ul.append(li);
                        
                        
                    }
                    
                    $(contents).after(ul);
                    
                }
                
            }
            
            dataPrint();
            
            $('li').find('p').each(function(){
                var pText = $(this).text();

                if(pText.length >= 57){
                    var newText = pText.substr(0, 57);
                    $(this).text(newText + ' · · ·');
                }
            });
            
            $('.newbooks figure').find('a').click(function(){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                }else{
                    $(this).addClass('active');
                }
            });
        },
        error: function(){
            $(contents).after('<p>데이터를 읽어오는 데 실패하였습니다.</p>');
        }
    });

});

//bestsellers
$(document).ready(function(){
    
    var contents = '.bestsellers > p';
    
    $.ajax({
        url: '../js/books.json',
        dataType: 'json',
        success: function(data){
            var validData = data.bestsellers;
            
           function dataPrint(){
                if(validData.length > 0){
                    var ul = $('<ul />');
                    
                    for(var i in validData){
                        var li = $('<li />');
                        
                        var $book = validData[i].book;
                        var $author = validData[i].author;
                        var $description = validData[i].description;
                        var $url = validData[i].url;
                        
                        var title = $('<div class="title" />');
                        
                        var figure = $('<figure />');
                        var a = $('<a href="#bookmark" />');
                        var img = $('<img />').attr({src:$url, alt:"베스트셀러 이미지" + (Number(i) + 1), onerror: 'javascript:this.src="images/error.jpg"'});
                        
                        figure.append(
                            img,
                            a);
                        
                        title.append(
                            $('<h4 />').text($book),
                            $('<p />').text(' by ' + $author)
                        );
                        
                        li.append(
                            figure,
                            title,
                            $('<p />').text($description)
                        );
                        
                        
                        ul.append(li);
                        
                        
                    }
                    
                    $(contents).after(ul);
                    
                }
                
            }
            
            dataPrint();
            
            $('li').find('p').each(function(){
                var pText = $(this).text();

                if(pText.length >= 57){
                    var newText = pText.substr(0, 57);
                    $(this).text(newText + ' · · ·');
                }
            });
            
            $('.bestsellers figure').find('a').click(function(){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                }else{
                    $(this).addClass('active');
                }
            });
        },
        error: function(){
            $(contents).after('<p>데이터를 읽어오는 데 실패하였습니다.</p>');
        }
    });

});

//bookofmonth
$(document).ready(function(){
    
    var contents = '.bookofmonth > p';
    
    $.ajax({
        url: '../js/books.json',
        dataType: 'json',
        success: function(data){
            var validData = data.bookofmonth;
            
           function dataPrint(){
                if(validData.length > 0){
                    var ul = $('<ul />');
                    
                    for(var i in validData){
                        var li = $('<li />');
                        
                        var $book = validData[i].book;
                        var $author = validData[i].author;
                        var $description = validData[i].description;
                        var $url = validData[i].url;
                        
                        var title = $('<div class="title" />')
                        
                        var figure = $('<figure />');
                        var a = $('<a href="#bookmark" />');
                        var img = $('<img />').attr({src:$url, alt:"이달의 책 이미지" + (Number(i) + 1), onerror: 'javascript:this.src="images/error.jpg"'});
                        
                        figure.append(
                            img,
                            a);
                        
                        title.append(
                            $('<h4 />').text($book),
                            $('<p />').text(' by ' + $author)
                        );
                        
                        li.append(
                            figure,
                            title,
                            $('<p />').text($description)
                        );
                        
                        
                        ul.append(li);
                        
                        
                    }
                    
                    $(contents).after(ul);
                    
                }
                
            }
            
            dataPrint();
            
            $('li').find('p').each(function(){
                var pText = $(this).text();

                if(pText.length >= 57){
                    var newText = pText.substr(0, 57);
                    $(this).text(newText + ' · · ·');
                }
            });
            
            $('.bookofmonth figure').find('a').click(function(){
                if($(this).hasClass('active')){
                    $(this).removeClass('active');
                }else{
                    $(this).addClass('active');
                }
            });
        },
        error: function(){
            $(contents).after('<p>데이터를 읽어오는 데 실패하였습니다.</p>');
        }
    });

});