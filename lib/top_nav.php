<?
    if(!$useremail){
        ?>
        <li class="top_menu" id="logged_out">
            <ul>
                <li class="first">
                    <a href="#account" title="로그인/회원가입 팝업" class="account"></a>
                    <form name="account" method="post" action="../tnav/log_in.php">
                        <fieldset>
                            <legend>LOG IN</legend>
                            <input type="email" name="user_email" id="user_email" placeholder="이메일">
                            <label for="user_email">아이디</label>
                            <input type="password" name="user_password" id="user_password" placeholder="비밀번호">
                            <label for="user_password">비밀번호</label>
                            <div class="login_option">
                                <label for="auto_login" class="check_box">
                                    <input type="checkbox" id="auto_login" name="auto_login" value="0">
                                    <i></i>
                                    <span class="text">자동 로그인</span>
                                </label>
                                <a href="#findid" class="find_id">아이디 / 비밀번호 찾기</a>
                            </div>
                            <button type="submit">LOG IN</button>
                            <a href="/tnav/join.php" class="join">JOIN US</a>
                        </fieldset>
                    </form>
                </li>
                <li>
                    <a href="#sitemap" class="sitemap_icon" title="사이트맵 바로가기"></a>
                </li>
            </ul> 
        </li>
        <?
    }else{
        ?>
                                         
             <li class="top_menu" id="logged_in">
                  <ul>
                   <li class="first">
                       <a href="/tnav/mypage.php" title="마이페이지 바로가기" class="mypage">MY</a>
                       <a href="/tnav/log_out.php" title="로그아웃" class="logout">LOGOUT</a>

                   </li>
                   <li>
                       <a href="#sitemap" class="sitemap_icon" title="사이트맵 바로가기"></a>
                   </li>
               </ul>
            </li>
        <?
    }
?>
              