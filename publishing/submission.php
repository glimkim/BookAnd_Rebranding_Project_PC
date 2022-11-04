<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>기획/원고 모집 | BookAnd</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="../images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub_common.css">
        <link rel="stylesheet" href="../css/publishing.css">
        
        <script src="../js/jquery-1.12.0.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/common.js"></script>
        <script src="../js/sub_common.js"></script>
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
		            <h2>PUBLISHING</h2>
                    <p>출판과 관련된 모든고민은 북앤드에서 해결하세요. </p>
		        </div>
                <span></span>
                <img src="../images/sub_common/sub_main_bn04.png" alt="북앤드 서브 메인 이미지04">
		    </div>
		</div>
		<nav id="indicator">
		    <ul>
		        <li class="addclass">
		            <a href="submission.php">기획/원고 모집</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="prize.php">공모전</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="consulting.php">1:1 문의</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>기획/원고 모집</h3>
		</div>
		<div id="sub_contents" class="submission">
		    <p>북앤드는 출판 기획에 관한 반짝이는 아이디어와 저자님들의 마음이 담긴 원고를 항상 기다리고 있습니다.</p>
		    <div class="submission_form">
		        <ul>
		            <li>
		                <span></span>
		                <h5>기획 아이디어 모집</h5>
		                <p>
		                    북앤드는 다양한 출판 기획 아이디어를 모집합니다.<br>
                            책으로 펴내면 좋을 기획 아이디어를 가지고 있는 분은 망설이지 말고 응모해주세요!
		                </p>
		            </li>
		            <li>
		                <span></span>
                        <h5>원고 모집</h5>
		                <p>
		                    북앤드는 다양한 분야의 책을 출판합니다.<br> 
                            저자님들의 시간과 노력이 담긴 글이라면 어떤 분야든지 꼼꼼하고 정성스럽게 검토하겠습니다. 
		                </p>
		            </li>
		            <li>
		                <span></span>
		                <h5>접수 요령</h5>
		                <ul>
		                    <li>이메일과 우편으로 접수합니다.</li>
		                    <li>원고의 종류에는 제한이 없습니다.</li>
		                    <li>이메일, 주소, 전화번호를 정확히 기재해주시고, 약력 등의 개인 프로필과 시놉시스를 적어주십시오.</li>
		                    <li>우편 접수 원고 및 기획 서류는 검토 후 폐기하고 있으니 꼭 사본을 보내주시기 바랍니다.</li>
		                    <li>검토 기간은 한 달에서 두 달(시의 경우 두 달에서 세 달) 정도이며, 채택된 원고에 한해 연락드립니다.</li>
		                </ul>
		            </li>
		            <li>
		                <span></span>
		                <h5>보낼 곳</h5>
		                <p>
		                    주소  <span>|</span>  서울시 마포구 동교로 145 북앤드 Head Office<br>
                            대표번호  <span>|</span>  02-2309-9185	E-mail  <span>|</span>  bookAnd@bookAnd.com    
		                </p>
		            </li>
		        </ul>
		    </div>
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