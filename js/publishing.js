$(document).ready(function(){
    var menu = '.prize .contents_nav';
    var contents = '.prize';
    
    $(menu).find('li:first a').addClass('active');
    $(contents).find('> div:first').fadeIn(0);
    
    $(menu).find('a').click(function(e){
        e.preventDefault();
        $(menu).find('a').removeClass('active');
        $(this).addClass('active'); 
        
        var index = $(this).parent().index();
        console.log(index);
       $(contents).find('> div').fadeOut(0);
       $(contents).find('> div').eq(index).fadeIn(0);
        
    });
    
    
});

$(document).ready(function(){
    
    
    $('#consulting_submit').click(function(e){
        e.preventDefault();
        
        if(!$('#email').val()){
            alert("이메일 주소를 입력하세요");
            $('#email').focus(); 
            return; 
        }
        
        if(!$('#phone').val()){
            alert("연락가능한 번호를 입력하세요");
            $('#phone').focus(); 
            return; 
        }
        
        if(!$('#email').val()){
            alert("이메일 주소를 입력하세요");
            $('#email').focus(); 
            return; 
        }
        
        if(!$('#subject').val()){
            alert("제목을 입력하세요");
            $('#subject').focus(); 
            return; 
        }
        

    
        location.href = 'consulting_complete.php#indicator';
    
    });
});
