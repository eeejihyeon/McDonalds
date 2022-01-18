<?php


/* 이전 페이지에서 값 가져오기 */

$u_name = $_POST["u_name"];
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email_id"]."@".$_POST["email_dns"];
$birth = $_POST["birth"];
$address = $_POST["address1"];
$address = $_POST["address2"];


$reg_date = date("Y-m-d");

/* 값 확인 */

echo "이름 : ".$u_name."<br>";
echo "아이디 : ".$u_id."<br>";
echo "비밀번호 : ".$pwd."<br>";
echo "전화번호 : ".$mobile."<br>";
echo "이메일 : ".$email."<br>";
echo "생년월일 : ".$birth."<br>";
echo "기본주소 : ".$address1."<br>";
echo "상세주소 : ".$address2."<br>";


/*  */

/*  */

/*  */

/*  */

/*  */


