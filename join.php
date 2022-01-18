<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/join.css">
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/gnb.js"></script>
  <title>Join</title>

  <script type="text/javascript">
    function form_check() {

      var uname = document.getElementById("u_name");
      var uid = document.getElementById("u_id");
      var pwd = document.getElementById("pwd");
      var rpwd = document.getElementById("rpwd");
      var mobile = document.getElementById("mobile");
      var birth = document.getElementById("birth");


      if (uname.value == "") {
        // alert("test");
        var err_txt = document.querySelector(".err_name");
        err_txt.innerHTML = "이름을 입력하세요.";
        uname.focus();
        return false;
      };

      if (uid.value == "") {
        var err_txt = document.querySelector(".err_id");
        err_txt.innerHTML = "아이디를 입력하세요.";
        uid.focus();
        return false;
      };

      var uid_len = uid.value.length;
      if (uid_len < 4 || uid_len > 12) {
        var err_txt = document.querySelector(".err_id");
        err_txt.innerHTML = "아이디는 4-12글자로 입력하세요.";
        uid.focus();
        return false;
      };

      if (pwd.value == "") {
        var err_txt = document.querySelector(".err_pwd");
        err_txt.innerHTML = "비밀번호를 입력해주세요.";
        pwd.focus();
        return false;
      }

      var pwd_len = pwd.value.length;
      if (pwd_len < 6) {
        var err_txt = document.querySelector(".err_pwd")
        err_txt.innerHTML = "비밀번호는 6글자 이상 입력하세요.";
        pwd.focus();
        return false;
      }

      if (rpwd.value != pwd.value) {
        var err_txt = document.querySelector(".err_rpwd");
        err_txt.innerHTML = "비밀번호를 확인해주세요.";
        rpwd.focus();
        return false;
      };

      var reg_mob = /^[0-9]+$/g;
      if (!reg_mob.test(mobile.value)) {
        var err_txt = document.querySelector(".err_mob");
        err_txt.innerHTML = "전화번호는 숫자만 입력할 수 있습니다.";
        mobile.focus();
        return false;
      };

      var reg_bir = /^[0-9]+$/g;
      if (!reg_bir.test(birth.value)) {
        var err_txt = document.querySelector(".err_bir");
        err_txt.innerHTML = "생년월일은 숫자만 입력할 수 있습니다.";
        birth.focus();
        return false;
      };

      var bir_len = birth.value.length;
      if (bir_len != 8) {
        var err_txt = document.querySelector(".err_bir");
        err_txt.innerHTML = "생년월일은 8자리로 입력하세요.";
        birth.focus();
        return false;
      };
    };

    function id_search() {
      window.open("search_id.html", "", "width=400, height=200, top=0, left=10");
    };

    function email_change() {
      var email_dns = document.getElementById("email_dns");
      var email_sel = document.getElementById("email_sel");

      var idx = email_sel.options.selectedIndex;

      var sel_txt = email_sel.options[idx].value;
      email_dns.value = sel_txt;

    };
  </script>
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
    <section class="top_wrap">
      <div class="top">
        <h2 class="hide">join</h2>
        <div class="top_detail">
          <p class="top_name">회원가입</p>
          <p class="top_name_eng">Join</p>
          <p class="top_exp">맥도날드의 회원으로 더 많은 혜택을 받으세요!</p>

        </div>
      </div>
    </section>

    <form name="join_form" action="insert.php" method="POST" onsubmit="return form_check()">
      <fieldset>
        <div class="form_wrap">
          <legend>기본정보 입력</legend>
          <p>
            <label for="u_name" class="form_item">이름</label>

            <input type="text" name="u_name" id="u_name">
            <br>
            <span class="err_name"></span>
          </p>


          <p>
            <label for="u_id" class="form_item">아이디</label>
            <input type="text" name="u_id" id="u_id" class="form_id">
            <button type="button" class="form_btn" onclick="id_search()">중복 확인</button>
            <br>
            <span class="err_id"></span>
          </p>

          <p>
            <label for="pwd" class="form_item">비밀번호</label>
            <input type="password" name="pwd" id="pwd">
            <br>
            <span class="err_pwd"></span>
          </p>

          <p>
            <label for="rpwd" class="form_item">비밀번호 확인</label>
            <input type="password" name="rpwd" id="rpwd">
            <br>
            <span class="err_rpwd"></span>
          </p>

          <p>
            <label for="mobile" class="form_item">전화번호</label>
            <input type="text" name="mobile" id="mobile" placeholder="'-' 제외한 숫자만 입력">
            <br>
            <span class="err_mob"></span>
          </p>

          <p>
            <label for="" class="form_item">이메일</label>
            <input type="text" name="email" id="email" class="form_email"> @
            <input type="text" name="email_dns" id="email_dns" class="form_email">
            <select name="email_sel" id="email_sel" onchange="email_change()">
              <option value="naver.com">네이버</option>
              <option value="daum.net">다음</option>
              <option value="google.com">구글</option>
            </select>
          </p>

          <p>
            <label for="birth" class="form_item">생년월일</label>
            <input type="text" name="birth" id="birth" placeholder="ex) 20210101">
            <br>
            <!-- <span class="err_bir">YYYYMMDD 형식으로 입력해주세요.</span> -->
          </p>

          <p>
            <label class="form_item">주소</label>
            <input type="text" name="address1" id="address1" class="form_addr1">
            <button type="button" name="" id="" class="form_btn">주소 검색</button>
          </p>
          <p>
            <label class="form_item"></label>
            <input type="text" name="address2" id="address2" class="form_addr2">
          </p>

          <!-- <p>
            <label class="form_item">SMS 수신 여부</label>
            <span class="sms">맥도날드의 프로모션, 새로운 소식을 SMS로 받으실 수 있습니다.</span>
            <br>
            <input type="checkbox" name="" id="" class="check_sms">
            <span class="sms">동의</span>
          </p> -->
        </div>
        <p class="join_c">
          <button type="submit" class="btn_join">Join</button>
        </p>
      </fieldset>
    </form>

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