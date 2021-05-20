<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>오시는 길 | BookAnd</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="../images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub_common.css">
        <link rel="stylesheet" href="../css/map.css">
        
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
		            <h2>BOOKAND</h2>
                    <p>책을 통해 더 넓은 세상을 여행하는 북앤드를 소개합니다.</p>
		        </div>
                <span></span>
                <img src="../images/sub_common/sub_main_bn01.png" alt="북앤드 서브 메인 이미지01">
		    </div>
		</div>
		<nav id="indicator">
		    <ul>
		        <li>
		            <a href="bookand.php">북앤드</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="ci_bi.php">CI 소개</a>
		            <span></span>
		        </li>
		        <li class="addclass">
		            <a href="map.php">오시는 길</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>오시는 길</h3>
		</div>
		<div id="sub_contents">
            <div class="contents_top">
                <div class="text_box">
                <h4>BookAnd 본사</h4>
                <p>
                    주소<span> | </span>서울시 마포구 동교로 145 북앤드 Head Office<br>
                    대표번호<span> | </span>02-2309-9185 &nbsp;&nbsp; E-mail<span> | </span>bookAnd@bookAnd.com    
                </p>
                </div>
                <a href="https://m.map.kakao.com/actions/searchView?q=%EB%8F%99%EA%B5%90%EB%A1%9C%20145&wxEnc=LVSOTP&wyEnc=QNLTTMN&lvl=4#!/LWOUUR,QNLSRSN/map/place" target="_blank">카카오 지도 보기</a>
            </div>
            <div id="map"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=ecac37b175df5db16fe3518bc2f13db2"></script>
            <script src="../js/map.js"></script>
            <ul>
                <li>
                    <span>지하철 이용 시</span><br>
                    홍대입구역 하차 후 도보 5분 거리
                </li>
                <li>
                    <span>버스 이용 시</span><br>
                    서교동·홍대입구·동교로 사거리 하차
                </li>
                <li>
                    <span>승용차 이용 시</span><br>
                    강변북로·양화로·국회대로 이용 가능
                </li>
            </ul>
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
                <a class="go_mobile" href="http://mbookand.dothome.co.kr/">모바일 버전 바로가기</a>
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