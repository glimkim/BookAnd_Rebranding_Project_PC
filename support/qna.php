<? include "../lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>Q &amp; A | BookAnd</title>
        
        <link rel="shortcut icon" href="../images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="../images/common/android_icon.png">
        
        <link rel="stylesheet" href="../css/common.css">
        <link rel="stylesheet" href="../css/sub_common.css">
        <link rel="stylesheet" href="../css/support.css">
        
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
		            <h2>SUPPORT</h2>
                    <p>북앤드는 책을 사랑하는 누구에게나 항상 열려있습니다.</p>
		        </div>
                <span></span>
                <img src="../images/sub_common/sub_main_bn06.png" alt="북앤드 서브 메인 이미지06">
		    </div>
		</div>
		<nav id="indicator">
		    <ul>
		        <li>
		            <a href="notice.php">공지사항</a>
		            <span></span>
		        </li>
		        <li class="addclass">
		            <a href="qna.php">Q &amp; A</a>
		            <span></span>
		        </li>
		        <li>
		            <a href="alliance.php">제휴 문의</a>
		            <span></span>
		        </li>
		    </ul>
		</nav>
		<div id="sub_title">
		    <h3>Q &amp; A</h3>
		</div>
		<div id="sub_contents">
		    <p>북앤드를 이용하시면서 궁금한 점들에 대해 문의하실 수 있는 공간입니다.</p>
		    <ul class="cscenter">
		        <li>
                    <span></span>
                    <h5>북앤드 CS Center</h5>
                    <p>
                        주소  |  서울시 마포구 동교로 145 북앤드 Head Office<br>
                        대표번호  |  02-2309-9185	E-mail  |  bookAnd@bookAnd.com    
                    </p>
                </li>
                <li>
                    <span></span>
                    <h5>CS Center 운영 시간</h5>
                    <p>
                        평일 오전 09:00~오후 05:00 (토,일,공휴일 휴무)
                    </p>
                </li>
		    </ul>
		    <div class="qna_table">
                <?
                    include "../lib/dbconn.php";

                    $table = 'qna';

                    $scale = 8; 

                    $mode = $_GET['mode'];

                    $search = $_POST['search']; 
                    $find = $_POST['find']; 


                    if($mode == "search"){ 
                        if(!$search){ 
                            echo "
                                <script>
                                    window.alert('검색어를 입력해 주세요!');
                                    location.href = 'qna.php?table=$table&page=1#indicator';
                                </script>
                            ";
                            exit; 
                        }

                        $sql = "SELECT * FROM $table WHERE $find LIKE '%$search%' ORDER BY num DESC";
                    }else{
                        $sql = "SELECT * FROM $table ORDER BY num DESC";
                    }


                    $result = mysqli_query($connect, $sql);

                    $total_record = mysqli_num_rows($result);

                    if($total_record % $scale == 0){ 
                        $total_page = floor($total_record / $scale);
                    }else{  
                        $total_page = floor($total_record / $scale) + 1;
                    }

                    if(isset($_GET["page"])){ 
                        $page = $_GET["page"]; 
                    }else{
                        $page = 1; 
                    }

                    $start = ($page - 1) * $scale;
                    $number = $total_record - $start;


                ?>
		        <p class="total">총 <b><?=$total_record?></b>건의 게시물</p>
		        <form name="board_form" id="board_from" method="post" action="qna.php?table=<?=$table?>&mode=search#indicator">
                    <select name="find" id="findSelect">
                        <option value="subject">제목</option>
                        <option value="content">내용</option>
                    </select>
                    <label for="findSelect" class="away">검색 기준 선택</label>
                    <input type="text" name="search" id="search_box">
                    <label for="search_box" class="away">검색 상자</label>
                    <button type="submit" name="search_btn" id="search_btn"></button>
                </form>
                <table>
                    <caption class="away">공지사항 목록표</caption>
                    <tr>
                        <th class="number">번호</th>
                        <th class="title">제목</th>
                        <th class="writer">작성자</th>
                        <th class="date">날짜</th>
                    </tr>
                       <?
                        if($total_record == 0){
                            echo "<tr><td colspan='5'>게시글이 없습니다.</td></tr>";
                        }
                    
                        for($i=$start; $i<$start+$scale && $i < $total_record; $i++){
                          
                            mysqli_data_seek($result, $i);

                            $row = mysqli_fetch_assoc($result);

                            $item_num = $row['num'];
                            $item_email = substr($row['email'],0,-4) . "****";
                            $item_name = iconv_substr($row['name'],0, -1, "utf-8") . "*";
                            
                            $item_date = $row['regist_day'];
                            $item_date = substr($item_date, 0, 10);

                            $item_subject = htmlspecialchars($row['subject']);
                    ?>
                    <tr>
                        <td><?= $number ?></td>
                        <td class="align_center"><a href="qna_view.php?table=<?=$table?>&num=<?=$item_num?>&page=<?=$page?>#sub_title"><?=$item_subject?></a></td>
                        <td><?= $item_name ?></td>
                        <td><?= $item_date ?></td>
                    </tr>
                    <?
                        $number--;
                        } 
                    ?>
                </table>
                <div class="page_btn">
                    <div class="btn_wrap">
                        <a href="qna.php#indicator" class="list_btn">목록</a>
                        <? 
                            if($useremail){
                        ?>
                                <a href="qna_write.php?table=<?=$table?>#indicator" class="write_btn">글쓰기</a>
                        <?
                            }
                        ?>
                    </div>
                    <div class="page_num">
                        <?php
                            if($total_page>=2 && $page >= 2){
                                $new_page = $page-1;
                                echo "<a href='qna.php?table=$table&page=$new_page#sub_title' class='prev_page'>←</a>";
                            }
                        ?>

                           <?
                            for($i=1; $i<=$total_page; $i++){
                                if($page == $i){ 
                                    echo "<b> $i </b>";
                                }else{ 
                                    echo "<a href='qna.php?table=$table&page=$i#sub_title' class='num_list'> $i </a>";
                                }
                            }
                        ?>
                        <?
                            if ($total_page>=2 && $page != $total_page){
                                $new_page = $page+1;
                                echo "<a href='qna.php?table=$table&page=$new_page#sub_title' class='next_page'>→</a>";
                            }
                        ?>
                    </div>
                </div>
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
                        <li><a href="./notice.php?table=notice&mode=recruit#indicator">채용안내</a></li>
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