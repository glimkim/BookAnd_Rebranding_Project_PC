<?php
    //세션을 시작 후에 값을 모두 제거
    session_start();
    unset($_SESSION['useremail']); //unset() : 세션제거
    unset($_SESSION['username']);
    unset($_SESSION['userlevel']);
    unset($_SESSION['autologin']);

    //다시 index.php로 돌아가기
    echo "
        <script>
            location.href = '../index.php'; 
        </script>
    ";
?>