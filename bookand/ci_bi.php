<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>CI 소개 | BookAnd</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="../images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub_common.css">
        <link rel="stylesheet" href="../css/bookand.css">
        
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
		        <li class="addclass">
		            <a href="ci_bi.php">CI 소개</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="map.php">오시는 길</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>CI 소개</h3>
		</div>
		<div id="sub_contents" class="ci">
		    <div class="ci_top">
		        <img src="../images/bookand/ci_ci_logo.jpg" alt="북앤드 시그니처 로고">
                <div class="text_box">
                    <h4>CORPORATE INDENTITY</h4>
                    <span></span>
                    <p>
                        BookAnd의 CI는 책이 단순히 인쇄물이라는 사전적 의미를 넘어<br>
                        새로운 세상으로 연결되는 문이 될 수 있다는 기업철학 바탕으로 개발되었습니다.
                    </p>
                </div>
            </div>
		    <div class="overview">
		        <h4>OVERVIEW</h4>
		        <span></span>
		        <p>
		            로고는 북앤드를 대표하는 가장 중요한 아이덴티티 요소이자 공식적인 상징입니다.<br>
                    브랜드 이미지 전달에 중요한 역할을 하는 요소이므로 어떤 경우라도 형태가 변형되지 않도록 주의해서 활용해야 합니다.
		        </p>
		        <ul>
		            <li>
		                <img src="../images/bookand/ci_overview_logo_01.jpg" alt="북앤드 시그니처 로고 가로형">
		                <p>Signiture Logo TYPE Horizontal</p>
		            </li>
		            <li>
		                <img src="../images/bookand/ci_overview_logo_02.jpg" alt="북앤드 시그니처 로고 세로형">
		                <p>Signiture Logo TYPE Vertical</p>
		            </li>
		            <li>
		                <img src="../images/bookand/ci_overview_logo_dark01.jpg" alt="북앤드 로고 가로형_dark">
		                <p>TYPE Horizontal [Dark Background]</p>
		            </li>
		            <li>
		                <img src="../images/bookand/ci_overview_logo_dark02.jpg" alt="북앤드 로고 세로형_dark">
		                <p>TYPE Vertical [Dark Background]</p>
		            </li>
		        </ul>
		    </div>
		    <div class="scale">
		        <div class="text_box">
		            <h4>CLEAR SPACE &amp; SCALE</h4>
                    <p>로고는 반드시 공간 규정에 따른 충분한 여백을 확보해야 합니다.</p>
                    <span></span>
		        </div>
		        <img src="../images/bookand/ci_scale_logo01.png" alt="북앤드 로고 스케일 가이드 가로형">
		        <img src="../images/bookand/ci_scale_logo02.png" class="last" alt="북앤드 로고 스케일 가이드 세로형">
		    </div>
		    <div class="color">
                <div class="title">
                    <span class="first"></span>
                    <h4>COLOR SYSTEM</h4>
                    <span class="last"></span>
                </div>
                <ul>
                    <li class="bookand_purple">
                        <h5>BookAnd Purple</h5>
                        <p class="pantone">PANTONE 2617C</p>
                        <p class="color_guide">
                            RGB &nbsp;&nbsp;R 73   G 14   B 103<br>
                            CMYK &nbsp;&nbsp;C 84   M 100   Y 24   K 20<br>
                            HEXA &nbsp;&nbsp;#490E67
                        </p>
                    </li>
                    <li class="bookand_lavender">
                        <h5>BookAnd Lavender</h5>
                        <p class="pantone">PANTONE 11-0102 TSX</p>
                        <p class="color_guide">
                            RGB &nbsp;&nbsp;R 246   G 242   B 255<br>
                            CMYK &nbsp;&nbsp;C 2   M 4   Y 0   K 0<br>
                            HEXA &nbsp;&nbsp;#F6F2FF
                        </p>
                    </li>
                    <li class="sub_color01">
                        <h5>SUB COLOR 01</h5>
                        <p class="pantone">PANTONE 2705 U</p>
                        <p class="color_guide">
                            RGB &nbsp;&nbsp;R 188  G 182  B 255<br>
                            CMYK &nbsp;&nbsp;C 25   M 27   Y 0  K 0<br>
                            HEXA &nbsp;&nbsp;#BCB6FF
                        </p>
                    </li>
                    <li class="sub_color02">
                        <h5>SUB COLOR 02</h5>
                        <p class="pantone">PANTONE 9360 U</p>
                        <p class="color_guide">
                            RGB &nbsp;&nbsp;R 220   G 204   B 255<br>
                            CMYK &nbsp;&nbsp;C 13   M 19  Y 0   K 0<br>
                            HEXA &nbsp;&nbsp;#DCCCFF
                        </p>
                    </li>
                </ul>
		        <p>
		            북앤드의 컬러 시스템은 로고 및 기업의 시각이미지를 표출하는 중요한 역할을 합니다.<br> 북앤드의 컬러 시스템은 3가지 메인 컬러와 2가지의 서브 컬러로 구성되며, <br>
                    인쇄매체에는 CMYK 규정을, 디지털 매체에는 RGB 규정을 사용하며 별색 적용이 필요한 매체에는 Pantone 규정을 사용하여 제작하여야 합니다.
		        </p>
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