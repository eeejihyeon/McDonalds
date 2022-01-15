
$(document).ready(function () {

  // 내용 숨기기

  // menu list
  $(".ml_2, .ml_3, .ml_4").hide();
  $(".more_btn:eq(0)").css("background", "#ffc600")

  $(".more_scroll li").click(function () {
    var idx = $(this).index();


    $(".more_list ul").hide();
    $(".more_list ul").eq(idx).fadeIn();


    $(".more_btn").eq(idx).css({ background: "#ffc600", transition: ".2s ease" }
    );
    $(".more_btn").not(this).css("background", "#eeeeee")
  });


})