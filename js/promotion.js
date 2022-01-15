
$(document).ready(function () {

  // 내용 숨기기

  // ing/end select
  $(".prom_end").hide();
  $(".sel_btn:eq(0)").css({ background: "#1f1fb2", color: "#fff" })

  $(".promotion_sel li").click(function () {
    var idx = $(this).index();


    $(".prom_ie_wrap>ul>li").hide();
    $(".prom_ie_wrap>ul>li").eq(idx).fadeIn();


    $(".sel_btn").eq(idx).css({ background: "#1f1fb2", color: "#fff", transition: ".2s ease" }
    );
    $(".sel_btn").not(this).css({ background: "#fff", color: "#1f1fb2" });

  });


  // promorion list
  $(".pl_2").hide();
  $(".scroll_btn:eq(0)").css("background", "#ffc600")

  $(".promotion_scroll li").click(function () {
    var idx = $(this).index();


    $(".promotion_list ul").hide();
    $(".promotion_list ul").eq(idx).fadeIn();


    $(".scroll_btn").eq(idx).css({ background: "#ffc600", transition: ".2s ease" }
    );
    $(".scroll_btn").not(this).css("background", "#eeeeee")
  });


})