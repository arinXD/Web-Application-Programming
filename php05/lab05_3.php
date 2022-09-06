<?php
date_default_timezone_set('Asia/Bangkok');
$now=strtotime("now");

define("branch",array(
    "BIT"=>"เทคโนโลยีสารสนเทศทางธุรกิจ",
    "Network"=>"ระบบเครือข่าย ความมั่นคงเทคโนโลยีสารสนเทศ และอินเทอร์เน็ตของสรรพสิ่ง",
    "Web"=>"โปรแกรมประยุกต์บนเว็บ และอุปกรณ์เคลื่อนที่",
));
// $branch=array(
//     "BIT"=>"เทคโนโลยีสารสนเทศทางธุรกิจ",
//     "Network"=>"ระบบเครือข่าย ความมั่นคงเทคโนโลยีสารสนเทศ และอินเทอร์เน็ตของสรรพสิ่ง",
//     "Web"=>"โปรแกรมประยุกต์บนเว็บ และอุปกรณ์เคลื่อนที่",
// );

$name=$_POST["name"];
$id=$_POST["stdID"];
$branch=$_POST["branch"];
$bday=$_POST["bday"];
$age=round(($now-strtotime($bday))/(60*60*24*365));

echo "
ชื่อ-นามสกุล: $name <br>
รหัสนักศึกษา: $id <br>
แทร็ก: ".branch[$branch]." <br>
วันเกิด: $bday <br>
อายุ: $age
";
