<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>북앤드 | 회원가입</title>
        
        <link rel="shortcut icon" href="images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/join.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/join.js"></script>
    </head>
    <body>
        <div class="joined">
            <h1>
                <a href="../index.php" title="메인페이지로 가기">
                    <img src="../images/join/logo.png" alt="북앤드 로고">
                </a>
            </h1>
            <h3>JOIN US</h3>
            <ul>
                <li>약관동의<span></span></li>
                <li>정보입력<span></span></li>
                <li class="addclass">가입완료<span></span></li>
            </ul>
            <p class="welcome_top">WELCOM TO BOOKAND!</p>
            <p class="welcome_bottom">
                
                <?
                    echo '<span class="joined_name">' . $_GET['name'] . '</span>';
                ?>
                님, 가입을 축하합니다.<br>
                북앤드의 다양한 서비스를 즐겨보세요.
            </p>
            <div>
                <a href="../index.php">시작하기</a>
            </div>
        </div>
    </body>
</html>