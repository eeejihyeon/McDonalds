$(document).ready(function () {

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


});