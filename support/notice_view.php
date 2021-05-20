<?
    include "../lib/session.php";

    //DB
    include "../lib/dbconn.php";
    
    $num = $_GET['num']; 
    $table = $_GET['table']; 
    $page = $_GET['page'];

    $sql = "SELECT * FROM $table WHERE num=$num";
    
    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_assoc($result);

    $item_num = $row['num'];
	$item_email = $row['email'];
	$item_name = $row['name'];

	$image_name[0] = $row['file_name_0'];
	$image_name[1] = $row['file_name_1'];

	$image_copied[0] = $row['file_copied_0'];
	$image_copied[1] = $row['file_copied_1'];

    $item_date = $row['regist_day'];
    $item_date = substr($item_date, 0, 10);
	$item_subject = htmlspecialchars($row['subject']);

	$item_content = htmlspecialchars($row['content']);
	$is_html = $row['is_html'];

    if($is_html!= "y"){
		$item_content = str_replace(" ", "&nbsp;", $item_content);
		$item_content = str_replace("\n", "<br>", $item_content);
	}

    for($i=0; $i<2; $i++){
		if ($image_copied[$i]){
			$imageinfo = GetImageSize("./data/".$image_copied[$i]);

			$image_width[$i] = $imageinfo[0];
			$image_height[$i] = $imageinfo[1];
			$image_type[$i]  = $imageinfo[2];

			if ($image_width[$i] > 785){
				$image_width[$i] = 785;
            }
		}else{
			$image_width[$i] = "";
			$image_height[$i] = "";
			$image_type[$i]  = "";
		}
	}

    mysqli_query($connect, $sql);

    mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>공지사항 | BookAnd</title>
        
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
        <script src="write.js"></script>
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
		        <li class="addclass">
		            <a href="notice.php">공지사항</a>
		            <span></span>
		        </li>
		        <li>
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
		    <h3>공지사항</h3>
		</div>
		<div id="sub_contents" class="support_common">
            <table class="notice_view">
                <caption class="away">게시글 확인</caption>
                <tr class="top">
                    <th>제목</th>
                    <td colspan="3"><?=$item_subject?></td>
                </tr>
                <tr>
                    <th>작성자</th>
                    <td><?=$item_name?></td>
                    <th>작성일</th>
                    <td><?=$item_date?></td>
                </tr>
                <tr>
                    <th>내용</th>
                    <td colspan="3">
                        <?
                            for($i=0; $i<2; $i++){
                                if ($image_copied[$i]){
                                    $img_name = $image_copied[$i];
                                    $img_name = "./data/".$img_name;
                                    $img_width = $image_width[$i];

                                    echo "<img src='$img_name' width='$img_width'>"."<br><br>";
                                }
                            }
                        ?>
                        <?=$item_content?>
                    </td>
                </tr>
            </table>
            <div class="btn_wrap view">
                <?
                    if($useremail == $item_email || $username == "북앤드 관리자" || $userlevel==1 ){
                ?>
                <a href="notice_write.php?table=<?=$table?>&mode=modify&num=<?=$item_num?>&page=<?=$page?>#indicator" class="modify_btn">수정</a>
                <a id="delete_btn" class="delete_btn" href="delete.php?table=<?=$table?>&num=<?=$item_num?>">삭제</a>
                <?
                    }
                ?>
                <a href="notice.php?table=<?=$table?>&page=<?=$page?>#indicator" class="list_btn">목록</a>
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