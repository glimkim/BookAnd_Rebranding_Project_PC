function check_input(){
    if(!document.board_form.subject.value){
        alert("제목을 입력해주세요.");    
        document.board_form.subject.focus();
        return;
    }

    if(!document.board_form.content.value){
        alert("내용을 입력해주세요.");    
        document.board_form.content.focus();
        return;
    }
    
    document.board_form.submit();
}

document.addEventListener('keydown', function(event){
  
}, true);

$(document).ready();


$(document).ready(function(){
    
    $('#board_write input').keydown(function(e){
        if (e.keyCode === 13) {
            e.preventDefault();
            alert('제목이나 내용은 공백으로 처리하실 수 없습니다.');
          };
    });
    
    $('.delete_btn').click(function(e){
        e.preventDefault();
        
        var href = $(this).attr('href');
        
        var q = confirm("한번 삭제하시면 복구할 수 없습니다. \n\n그래도 삭제 하시겠습니까?");
        
        if(q){
            location.href = href;
        }
    });
});

$(document).ready(function(){
    
    
    $('#alliance_submit').click(function(e){
        e.preventDefault();
        
        if(!$('#company').val()){
            alert("기업명을 입력하세요");
            $('#company').focus(); 
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
    
        location.href = 'alliance_complete.php#indicator';
    
    });
});