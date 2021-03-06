<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/index.js"></script>
  <script type="text/javascript" src="js/jquery.bxslider.js"></script>
  <title>McDonald's</title>
</head>

<body>
  <header id="header" class="header">
    <div class="header_wrap">
      <h1 class="logo"><a href="index.html">McDonald's</a></h1>
      <nav class="gnb">
        <h2 class="hide">주요메뉴</h2>
        <ul>
          <li class="menu1"><a href="burger.html">MENU</a>
            <ul class="menu_sub">
              <li><a href="burger.html">버거</a></li>
              <li><a href="#">맥런치</a></li>
              <li><a href="#">맥모닝</a></li>
              <li><a href="#">해피스낵</a></li>
              <li><a href="#">사이드&디저트</a></li>
              <li><a href="#">맥카페&음료</a></li>
              <li><a href="#">해피밀</a></li>
            </ul>
          </li>

          <li class="menu2"><a href="store.html">STORE</a>
            <ul class="menu_sub">
              <li><a href="store.html">매장찾기</a></li>
              <li><a href="#">맥딜리버리</a></li>
              <li><a href="#">맥드라이브</a></li>
              <li><a href="#">임차문의</a></li>
            </ul>
          </li>

          <li class="menu3"><a href="promotion.html">WHAT'S NEW</a>
            <ul class="menu_sub">
              <li><a href="promotion.html">프로모션</a></li>
              <li><a href="#">새로운 소식</a></li>
              <li><a href="#">이달의 해피밀</a></li>
            </ul>
          </li>

          <li class="menu4"><a href="#">STORY</a>
            <ul class="menu_sub">
              <li><a href="#">브랜드 소개</a></li>
              <li><a href="#">사회적 책임</a></li>
              <li><a href="#">경쟁력&사람들</a></li>
            </ul>
          </li>

          <li class="menu5">
            <a href="#" class="more">+</a>
            <ul class="menu_sub">
              <li><a href="login.html">로그인</a></li>
              <li><a href="join.html">회원가입</a></li>
              <li><a href="#">ENG</a></li>
            </ul>
          </li>

        </ul>
      </nav>
    </div>
    <div class="nav_bg"></div>

  </header>

  <main class="content">
    <section class="nb">
      <section class="nb_menu">
        <h2 class="hide">선택된 메뉴</h2>
        <img src="./images/burger_1_big.png" alt="창녕 갈릭 버거" id="nb_main">
        <div class="nb_menu_detail" id="nb_detail">
          <div class="nb_menu_1">
            <p class="nb_name">창녕 갈릭 버거</p>
            <p class="nb_name_eng">Changnyeong Garlic Burger</p>
            <p class="nb_exp">100% 국내산 창녕 햇마늘로 만든 토핑과 마늘 아이올리 30g의 풍미가<br>
              육즙을 꽉 가둬낸 순쇠고기 패티 2장과 만나 조화를 이뤄 풍부한 맛</p>
          </div>

          <div class="nb_menu_2">
            <p class="nb_name">트리플 치즈버거</p>
            <p class="nb_name_eng">Triple cheeze Burger</p>
            <p class="nb_exp">부드러운 치즈와 풍부한 육즙의 패티를<br>
              세배 더 진하게 즐길 수 있는 트리플 치즈버거</p>
          </div>

          <div class="nb_menu_3">
            <p class="nb_name">빅맥®</p>
            <p class="nb_name_eng">Big Mac®</p>
            <p class="nb_exp">100% 순 쇠고기 패티 두 장에 빅맥®만의 특별한 소스.<br>
              입안에서 살살 녹는 치즈와 신선한 양상추, 양파, 그리고 피클까지.<br>
              50년 넘게 전 세계인의 입맛을 사로 잡은 버거의 대명사.</p>
          </div>

          <div class="nb_menu_4">
            <p class="nb_name">맥스파이시® 상하이 버거</p>
            <p class="nb_name_eng">McSpicy® Shanghai Burger</p>
            <p class="nb_exp">매콤한 시즈닝을 입힌 100% 닭가슴 통살 위에 아삭아삭한 양상추와 <br>
              신선한 토마토~ 겉은 바삭, 속은 부드러운 치킨 패티의 매콤함으로<br>
              입맛도 기분도 화끈하게!</p>
          </div>

          <div class="nb_menu_5">
            <p class="nb_name">1955® 버거</p>
            <p class="nb_name_eng">1955® Burger</p>
            <p class="nb_exp">113g 두툼한 순 쇠고기 패티,
              특별한 1955 소스에 깊은 풍미의 그릴드 어니언까지!<br>
              맥도날드가 처음 생긴 1955년의 맛을 담은 영원한 오리지널 1955 버거</p>
          </div>

          <div class="nb_menu_6">
            <p class="nb_name">스파이시 맥앤치즈 버거</p>
            <p class="nb_name_eng">Spicy Mac & Cheese Burger
            </p>
            <p class="nb_exp">체다 치즈 & 그라나파다노 치즈와 매콤한 카이엔페퍼가 들어간 맥앤치즈<br>
              스파이시한 치킨 패티, 탱글한 마카로니의 완벽한 식감까지<br>
              느끼하지 않고 매콤하면서도 진한 맛</p>
          </div>

          <div class="nb_menu_7">
            <p class="nb_name">슈니언 버거</p>
            <p class="nb_name_eng">Shrimp Onion Burger</p>
            <p class="nb_exp">탱~글한 통새우살과 바삭한 어니언의 조화!<br>
              슈니언 버거</p>
          </div>

          <div class="nb_menu_8">
            <p class="nb_name">더블 불고기 버거</p>
            <p class="nb_name_eng">Double Bulgogi Burger</p>
            <p class="nb_exp">진한 불고기 소스의 패티가 두 장! 여기에 고소한 치즈와 마요네즈,<br>
              신선한 양상추를 곁들인 깊고 풍부한 맛.</p>
          </div>

          <div class="nb_menu_9">
            <p class="nb_name">슈슈 버거</p>
            <p class="nb_name_eng">Supreme Shrimp Burger</p>
            <p class="nb_exp">탱~글한 통새우살 가득~ 슈슈 버거!</p>
          </div>

          <div class="nb_menu_10">
            <p class="nb_name">슈비 버거</p>
            <p class="nb_name_eng">Shrimp Beef Burger</p>
            <p class="nb_exp">탱~글한 통새우살에 비프 패티를 더해 푸짐하게~<br>
              슈비 버거</p>
          </div>

          <a href="menu_detail.html" class="sel_view">자세히 보기</a>

        </div>

      </section>

      <section class="nb_list_wrap">
        <h2>NEW&BEST</h2>
        <section class="nb_list">
          <div class="nl_1">
            <ul class="burger_list">
              <li class="burger1" onclick="changeImage('./images/burger_1_big.png')">
                <a href="#">
                  <img src="./images/burger_1.png" alt="창녕 갈릭 버거">
                  <br>창녕 갈릭 버거
                </a>
              </li>
              <li class="burger2" onclick="changeImage('./images/burger_2_big.png')">
                <a href="#">
                  <img src="./images/burger_2.png" alt="트리플 치즈버거">
                  <br>트리플 치즈버거
                </a>
              </li>
              <li class="burger3" onclick="changeImage('./images/burger_3_big.png')">
                <a href="#">
                  <img src="./images/burger_3.png" alt="빅맥®">
                  <br>빅맥®
                </a>
              </li>
              <li class="burger4" onclick="changeImage('./images/burger_4_big.png')">
                <a href="#">
                  <img src="./images/burger_4.png" alt="맥스파이시® 상하이 버거">
                  <br>맥스파이시® 상하이 버거
                </a>
              </li>
              <li class="burger5" onclick="changeImage('./images/burger_5_big.png')">
                <a href="#" class="burger_name">
                  <img src="./images/burger_5.png" alt="1955 버거">
                  <br>1955 버거
                </a>
              </li>
            </ul>
          </div>

          <div class="nl_2">
            <ul class="burger_list">
              <li class="burger6" onclick="changeImage('./images/burger_6_big.png')">
                <a href="#">
                  <img src="./images/burger_6.png" alt="스파이시 맥앤치즈 버거">
                  <br>스파이시 맥앤치즈 버거
                </a>
              </li>
              <li class="burger7" onclick="changeImage('./images/burger_7_big.png')">
                <a href="#">
                  <img src="./images/burger_7.png" alt="슈니언 버거">
                  <br>슈니언 버거
                </a>
              </li>
              <li class="burger8" onclick="changeImage('./images/burger_8_big.png')">
                <a href="#">
                  <img src="./images/burger_8.png" alt="더블 불고기 버거">
                  <br>더블 불고기 버거
                </a>
              </li>
              <li class="burger9" onclick="changeImage('./images/burger_9_big.png')">
                <a href="#">
                  <img src="./images/burger_9.png" alt="슈슈 버거">
                  <br>슈슈 버거
                </a>
              </li>
              <li class="burger10" onclick="changeImage('./images/burger_10_big.png')">
                <a href="#">
                  <img src="./images/burger_10.png" alt="슈비 버거">
                  <br>슈비 버거
              </li>
            </ul>
          </div>

        </section>
        <div class="nb_btn">
          <a href="#" class="nb_prev">이전</a>
          <a href="#" class="nb_next">다음</a>

        </div>
        <a href="burger.html" class="nb_view">메뉴 더보기</a>

      </section>
    </section>

    <section class="promotion">
      <h2>McDonald's LIVE</h2>

      <p>맥도날드의 신선한 NEW! 프로모션을 만나보세요!</p>

      <div class="prom_scroll">
        <ul>
          <li class="prom_btn"></li>
          <li class="prom_btn"></li>
          <li class="prom_btn"></li>
        </ul>
      </div>
      <div class="prom_list_wrap">
        <div class="prom_list">
          <ul class="pl_1">
            <li class="prom1"><a href="#"><img src="../images/prom1.jpg" alt="더욱 다양해진 맥런치 세트"></a></li>
            <li class="prom2"><a href="#"><img src="../images/prom2.jpg" alt="창녕 갈릭 버거 출시"></a></li>
            <li class="prom3"><a href="#"><img src="../images/prom3.jpg" alt="LCK 한정판 콜라보 굿즈 출시"></a></li>
            <li class="prom4"><a href="#"><img src="../images/prom4.jpg" alt="불고기버거 1900원"></a></li>
            <li class="prom5"><a href="#"><img src="../images/prom5.jpg" alt="트리플 치즈버거 출시"></a></li>
          </ul>
        </div>

        <div class="prom_list">
          <ul class="pl_2">
            <li class="prom6"><a href="#"><img src="../images/prom6.jpg" alt="찐 아메리칸 소울! NEW 스파이시 맥앤치즈 버거"></a></li>
            <li class="prom7"><a href="#"><img src="../images/prom7.png" alt="새로운 해피 스낵, 츄러스 출시"></a></li>
            <li class="prom8"><a href="#"><img src="../images/prom8.png" alt="딸기 칠러가 돌아왔다!"></a></li>
            <li class="prom9"><a href="#"><img src="../images/prom9.png" alt="신선한 맛 가득 담아 필레 오 피쉬 출시!"></a></li>
            <li class="prom10"><a href="#"><img src="../images/prom10.png" alt="갓 구워내 따뜻하고 신선한
                베이컨 토마토 에그 머핀 세트"></a></li>
          </ul>
        </div>

        <div class="prom_list">
          <ul class="pl_3">
            <li class="prom11"><a href="#"><img src="../images/prom11.png" alt="맥도날드 앱에서 만나는
                달콤한 바닐라 라떼 무료 쿠폰!"></a></li>
            <li class="prom12"><a href="#"><img src="../images/prom12.png" alt="창녕 갈릭 버거 출시"></a></li>
            <li class="prom13"><a href="#"><img src="../images/prom13.png" alt="LCK 한정판 콜라보 굿즈 출시"></a></li>
            <li class="prom14"><a href="#"><img src="../images/prom14.png" alt="불고기버거 1900원"></a></li>
            <li class="prom15"><a href="#"><img src="../images/prom15.png" alt="트리플 치즈버거 출시"></a></li>
          </ul>
        </div>

      </div>

    </section>

    <div class="store_wrap">
      <section class="store">
        <h2>STORE</h2>

        <p>원하는 항목을 체크하고 매장을 찾아보세요!</p>
        <div class="store_check">
          <span class="checkbox">
            <input type="checkbox" id="check1" value="맥딜리버리">
            <label for="check1">맥딜리버리</label>
          </span>
          <span class="checkbox">
            <input type="checkbox" id="check2" value="맥드라이브">
            <label for="check2">맥드라이브</label>
          </span>
          <span class="checkbox">
            <input type="checkbox" id="check3" value="24시간">
            <label for="check3">24시간</label>
          </span>
          <span class="checkbox">
            <input type="checkbox" id="check4" value="디카페인">
            <label for="check4">디카페인</label>
          </span>
          <span class="checkbox">
            <input type="checkbox" id="check5" value="맥모닝">
            <label for="check5">맥모닝</label>
          </span>
          <span class="checkbox">
            <input type="checkbox" id="check6" value="주차">
            <label for="check6">주차</label>
          </span>
        </div>

        <div class="store_search">
          <form class="box" name="search" action="" method="POST" onsubmit="return form()">
            <fieldset>
              <legend>검색</legend>
              <label for="store">입력</label>
              <input type="text" name="address" id="address" class="address" placeholder="매장명, 동명, 도로명을 입력하세요.">
              <button type="button" class="search_btn" value="Search" onclick="addr_search()"></button>
              <a href="/map.html" class="map_btn"
                onclick="window.open(this.href,'_blank','width=520px, height=350px,toolbars=no,scrollbars=no'); return false;"></a>
            </fieldset>
          </form>
        </div>

        <p class="store_search_result">검색결과</p>
      </section>
    </div>

    <section class="delivery">
      <h2>McDelivery</h2>

      <p>더 쉽고, 더 빠르게~ 맥도날드를 만나 보세요!</p>
      <div class="delivery_btn">
        <div><a href="https://www.mcdelivery.co.kr/kr/" target="_blank" class="online">
            맥딜리버리 온라인 주문</a></div>
        <div><a href="https://apps.apple.com/kr/app/%EB%A7%A5%EB%94%9C%EB%A6%AC%EB%B2%84%EB%A6%AC/id1027699629"
            target="_blank" class="ios">
            Download on the <strong>App store</strong></a></div>
        <div><a href="https://play.google.com/store/apps/details?id=com.mwos2.mcdelivery&hl=ko" target="_blank"
            class="aos">
            Get in on <strong>Google play</strong></a></div>
      </div>
      <img src="./images/mcdeset.jpg" alt="맥딜리버리 전용 세트메뉴">
    </section>
  </main>

  <footer>
    <div class="site">
      <h2>사이트 이용안내</h2>
      <div class="info">
        <p>한국맥도날드(유)</p>
        <p>대표이사: 앤토니 마티네즈</p>
        <p>사업자등록번호: 101-81-26409</p>
        <p>전화주문: 1600-5252</p>
        <p>COPYRIGHT © 2019 ALL RIGHTS RESERVED BY McDonald's.</p>
      </div>

      <div class="term">
        <div class="term1">
          <h3 class="hide">약관 및 정책</h3>
          <ul>
            <li><a href="#">개인정보 처리방침</a></li>
            <li><a href="#">위치정보 이용약관</a></li>
            <li><a href="#">사이트맵</a></li>
          </ul>
        </div>

        <div class="term2">
          <h3 class="hide">문의</h3>
          <ul>
            <li><a href="#">임차문의</a></li>
            <li><a href="#">고객문의</a></li>
            <li><a href="#">인재채용</a></li>
          </ul>
        </div>

        <div class="term3">
          <h3 class="hide">커뮤니케이션</h3>
          <ul>
            <li><a href="https://www.facebook.com/McDonaldsKorea" target="_blank">페이스북</a></li>
            <li><a href="https://www.instagram.com/mcdonalds_kr/" target="_blank">인스타그램</a></li>
            <li><a href="https://www.youtube.com/user/McDonaldsKor" target="_blank">유튜브</a></li>
            <li><a href="https://story.kakao.com/ch/mcdonalds/feed" target="_blank">카카오스토리</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>