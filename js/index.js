
function changeImage(img) {
  var nb_main = document.getElementById("nb_main");
  nb_main.src = img
};

function addr_search() {
  window.open("search_addr.html", "", "width=600, height=250, left=0, top=0")
};

$(document).ready(function () {

  // 내용 숨기기
  $(".nb_menu_2, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();

  // gnb
  $(".gnb").mouseenter(function () {
    $(".gnb ul ul").stop().slideDown("slow");
    $(".gnb>ul>li>a").css("color", "#1f1fb2");
    $(".menu5>a").css({ border: "3px solid #1f1fb2" });
    $(".logo").css({ background: "url(./images/logo_i.png)" });
    $(".nav_bg").stop().slideDown("slow");
  });

  $(".gnb").mouseleave(function () {
    $(".gnb ul ul").stop().slideUp("slow");
    $(".gnb>ul>li>a").css("color", "#ffffff");
    $(".menu5>a").css({ border: "3px solid #ffffff" });
    $(".logo").css({ background: "url(./images/logo.png)" });
    $(".nav_bg").stop().slideUp("slow");

  });



  // new&best 메인 선택
  $(".burger1").click(function () {
    $(".nb_menu_2, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_1").fadeIn("5000");
  });

  $(".burger2").click(function () {
    $(".nb_menu_1, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_2").fadeIn("5000");
  })

  $(".burger3").click(function () {
    $(".nb_menu_1, .nb_menu_2, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_3").fadeIn("5000");
  })

  $(".burger4").click(function () {
    $(".nb_menu_1, .nb_menu_2, .nb_menu_3, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_4").fadeIn("5000");
  })

  $(".burger5").click(function () {
    $(".nb_menu_1, .nb_menu_3, .nb_menu_4, .nb_menu_2, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_5").fadeIn("5000");
  })

  $(".burger6").click(function () {
    $(".nb_menu_1, .nb_menu_2, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_7, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_6").fadeIn("5000");
  });

  $(".burger7").click(function () {
    $(".nb_menu_1, .nb_menu_2 .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_8, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_7").fadeIn("5000");
  })

  $(".burger8").click(function () {
    $(".nb_menu_1, .nb_menu_2, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_9, .nb_menu_10").hide();
    $(".nb_menu_8").fadeIn("5000");
  })

  $(".burger9").click(function () {
    $(".nb_menu_1, .nb_menu_2, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_10").hide();
    $(".nb_menu_9").fadeIn("5000");
  })

  $(".burger10").click(function () {
    $(".nb_menu_1, .nb_menu_2, .nb_menu_3, .nb_menu_4, .nb_menu_5, .nb_menu_6, .nb_menu_7, .nb_menu_8, .nb_menu_9").hide();
    $(".nb_menu_10").fadeIn("5000");
  })



  // new&best 좌/우 이동
  $(".nl_2").hide();
  $(".nb_next").click(function () {
    $('.nl_1').hide();
    $('.nl_2').show();
  })
  $(".nb_prev").click(function () {
    $('.nl_2').hide();
    $('.nl_1').show();


  })


  // promotion

  $(".pl_3, .pl_2").hide();
  $(".prom_btn:eq(0)").css("background", "#ffc600")

  $(".prom_scroll li").click(function () {
    var idx = $(this).index();


    $(".prom_list ul").hide();
    $(".prom_list ul").eq(idx).fadeIn();


    $(".prom_btn").eq(idx).css({ background: "#ffc600", transition: ".2s ease" }
    );
    $(".prom_btn").not(this).css("background", "#eeeeee")
  });
})