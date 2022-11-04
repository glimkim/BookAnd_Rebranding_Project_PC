<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>1:1 문의 | BookAnd</title>
        
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
        <script src="../js/publishing.js"></script>
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
		        <li>
		            <a href="submission.php">기획/원고 모집</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="prize.php">공모전</a>
		            <span></span>
		        </li>
		        <li class="addclass">
		            <a href="consulting.php">1:1 문의</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>1:1 문의</h3>
		</div>
		<div id="sub_contents" class="consulting">
		    <p>출판과 관련된 고민을 접수하실 수 있는 공간입니다.</p>
		    <div class="consulting_form">
            <?
                include "../lib/dbconn.php";
            
               if($useremail){
                    $sql = "SELECT * FROM members WHERE email='$useremail'";
                    $result = mysqli_query($connect, $sql);

                    $row = mysqli_fetch_assoc($result);

                    $userphone = $row['phone'];
               }
                
                mysqli_close($connect);
            ?>
		        <ul>
		            <li>
		                <span></span>
		                <h5>기본정보 입력</h5>
		                <form action="#basic">
		                    <div class="align">
		                        <label for="email">이메일 주소<span>*</span></label>
		                        <?
                                    if($useremail){
                                        echo "<input type='email' id='email' name='email' value='$useremail'>";
                                    }else{
                                        echo '<input type="email" id="email" name="email">';
                                    }
                                ?>
		                    </div>
		                    <div class="align">
                                <label for="phone">전화번호<span>*</span></label>
                                <?
                                    if($useremail){
                                        echo "<input type='text' id='phone' name='phone' value='$userphone'>";
                                    }else{
                                        echo '<input type="text" id="phone" name="phone">';
                                    }
                                ?>
                            </div>
		                </form>
		            </li>
		            <li>
		                <span></span>
                        <h5>상세내용 입력</h5>
                        <form action="#">
                            <div class="align">
                                <label for="subject">제목<span>*</span></label>
                                <input type="text" id="subject" name="subject">
                            </div>
                            <div class="align">
                                <label for="inquiry">문의 내용<span>*</span></label>
                                <textarea id="inquiry" name="content"></textarea>
                            </div>
                        </form>
		            </li>
		        </ul>
		       <a href="#" id="consulting_submit">문의 접수</a>
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