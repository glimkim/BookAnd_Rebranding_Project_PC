<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>저자검색 | BookAnd</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="../images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub_common.css">
        <link rel="stylesheet" href="../css/authors.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub_common.js"></script>
        <script src="../js/authors.js"></script>
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
		            <h2>AUTHORS</h2>
                    <p>북앤드와 함께 한 저자님들을 소개합니다.</p>
		        </div>
                <span></span>
                <img src="../images/sub_common/sub_main_bn03.png" alt="북앤드 서브 메인 이미지03">
		    </div>
		</div>
		<nav id="indicator">
		    <ul>
		        <li class="addclass">
		            <a href="authors.php">저자 검색</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="interview.php">저자 인터뷰</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>저자 검색</h3>
		</div>
		<div id="sub_contents" class="authors">
            <p>알고 싶은 저자를 검색해보세요.</p>
		    <ul class="order">
		        <li><a class="active" href="#obrderabc">ALL</a></li>
		        <li><a href="#obrderabc">ㄱ</a></li>
		        <li><a href="#obrderabc">ㄴ</a></li>
		        <li><a href="#obrderabc">ㄷ</a></li>
		        <li><a href="#obrderabc">ㄹ</a></li>
		        <li><a href="#obrderabc">ㅁ</a></li>
		        <li><a href="#obrderabc">ㅂ</a></li>
		        <li><a href="#obrderabc">ㅅ</a></li>
		        <li><a href="#obrderabc">ㅇ</a></li>
		        <li><a href="#obrderabc">ㅈ</a></li>
		        <li><a href="#obrderabc">ㅊ</a></li>
		        <li><a href="#obrderabc">ㅋ</a></li>
		        <li><a href="#obrderabc">ㅌ</a></li>
		        <li><a href="#obrderabc">ㅍ</a></li>
		        <li><a href="#obrderabc">ㅎ</a></li>
		    </ul>
		    <div class="search">
		        <div class="select">
		            <button>전체 검색</button>
		            <ul>
		                <li><a href="#searcharea">저자명</a></li>
		                <li><a href="#searcharea">저서</a></li>
		            </ul>
		        </div>
		        <input type="text" id="search_box" placeholder="검색어를 입력하세요.">
		        <label for="search_box">검색창</label>
		        <button type="submit"></button>
		    </div>
		    <div class="author_list">
		        <button class="more_btn">FIND OUT MORE</button>
		    </div>
		</div>
		<div class="outerwrap">
		    
		</div>
		<div class="outer_wrap">
		    <footer>
                <h1>
                    <img src="../images/common/footer_logo.svg" alt="로고 이미지">
                </h1>
                <div class="f_nav">
                    <ul>
                        <li><a href="#personalinfo">개인정보처리방침</a></li>
                        <li><a href="#terms">이용약관</a></li>
                        <li><a href="../support/notice.php?table=notice&mode=recruit#indicator">채용안내</a></li>
                        <li>
                           <label for="family_site" class="away">패밀리사이트</label>
                           <select id="family_site" onchange="if(this.value){window.open(this.value)};">
                               <option selected>패밀리사이트</option>
                               <option value="https://post.naver.com/staubin">arte</option>
                               <option value="https://m.post.naver.com/my.nhn?memberNo=36137752">arte_pop</option>
                               <option value="https://blog.naver.com/book_21">21세기북스</option>
                           </select>
                        </li>
                    </ul>
                </div>
                <ul class="sns">
                    <li><a href="https://www.youtube.com/channel/UCyRhEc0XXhq1qgyEbKNx-gQ?sub_confirmation=1" target="_blank"></a></li>
                    <li><a href="https://www.instagram.com/jiinpill21/" target="_blank"></a></li>
                    <li><a href="https://www.facebook.com/21cbooks" target="_blank"></a></li>
                    <li><a href="https://twitter.com/21artepop" target="_blank"></a></li>
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