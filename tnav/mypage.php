<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>마이페이지 | BookAnd</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="../images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub_common.css">
        <link rel="stylesheet" href="../css/mypage.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub_common.js"></script>
        <script src="../js/join.js"></script>
        <script src="../js/post.js"></script>
    </head>
    <body>
		<div class="form_bg"></div>
	    <? include "../lib/sitemap.php" ?>
		<header>
            <div class="h_top">
                <div class="wrap">
                    <ul class="top_nav">
                        <li class="language">
                            <ul>
                                <li class="first"><a href="#" class="active">KOR</a></li>
                                <li class="last"><a href="#">ENG</a></li>
                            </ul>
                        </li>
                        <? include "../lib/top_nav.php" ?>
                    </ul>
                </div>
            </div>
            <div class="h_bottom">
                <div class="wrap">
                    <h1>
                        <a href="../index.php" title="메인 페이지 바로가기">
                            <img src="../images/common/header_logo.svg" alt="로고 이미지">
                        </a>
                    </h1>
                    <? include "../lib/gnb.php" ?>
                </div>
            </div>
		 </header>
		<div id="sub_main">
		    <div class="wrap">
		        <div class="addclass_text">
		            <h2>MY PAGE</h2>
                    <p>나의 활동을 돌아볼 수 있는 공간입니다.</p>
		        </div>
                <span></span>
                <img src="../images/sub_common/sub_main_bn01.png" alt="북앤드 서브 메인 이미지01">
		    </div>
		</div>
		<nav id="indicator">
		    <ul>
		        <li class="addclass">
		            <a href="#mypage">마이 페이지</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>마이페이지</h3>
		</div>
		<div id="sub_contents" class="consulting">
		    <p>가입 정보를 수정하실 수 있습니다.</p>
		     <div class="form_wrap">
		         <form name="join_form" method="post" action="mypage_modify.php" class="join_form">
                   <?
                        include "../lib/dbconn.php";

                        $sql = "SELECT * FROM members WHERE email='$useremail'";
                        $result = mysqli_query($connect, $sql);

                        $row = mysqli_fetch_assoc($result);

                        $email = $row['email'];
                        $name = $row['name'];
                        $phone = $row['phone'];
                        $gender = $row['gender'];
                        $postcode = $row['postcode'];

                        $dob= explode("-", $row['dob']); 
                        $bday01 = $dob[0];
                        $bday02 = $dob[1];
                        $bday03 = $dob[2];

                        $address = explode("|", $row['address']);
                        $address01 = $address[0];
                        $address02 = $address[1];

                        mysqli_close($connect);
                    ?>
                    <ul>
                        <li class="first">
                            <label for="email">이메일</label>
                            <input type="email" name="email" id="email" placeholder="이메일 주소를 입력하세요." value="<?=$email?>" disabled>
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
                            <input type="text" name="name" id="name" value="<?=$name?>">
                        </li>
                        <li>
                            <span>생년월일</span>
                            <select name="bday01" id="year" class="bday"></select>년
                            <select name="bday02" id="month" class="bday"></select>월
                            <select name="bday03" id="day" class="bday"></select>일
                            <input type="hidden" id="bYear" value="<?=$bday01?>">
                            <input type="hidden" id="bMonth" value="<?=$bday02?>">
                            <input type="hidden" id="bDate" value="<?=$bday03?>">
                            <label for="year" class="away">태어난 년도</label>
                            <label for="month" class="away">태어난 달</label>
                            <label for="day" class="away">태어난 날</label>
                        </li>
                        <li>
                            <span>성별</span>
                            <select name="gender" id="gender">
                                <?
                                    switch($gender){
                                        case "여자":
                                ?>
                                        <option selected>여자</option>
                                        <option>남자</option>
                                        <option>선택안함</option>
                                <?
                                        break;
                                        case "남자":
                                ?>
                                        <option>여자</option>
                                        <option selected>남자</option>
                                        <option>선택안함</option>
                                <?
                                        break;
                                        case "선택안함":
                                ?>
                                        <option>여자</option>
                                        <option>남자</option>
                                        <option selected>선택안함</option>
                                <?
                                        break;
                                    }
                                ?>
                            </select>
                            <label for="gender" class="away">성별</label>
                        </li>
                        <li>
                            <label for="phone">전화번호</label>
                            <input type="number" name="phone" id="phone" placeholder="'-'없이 숫자만 입력하세요." maxlength="11" value="<?=$phone?>">
                        </li>
                        <li class="last">
                            <span>주소</span>
                            <input type="text" id="postcode" name="postcode" placeholder="우편번호" value="<?=$postcode?>">
                            <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기"><br>
                            <input type="text" id="address01" name="address01" placeholder="주소" value="<?=$address01?>"><br>
                            <input type="text" id="address02" name="address02" placeholder="상세주소" value="<?=$address02?>">
                            <input type="hidden" id="sample6_extraAddress" placeholder="참고항목">
                            <label for="postcode" class="away">우편번호</label>
                            <label for="address01" class="away">도로명 주소</label>
                            <label for="address02" class="away">상세 주소</label>
                            <label for="sample6_extraAddress" class="away">참고항목</label>
                             <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
                        </li>
                    </ul>
                    <button type="submit" class="button confirm02">정보수정</button>
            </form>
		     </div>
		</div>
		<div class="outer_wrap">
		    <footer>
                <h1>
                    <img src="../images/common/footer_logo.svg" alt="로고 이미지">
                </h1>
                <div class="f_nav">
                    <ul>
                        <li><a href="#">개인정보처리방침</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="../footer/recruit">채용안내</a></li>
                        <li>
                           <label for="family_site" class="away">패밀리사이트</label>
                           <select id="family_site">
                               <option>패밀리사이트</option>
                               <option value="https://post.naver.com/staubin">arte</option>
                               <option value="https://m.post.naver.com/my.nhn?memberNo=36137752">arte_pop</option>
                               <option value="https://blog.naver.com/book_21">21세기북스</option>
                           </select>
                        </li>
                    </ul>
                </div>
                <ul class="sns">
                    <li><a href="#youtube"></a></li>
                    <li><a href="#instagram"></a></li>
                    <li><a href="#facebook"></a></li>
                    <li><a href="#twitter"></a></li>
                </ul>
                <a class="go_mobile" href="https://glimkim.github.io/BookAnd_Rebranding_Project_Mobile/">모바일 버전 바로가기</a>
                <p class="f_text">
                    상호 : BookAnd 대표 : OOO   개인정보관리담당 : 경영지원팀 OOO 팀장 bookAnd@bookAnd.com<br>    
                    문의 : 02-2309-9185  서울시 마포구  동교로 145 사업자번호 : 111-14-14121<br> 
                    통신판매업 번호 : 제1111-0011호<br>
                    <br>
                    Copyright ⓒ 2012 by BookAnd All right reserved
                </p>
		    </footer>
		</div>
		<aside class="scroll_top">
			<a href="#" title="페이지 상단으로 이동"></a>
		</aside>
    </body>
</html>