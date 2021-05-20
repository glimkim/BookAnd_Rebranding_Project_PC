//common & join
$(document).ready(function(){
    //title
    $('.addclass').addClass('active');
    
    $('#check_all').click(function(){
        if($(this).is(":checked")){
            $('input:checkbox').prop('checked',true);
        }else{
            $('input:checkbox').prop('checked',false);
        }
    });
    
    $('.join_wrap input').change(function(){
        var chk01 = $('#essential01').prop('checked');
        var chk02 = $('#essential02').prop('checked');
        var chk03 = $('#location').prop('checked');
        var chk04 = $('#promotion').prop('checked');
       
        if(chk01 && chk02 && chk03 && chk04){
            $('#check_all').prop('checked', 'checked');
        }
        
        if(chk03){
            $('#location_chek').prop("value","yes");
        }else{
            $('#location_chek').prop("value","no");
        }
        
        if(chk04){
            $('#promo_check').prop("value","yes");
        }else{
            $('#promo_check').prop("value","no");
        }
        
    });
    
    var next_btn = $('.join_wrap .confirm');
    $(next_btn).click(function(e){
        var essential01 =$('#essential01').prop('checked');
        var essential02 =$('#essential02').prop('checked');
        if(!essential01 && !essential02){
            e.preventDefault();
            alert('필수 약관에 동의해주세요.');
        }else{
            document.join_form.submit();
        }
    });
    
    
    
});

//join_form
$(document).ready(function(){
    
    //date
    var today = new Date();
    var toyear = today.getFullYear();
    var start = toyear;
    var end = toyear - 80;
    
    for(var i=start;i>=end;i--){
         var option = $('<option>' + i + '</option>');
        $('#year').append(option);
    }
    
    for(var i = 1;i<=12;i++){
         var option = $('<option>' + i + '</option>');
        $('#month').append(option);
    }
    
    function day_cal(y, m){
        var mArray = [31,28,31,30,31,30,31,31,30,31,30,31];

        if((y % 4 == 0 && y % 100 != 0) || y % 400 == 0){
            mArray[1] = 29;
        }
        
        for(var i=1;i<=mArray[m-1];i++){
            var option = $('<option>' + i + '</option>');
            $('#day').append(option);
        }
    }
    
    day_cal(toyear, 1);
    
    $('#year, #month').change(function(){
        var y = $('#year').val();
        var m = $('#month').val();
        
        day_cal(y,m);
    });
    
     //email valid check
    function email_check( email ){    
        var regex=/([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return (email != '' && email != 'undefined' && regex.test(email)); 
    }

    $("input[type=email]").blur(function(){
      var email = $(this).val();
      if( email == '' || email == 'undefined') return;
      if(!email_check(email) ) {
        alert('이메일 형식으로 적어주세요');
        $(this).focus();
        return false;
      }
    });
    
    //email_check btn
    $('.email_check').click(function(e){
        e.preventDefault();
        
        var emailValue= $("input[type=email]").val(); 
        
        var w = $(window).width();
        var h = $(window).height();
        var leftValue = (w / 2) - 170;
        var topValue = (h / 2) - 150;
        
        window.open('../tnav/check_email.php?email=' + emailValue,'idCheck','width=340, height=300, top=' + topValue + ',left=' + leftValue);
    });
     
    
    //password
    $('#password_confirm').blur(function(){
        var pw01 = $('#password').val();
        var pw02 = $(this).val();
        
        if(pw01 != pw02){
            $('.not_match').fadeIn(0);
        }else{
            $('.not_match').fadeOut(0);
        }
    });
    

    //form_fill
    $('.join_form button.confirm').click(function(e){
        e.preventDefault();
        
        if(!$('#email').val()){
            alert("이메일 주소를 입력하세요");
            $('#email').focus(); 
            return; 
        }
        
        if(!email_check($('#email').val())){
            alert('이메일 형식으로 적어주세요');
            $(this).focus();
            return;
        }
        
        if(!$('#password').val()){
            alert("비밀번호를 입력하세요");
            $('#password').focus(); 
            return; 
        }
        
        if(!$('#password_confirm').val()){
            alert("비밀번호를 재확인 해주세요.");
            $('#password_confirm').focus(); 
            return; 
        }
        
         var pw01 = $('#password').val();
        var pw02 = $('#password_confirm').val();
        
        if(pw01 != pw02){
            alert("비밀번호가 일치하지 않습니다.");
            $('#password_confirm').focus(); 
            return;
        }
        
        if(!$('#name').val()){
            alert("이름을 입력하세요");
            $('#name').focus(); 
            return; 
        }
        if(!$('#phone').val()){
            alert("전화번호를 입력하세요");
            $('#phone').focus(); 
            return; 
        }
        if(!$('#address01').val()){
            alert("주소를 입력하세요");
            $(field[5]).focus(); 
            return; 
        }

        document.join_form.submit();
        
        
    }); 
});

//mypage
$(document).ready(function(){
    var bMonth = $('#bMonth').val();
    bMonth = Number(bMonth); 
    var bDate = $('#bDate').val();
    bDate = Number(bDate);
    var bYear = $('#bYear').val();
    bYear = Number(bYear);
    
    $('#month').find('option').eq(bMonth - 1).attr('selected','selected');
    $('#day').find('option').eq(bDate - 1).attr('selected','selected');
    
    
    var bYearIndex; 
    
    $('#year option').each(function(index){ 
        var value = $(this).html(); 
        
        if(value == bYear){
            bYearIndex = $(this).index();
        }
    });
    
    $('#year').find('option').eq(bYearIndex).attr('selected','selected');
    
    $('.join_form button.confirm02').click(function(e){
        e.preventDefault();
        
        if(!$('#password').val()){
            alert("비밀번호를 입력하세요");
            $('#password').focus(); 
            return; 
        }
        
        if(!$('#password_confirm').val()){
            alert("비밀번호를 재확인 해주세요.");
            $('#password_confirm').focus(); 
            return; 
        }
        
        var pw01 = $('#password').val();
        var pw02 = $('#password_confirm').val();
        
        if(pw01 != pw02){
            alert("비밀번호가 일치하지 않습니다.");
            $('#password_confirm').focus(); 
            return;
        }
        
        if(!$('#name').val()){
            alert("이름을 입력하세요");
            $('#name').focus(); 
            return; 
        }
        if(!$('#phone').val()){
            alert("전화번호를 입력하세요");
            $('#phone').focus(); 
            return; 
        }
        if(!$('#address01').val()){
            alert("주소를 입력하세요");
            $(field[5]).focus(); 
            return; 
        }

        document.join_form.submit();
        
    }); 
});


//joined
$(document).ready(function(){
    $('.joined p, .joined > div').addClass('active');
});