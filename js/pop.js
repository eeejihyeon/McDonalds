   function setCookie( name, value, expiredays) {
      let todayDate = new Date();
      todayDate.setDate(todayDate.getDate() + expiredays);
      document.cookie = name + "=" + value + "; path=/; expires=" + todayDate.toUTCString() + ";"
    }

    $(function(){
      if(document.cookie.indexOf("popToday=close") < 0 ){
        document.getElementById("pop").style.display = "block";} else {
                document.getElementById("pop").style.display = "none";
      }
    });

    function closeToday() {
      setCookie("popToday", "close", 1 );
      $("#pop").css("display", "none");
      document.getElementById("pop").style.display = "none";

    }
        function closePop() {

            document.getElementById("pop").style.display = "none";

          }