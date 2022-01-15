
$(document).ready(function () {

  // 내용 숨기기

  // single/set select
  $(".menu_set").hide();
  $(".sel_btn:eq(0)").css({ background: "#1f1fb2", color: "#fff" })

  $(".menu_sel li").click(function () {
    var idx = $(this).index();


    $(".menu_ss_wrap>ul>li").hide();
    $(".menu_ss_wrap>ul>li").eq(idx).fadeIn();


    $(".sel_btn").eq(idx).css({ background: "#1f1fb2", color: "#fff", transition: ".2s ease" }
    );
    $(".sel_btn").not(this).css({ background: "#fff", color: "#1f1fb2" });

  });


  // menu list
  $(".ml_2, .ml_3").hide();
  $(".menu_btn:eq(0)").css("background", "#ffc600")

  $(".menu_scroll li").click(function () {
    var idx = $(this).index();


    $(".menu_list ul").hide();
    $(".menu_list ul").eq(idx).fadeIn();


    $(".menu_btn").eq(idx).css({ background: "#ffc600", transition: ".2s ease" }
    );
    $(".menu_btn").not(this).css("background", "#eeeeee")
  });


})