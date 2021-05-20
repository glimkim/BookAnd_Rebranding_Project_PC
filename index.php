<? include "./lib/session.php" ?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <title>BookAnd</title>
        
        <link rel="shortcut icon" href="images/common/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/common/ios_icon.png">
        <link rel="icon" sizes="192x192" href="images/common/android_icon.png">
        
        <link rel="stylesheet" href="css/swiper.min.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/main.css">
        
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="js/common.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
       <div class="popup">
           <div class="popup_top">
               <div class="wrap">
                   <div class="text_area01">
                       <h3>IMPORTANT!</h3>
                       <p class="text01">
                       <b>본</b> 사이트는 상업적 목적이 아닌 <b>개인 포트폴리오 용도</b>로 만들어졌습니다.<br>
                       홈페이지의 일부 내용과 이미지 등은 그 <span>출처가 따로 있음</span>을 밝힙니다.<br>
                       본 사이트는 html5와 CSS3를 기준으로 하여<br>
                       크롬, 사파리, 오페라, 파이어폭스, IE10이상의 브라우저에 맞춘 홈페이지입니다.
                       </p>
                       </div>
                       <div class="text_area02">
                           <img src="images/main/popup_qrcode.png" alt="QR코드 이미지">
                           <p class="text02">
                           왼쪽의 QR코드를 스캔하거나<br>
                           아래 버튼을 누르면<br>
                           <span>모바일페이지</span>로 이동합니다.
                           </p>
                           <a href="http://mbookand.dothome.co.kr" target="_blank">모바일 페이지로 이동 →</a>
                       </div>
               </div>
           </div>
           <div class="popup_bottom">
               <div class="wrap">
                  <label for="not_today" class="check_box">
                      <input type="checkbox" id="not_today">
                      <i></i>
                      <span class="text">오늘 하루 보지 않기</span>
                  </label>
                   <a href="#close" class="close_btn">CLOSE X</a>
               </div>
           </div>
       </div>
       <div class="form_bg"></div>
       <? include "./lib/sitemap.php" ?>
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
                        <? include "./lib/top_nav.php" ?>
                    </ul>
                </div>
            </div>
            <div class="h_bottom">
                <div class="wrap">
                    <h1>
                        <a href="index.php" title="메인 페이지 바로가기">
                            <img src="images/common/header_logo.svg" alt="로고 이미지">
                        </a>
                    </h1>
                    <? include "./lib/gnb.php" ?>
                </div>
            </div>
        </header>
        <div id="main_slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide01">
                        <div class="text_box">
                            <img src="images/common/header_logo.svg" alt="북앤드 로고 이미지">
                            <p class="text01">Follow Your Dream</p>
                            <p class="text02">
                                특별한 이야기의 시작을<br>
                                북앤드와 함께하세요
                            </p>
                            <p class="text03">
                                당신에게 날개가 되어줄<br>
                                여기는 BookAnd
                            </p>
                        </div>
                        <div class="ball_box">
                            <span class="ball01"></span>
                            <span class="ball02"></span>
                            <span class="ball03"></span>
                            <span class="ball04"></span>
                            <span class="ball05"></span>
                            <span class="ball06"></span>
                            <span class="ball07"></span>
                        </div>
                    </div>
                    <div class="swiper-slide slide02">
                        <div class="text_box">
                            <p class="text01">북앤드 제 11기</p>
                            <h3>신인 문학상 공모전</h3>   
                            <p class="text02">
                                북앤드와 함께 할<br>
                                신인 작가님을 찾습니다!
                            </p>
                            <p class="text03">
                                응모기간 : 2021년 2월 27일 - 2021년 5월 2일<br>
                                당선자 발표 : 2021년 06월 6일
                            </p>
                            <a href="publishing/prize.php">VIEW NOW →</a>
                            <span class="img_text01">LET</span>
                            <span class="img_text02">US</span>
                            <span class="img_text03">FLY</span>
                        </div>
                    </div>
                    <div class="swiper-slide slide03">
                        <div class="text_box">
                            <p class="text01">we're  celebrating</p>
                            <h3>WORLD BOOK DAY</h3>
                            <p class="text02">APRIL 23</p>
                            <p class="text03">
                                책을 쓰는, 책을 읽는 모든 이들이<br>
                                행복한 그날까지, <span>BookAnd</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="search">
                <div class="wrap">
                    <input type="text" id="seacrh_box" placeholder="검색어를 입력하세요.">
                    <label for="seacrh_box">검색창</label>
                    <button type="submit"></button>
                </div>
            </div>
        </div>
        <div id="best_sellers">
           <div class="wrap">
                <a href="books/bestsellers.php" class="title">
                    <h2>BESTSELLERS</h2>
                    <p>view more</p>
                </a>
                <div class="slider_wrap">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                       <figure>
                                        <img src="images/main/bestsellers_bn01.jpg" alt="시선으로부터 책 표지 이미지">
                                        <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                            시선으로부터<br>
                                            저자 정세랑
                                        </h4>
                                        <p>"살아남은 모든 여성에게 존경과 사랑을"</p>
                                   </a>
                                </div>
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                        <figure>
                                            <img src="images/main/bestsellers_bn02.jpg" alt="가장 예쁜 생각을 너에게 주고 싶다 책 표지 이미지">
                                            <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                            가장 예쁜 생각을 너에게 주고 싶다<br>
                                            저자 나태주
                                        </h4>
                                        <p>"또 다시 밤하늘의 별이 되어"</p>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                        <figure>
                                            <img src="images/main/bestsellers_bn03.jpg" alt="부지런한 사랑 책 표지 이미지">
                                            <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                        부지런한 사랑<br>
                                        저자 이슬아
                                        </h4>
                                        <p>"이슬아, 부지런하게 쓰고 사랑하는 마음"</p>
                                   </a>
                                </div>
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                        <figure>
                                            <img src="images/main/bestsellers_bn04.jpg" alt="체리에이드 전쟁 책 표지 이미지">
                                            <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                        체리에이드 전쟁<br>
                                        저자 김지원 
                                        </h4>
                                        <p>"서로의 소리 속 따듯한 시간들"</p>
                                   </a>
                                </div>
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                        <figure>
                                            <img src="images/main/bestsellers_bn05.jpg" alt="마음 챙김의 시 책 표지 이미지">
                                            <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                        마음 챙김의 시<br>
                                        저자 류시화
                                        </h4>
                                        <p>"꽃피어야만하는 것은 꽃핀다 "</p>
                                   </a>
                                </div>
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                        <figure>
                                            <img src="images/main/bestsellers_bn06.jpg" alt="빨강머리 앤이 하는 말 책 표지 이미지">
                                            <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                        빨강머리 앤이 하는 말<br>
                                        저자 백영옥 
                                        </h4>
                                        <p>"아직 너무 늦지 않았을 우리에게"</p>
                                   </a>
                                </div>
                                <div class="swiper-slide">
                                   <a href="books/bestsellers.php" title="베스트셀러 바로가기">
                                        <figure>
                                            <img src="images/main/bestsellers_bn07.jpg" alt="매우 예민한 사람들을 위한 책 표지 이미지">
                                            <figcaption></figcaption>
                                        </figure>
                                        <h4>
                                        매우 예민한 사람들을 위한 책<br>
                                        저자 전홍진
                                        </h4>
                                        <p>"나의 예민함을 이해하기"</p>
                                   </a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div id="book_of_month">
            <div class="title_wrap">
                <span class="line01"></span>
                <a href="books/bookofmonth.php" class="title">
                    <h2>BOOK OF MONTH</h2>
                    <p>view more</p>
                </a>
                <span class="line02"></span>
            </div>
            <div class="content_wrap">
                <div class="m_book01">
                    <a href="books/bookofmonth.php" title="이달의 책 바로가기">
                        <figure>
                            <img src="images/main/book_of_month_bn01.jpg" alt="인생은 소설이다 책 이미지">
                            <figcaption></figcaption>
                        </figure>
                        <span>VIEW</span>
                    </a>
                    <div class="text_box">
                        <a href="books/bookofmonth.php" title="이달의 책 바로가기">
                            <h3>
                               인생은 소설이다
                               <span>&nbsp; 저자 기욤 뮈소</span>
                            </h3>
                            <p class="genre">프랑스 문학</p>
                            <p class="summary">"기욤 뮈소, 작가와 소설에 바치는 오마주"</p>
                            <p class="contents">
                                플로라 콘웨이는 현재 세 권의 소설을 발표한 작가지만 데뷔작을 필두로 나머지 두 작품 역시 공전의 히트를 기록하는 한편 최고 권위의 프란츠 카프카 상을 수상해 국제적인 명성을 획득한다. 플로라 콘웨이의 얼굴을 직접 본 사람은 없다. 데뷔 이래 줄곧 언론 노출을 꺼려왔고, 대학교나 서점 등에서 자주 강연 요청을 받았지만 단 한 번도 받아들인 적이 없다. 책표지에 사용하고 있는 젊은 시절 사진 한 장만이 유일하게 플로라의 존재를 증명해줄 뿐이다...
                            </p>
                        </a>
                        <ul class="like_share">
                            <li><a href="#go_share" class="share"></a></li>
                            <li><a href="#go_like" class="like"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="m_book02">
                    <a href="books/bookofmonth.php" title="이달의 책 바로가기">
                       <figure>
                            <img src="images/main/book_of_month_bn02.jpg" alt="어린이라는 세계">
                            <figcaption></figcaption>
                        </figure>
                        <span>VIEW</span>
                    </a>
                    <div class="text_box">
                        <a href="books/bookofmonth.php" title="이달의 책 바로가기">
                            <h3>
                               어린이라는 세계
                               <span>&nbsp; 저자 김소영</span>
                            </h3>
                            <p class="genre">한국 에세이</p>
                            <p class="summary">"어린이에 대해 생각할수록 우리의 세계는 넓어진다"</p>
                            <p class="contents">
                                어린이에 대해 생각할수록 우리의 세계는 넓어진다. 어린이는 잘 보이지 않는다. 몸이 작아서이기도 하고, 목소리가 작아서이기도 하다. 양육이나 교육, 돌봄을 맡고 있는 사람이 아니라면 우리 곁에 어린이가 ‘있다’는 사실을 의식하지 못한 채 살아가기 쉽다. 10년 남짓 어린이책 편집자로 일했고, 지금은 독서교실에서 어린이들과 책을 읽는 김소영은 어린이의 존재를 더 잘 보이게 하기 위해 부지런히 글을 쓰고 목소리를 내 왔다...
                            </p>
                        </a>
                        <ul class="like_share">
                            <li><a href="#go_share" class="share"></a></li>
                            <li><a href="#go_like" class="like"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="m_book03">
                    <a href="books/bookofmonth.php" title="이달의 책 바로가기">
                       <figure>
                            <img src="images/main/book_of_month_bn03.jpg" alt="방구석 미술관">
                            <figcaption></figcaption>
                        </figure>
                        <span>VIEW</span>
                    </a>
                    <div class="text_box">
                        <a href="books/bookofmonth.php" title="이달의 책 바로가기">
                            <h3>
                               방구석 미술관
                               <span>저자 조원재</span>
                            </h3>
                            <p class="genre">미술</p>
                            <p class="summary">"오르세 미술관으로의 초대"</p>
                            <p class="contents">
                                2018년 출간된 이래 미술은 고상하고 우아한 사람들의 전유물이라 여겨왔던 대중들에게 큰 사랑을 받으며, 새로운 미술 교양의 지평을 열었다. 예술 분야의 베스트셀러로 꾸준히 사랑받아 온 &lt;방구석 미술관&gt;이 2년 만에 10만 부 판매 기록을 돌파했다. 이를 기념하기 위해 특별판으로 출간한 이번 책은 ‘프라이빗 미술관 에디션’으로, 프랑스 파리의 3대 미술관 중 하나인 오르세 미술관을 나만의 방에서 편하게 즐길 수 있도록 초대한다.
                            </p>
                        </a>
                        <ul class="like_share">
                            <li><a href="#go_share" class="share"></a></li>
                            <li><a href="#go_like" class="like"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="for_writers">
            <div class="authors">
                <a href="authors/interview.php#sub_contents" title="저자 인터뷰 바로가기" class="title">
                    <h2>Author Interview</h2>
                    <p>view more</p>
                </a>
                <a href="authors/interview.php#sub_title" class="contents_wrap" title="저자 인터뷰 바로가기">
                    <div class="author_img"></div>
                    <div class="text_box">
                        <h3>≪북극 소년≫</h3>
                        <h4>김지원 작가 인터뷰</h4>
                        <p class="summary">
                            “흐리지 않은 날이 없고 암울한 기운이 가득하여 저주받은 듯해 보이는 마을, 루델라오에서의 단 한 가지 축복은 마을 사람 모두의 아름다운 목소리였다.”
                        </p>
                        <p class="question">
                           Q. 독자들에게 책을 소개한다면?
                        </p>
                        <p class="answer">      
                            “이건 단지 사라지는 목소리와 춤을 추는 신비한 은발의 소년에 관한 이야기예요 (웃음)”
                        </p>
                        <p class="author_name">
                            김지원  <span>|</span>  한국판타지/환상문학
                        </p>
                    </div>
                </a>
            </div>
            <div class="publishing">
                <a href="publishing/submission.php" title="기획/원고모집 바로가기" class="title">
                    <h2>Publishing</h2>
                    <p>view more</p>
                </a>
                <ul>
                    <li>
                        <a href="publishing/submission.php">
                            <figure>
                                <img src="images/main/publishing_bn01.jpg" alt="기획/원고 모집 이미지">
                                <span></span>
                                <figcaption>기획/원고 모집</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="publishing/prize.php">
                            <figure>
                                <img src="images/main/publishing_bn02.jpg" alt="공모전 이미지">
                                <span></span>
                                <figcaption>공모전</figcaption>
                            </figure>
                        </a>
                    </li>
                    <li>
                        <a href="publishing/consulting.php">
                            <figure>
                                <img src="images/main/publishing_bn03.jpg" alt="1:1문의 이미지">
                                <span></span>
                                <figcaption>1:1 문의</figcaption>
                            </figure>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="event">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide01">
                       <a href="community/event.php" title="이벤트 페이지 바로가기">
                           <h4>
                            <span class="font">BookAnd</span><span>&nbsp;구독</span>하고<br>
                            최신 소식 제일 먼저 받자!
                            </h4>
                            <p class="text01">Keep Yourself Updated!</p>
                            <p class="text02">SUBSBRIBE NOW!</p>
                       </a>
                    </div>
                    <div class="swiper-slide slide02">
                       <a href="community/event.php" title="이벤트 페이지 바로가기">
                            <p class="text01">BookAnd 북콘서트</p>
                            <h4>한 사람을 여행하는 북토크</h4>
                            <p class="text02">파울로 코엘료 X LIM KIM</p>
                        </a>
                    </div>
                    <div class="swiper-slide slide03">
                       <a href="community/event.php" title="이벤트 페이지 바로가기">
                            <p class="text_top">북앤드 제 1기</p>
                            <h4>창작 동화 공모전</h4>
                            <p class="text01">누구나 마음 속에 동화 하나쯤은 품고 살잖아요?</p>
                            <p class="text02">응모 기간 : 2021. 03. 04 - 2021. 04. 28</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div id="new_books">
            <div class="wrap">
                <div class="title_wrap">
                    <a href="books/newbooks.php" class="title">
                        <h2>new books</h2>
                        <p>view more</p>
                    </a>
                </div>
                <div class="slider_wrap01">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h3>문구는 옳다</h3>
                                <p class="text01">“즐거운 나의 문방구로 초대합니다”</p>
                                <p class="text02">
                                    다이어리를 예쁘게 꾸미는 ‘다꾸’가 유행이고, 빈티지 연필을 전문적으로 판매하는 편집숍이 생겼다. 서점에는 펜과 다양한 용품을 파는 문구 코너가 늘 북적인다. 
                                    ‘문구의 전성시대’가 도래한 것이다. ‘글 쓰고 사진 찍는’이라고 박힌 명함을 사용하는 작가 정윤희. 방송작가, 얼리어답터 그리고 카리스마 넘치는 포토그래퍼이자 여행작가로 알려진 그녀. 하지만 진짜 그녀를 잘 아는 사람들은 한결같이 한 단어로 그녀를 정의한다. ‘프로문구러’.
                                </p>
                                <h4>저자 정윤희 <span>|</span> 에세이</h4>
                            </div>
                            <div class="swiper-slide">
                                <h3>치유하는 인간</h3>
                                <p class="text01">
                                “타인도 나 자신도 위로할 줄 모르는 당신에게”
                                </p>
                                <p class="text02">
                                “우리는 치유하는 인간(Homo Sanans)으로 태어났다” 치유와 회복은 외부로부터 오는 것이 아니다. 우리 안에 이미 치유할 수 있는 힘이 내재되어 있다. 그 소중한 능력을 스스로 알고 발현하면 나 자신도, 타인도 위로할 수 있을 뿐 아니라, 온전한 회복을 이룰 수 있다. 회복은 곧 한 단계 고양된 영혼의 성숙을 의미한다. 이 책은 우리 안에 내재된 그와 같은 능력을 개발하고 또 그것을 어떻게 삶에서 구현할 수 있는지 구체적인 방법을 제시한다.
                                </p>
                                <h4>저자 권수영 <span>|</span> 교양 심리학</h4>
                            </div>
                            <div class="swiper-slide">
                                <h3>모두의 떡볶이</h3>
                                <p class="text01">“떡볶이 마니아 홍신애의 파란만잔 떡볶이 인생사!”</p>
                                <p class="text02">
                                모두의 레시피 다섯 번째 편은 '떡볶이'다. 8권 이상 요리책을 발행하고 수요미식회를 통해 대중들과 맛깔난 요리 이야기로 소통을 해온 저자가 어린 시절 집 앞 떡볶이의 비법을 끈질기게 연구하고 미국 체류 시절 떡이 없어 직접 떡볶이떡을 만들어 먹기까지하며 지금껏 떡볶이에 대한 사랑을 아낌없이 쏟아냈다. 또한 저자의 맛깔 난 떡볶이 예찬론뿐만 아니라 눈물 콧물 없이는 들을 수 없는 재미난 떡볶이 인생사도 펼쳐진다.
                                </p>
                                <h4>저자 홍신애 <span>|</span> 가정/요리/뷰티</h4>
                            </div>
                            <div class="swiper-slide">
                                <h3>맥주탐구생활</h3>
                                <p class="text01">“맥주 스타일을 알면 선택이 달라진다”</p>
                                <p class="text02">
                                    일러스트와 인포그래픽으로 재미있게 소개하는 맥주 가이드북. 순수하게 맥주를 마시고, 즐기는 이들을 위한 내용으로 채워져 있다. 어떤 효모가 어떤 맛이 나고, 맥주를 어떤 재료로 어떻게 배합해서 만들었는지 등 듣기만 해도 어렵다고 느껴지는 정보들은 과감하게 생략했다. 대신 맥주의 향, 맛, 색, 기원 등을 바탕으로 한 맥주 스타일이 친절하게 소개되어 있다. 여기에 일러스트와 인포그래픽을 활용해 보는 재미까지 더했다.
                                </p>
                                <h4>저자 김호 <span>|</span> 가정/요리/뷰티</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider_wrap02">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="books/newbooks.php" title="신간도서 바로가기">
                                    <img src="images/main/newbooks_bn01.jpg" alt="문구는 옳다 책 표지 이미지">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="books/newbooks.php" title="신간도서 바로가기">
                                    <img src="images/main/newbooks_bn02.jpg" alt="치유하는 인간 책 표지 이미지">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="books/newbooks.php" title="신간도서 바로가기">
                                    <img src="images/main/newbooks_bn03.jpg" alt="모두의 떡볶이 책 표지 이미지">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="books/newbooks.php" title="신간도서 바로가기">
                                    <img src="images/main/newbooks_bn04.jpg" alt="맥주탐구생활 책 표지 이미지">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div class="new_books_bg"></div>
        </div>
        <div id="podcast">
            <div class="wrap">
                <div class="contents_wrap">
                    <div class="title_wrap">
                        <a href="community/podcast.php" class="title">
                            <h2>podcast</h2>
                            <p>view more</p>
                        </a>
                    </div>
                    <div class="slider_wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <iframe class="video01" title="책읽는 다락방 J, 헤세의 인생 공부" src="https://www.youtube.com/embed/XNqQOUKzn5Y?start=0&enablejsapi=1"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <button class="play01 btn"></button>
                                    <div class="text_box">
                                        <h3>책읽는 다락방 J</h3>
                                        <p class="text01">≪헤세의 인생공부≫</p>
                                        <p class="text02">고통의 한가운데를 통과하라..
                                        지금 당신이 너무 괴로워 그로부터 한시라도 빨리 벗어나고 싶다면 고통의 한가운데를 당당하게 통과하라.
                                        </p>
                                        <p class="text03">#책읽어주는라디오#헤세의인생공부</p>
                                        <a href="community/podcast.php">지금 보러 가기</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <iframe class="video02" title="책읽는 다락방 J, 유목의 전설" src="https://www.youtube.com/embed/Eqi3L6Kt7ng?start=0&enablejsapi=1"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <button class="play02 btn"></button>
                                <div class="text_box">
                                    <h3>책읽는 다락방 J</h3>
                                        <p class="text01">≪유목의 전설≫</p>
                                        <p class="text02">오늘은 비가 적은 몽골에서 물과 비는 어떤 의미인지, 유목민들은 사막을 왜 모래강이라 했는지, 그리고 낙타는 왜 사막에 살고 그 눈은 왜 늘 젖어 있는지, 작가의 이야기 보따리를 풀어보겠습니다.</p>
                                        <p class="text03">#책읽어주는라디오#오디오북#유목의전설</p>
                                        <a href="community/podcast.php">지금 보러 가기</a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <iframe class="video03" title="책 읽는 다락방 J, 빨강머리 앤이 하는 말" src="https://www.youtube.com/embed/15Y3kgbQrdU?start=0&enablejsapi=1"  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <button class="play03 btn"></button>
                                <div class="text_box">
                                    <h3>책읽는 다락방 J</h3>
                                        <p class="text01">≪빨강머리 앤이 하는 말≫</p>
                                        <p class="text02">캐나다 프린스 에드워드 섬 초록지붕 집의 꿈 많은 수다쟁이 소녀, 앤 셜리, '빨강머리 앤'이 소설가 백영옥과 함께 돌아왔다. </p>
                                        <p class="text03">#빨강머리앤이하는말#책읽어주는라디오</p>
                                        <a href="community/podcast.php">지금 보러 가기</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
        <div id="notice">
            <h3>notice</h3>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                   <?
                    include "./lib/dbconn.php";

                    $table = 'notice'; 

                    $sql = "SELECT * FROM $table ORDER BY num DESC";

                    $result = mysqli_query($connect, $sql);

                    $total_record = mysqli_num_rows($result);

                    $end = $total_record;
                    $start = $total_record - 6;
                    for($i=$start;$i < $total_record; $i++){
                      
                        mysqli_data_seek($result, $i);

                        $row = mysqli_fetch_assoc($result);
                        $item_date = $row['regist_day'];
                        $item_date = substr($item_date, 0, 10);
                        $item_num = $row['num'];

                        $item_subject = str_replace(" ", "&nbsp;", $row['subject']);
                        $item_content = $row['content'];
                    ?>
                    <div class="swiper-slide">
                        <a href="support/notice_view.php?table=notice&num=<?=$item_num?>#sub_title">
                            <h4><?=$item_subject?></h4>
                            <p><?=$item_content?></p>
                            <span class="date"><?= $item_date ?></span>
                        </a>
                    </div>
                    <?
                        } 
                    ?>
                </div>
            </div>
            <a href="support/notice.php" class="more_btn" title="공지사항 바로가기"></a>
        </div>
        <div id="subscribe">
            <div class="wrap">
                <h2>Subscribe</h2>
                <p>bookAnd의 이벤트, 이야기 그리고 최신 소식을 가장 먼저 받아보세요!</p>
                <input type="text" id="subscribe_box" placeholder="이메일 주소를 입력하세요.">
                <label for="subscribe_box">구독 할 이메일 주소 입력</label>
                <button type="submit" name="subscribe">구독하기</button>
            </div>
        </div>
        <footer>
            <h1>
                <img src="images/common/footer_logo.svg" alt="로고 이미지">
            </h1>
            <div class="f_nav">
                <ul>
                    <li><a href="#personalinfo">개인정보처리방침</a></li>
                    <li><a href="#terms">이용약관</a></li>
                    <li><a href="support/notice.php?table=notice&mode=recruit#indicator">채용안내</a></li>
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
        <aside class="scroll_top">
            <a href="#" title="페이지 상단으로 이동"></a>
        </aside>
    </body>
</html>