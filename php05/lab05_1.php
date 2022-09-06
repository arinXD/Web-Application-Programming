<?php

$name=$_POST["prefix"].$_POST["fName"]." ".$_POST["lName"] ;
$gpa=round((($_POST["grade1"]*3)+($_POST["grade2"]*3)+($_POST["grade3"]*3))/9,2);
echo "ชื่อ-นามสกุล: $name <br>";
echo "เกรดเฉลี่ยรวม => $gpa";