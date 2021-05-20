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
        <script src="../js/post.js"></script>
    </head>
    <body>
        <div class="join_form">
            <h1>
            <a href="../index.php" title="메인페이지로 가기">
                <img src="../images/join/logo.png" alt="북앤드 로고">
            </a>
            </h1>
            <h3>JOIN US</h3>
            <ul>
                <li>약관동의<span></span></li>
                <li class="addclass">정보입력<span></span></li>
                <li>가입완료<span></span></li>
            </ul>
            <form name="join_form" method="post" action="insert.php">
                <ul>
                    <li class="first">
                        <label for="email">이메일</label>
                        <input type="email" name="email" id="email" placeholder="이메일 주소를 입력하세요.">
                        <a href="check_email.php" target="_blank" class="email_check">중복확인</a>
                    </li>
                    <li>
                        <label for="password">비밀번호</label>
                        <input type="password" name="password" id="password" placeholder="비밀번호를 입력하세요." class="password_set">
                        <p>* 공백없이 영문, 숫자 6-12자 사용 가능</p>
                    </li>
                    <li>
                        <label for="password_confirm">비밀번호 재확인</label>
                        <input type="password" name="password_confirm" id="password_confirm" placeholder="비밀번호를 재입력하세요." class="password_set">
                        <p class="not_match">* 비밀번호가 같지 않습니다.</p>
                    </li>
                    <li>
                        <label for="name">이름</label>
                        <input type="text" name="name" id="name">
                    </li>
                    <li>
                        <span>생년월일</span>
                        <select name="bday01" id="year" class="bday"></select>년
                        <select name="bday02" id="month" class="bday"></select>월
                        <select name="bday03" id="day" class="bday"></select>일
                        <label for="year" class="away">태어난 년도</label>
                        <label for="month" class="away">태어난 달</label>
                        <label for="day" class="away">태어난 날</label>
                    </li>
                    <li>
                        <span>성별</span>
                        <select name="gender" id="gender">
                            <option selected>여자</option>
                            <option>남자</option>
                            <option>선택안함</option>
                        </select>
                        <label for="gender" class="away">성</label>
                    </li>
                    <li>
                        <label for="phone">전화번호</label>
                        <input type="number" name="phone" id="phone" placeholder="'-'없이 숫자만 입력하세요." maxlength="11">
                    </li>
                    <li class="last">
                        <span>주소</span>
                        <input type="text" id="postcode" name="postcode" placeholder="우편번호">
                        <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기"><br>
                        <input type="text" id="address01" name="address01" placeholder="주소"><br>
                        <input type="text" id="address02" name="address02" placeholder="상세주소">
                        <input type="hidden" id="sample6_extraAddress" placeholder="참고항목">
                        <label for="postcode" class="away">우편번호</label>
                        <label for="address01" class="away">도로명 주소</label>
                        <label for="address02" class="away">상세 주소</label>
                        <label for="sample6_extraAddress" class="away">참고항목</label>
                         <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
                    </li>
                </ul>
                
                <input type="hidden" name="location_chek" value="<?=$_POST["location_chek"]?>">
                <input type="hidden" name="promo_check" value="<?=$_POST["promo_check"]?>">
                
            <button type="button" onClick="history.go(-1)" class="button previous">이전으로</button>
            <button type="submit" class="button confirm">회원가입</button>
            </form>
        </div>
    </body>
</html>