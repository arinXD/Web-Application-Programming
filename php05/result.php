<?php
$name = $_POST["prefix"].$_POST["firstName"]." ".$_POST["lastName"];
$subj1 = $_POST["subjet1"];
$grade1 = $_POST["grade1"];
$subj2 = $_POST["subjet2"];
$grade2 = $_POST["grade2"];
$subj3 = $_POST["subjet3"];
$grade3 = $_POST["grade3"];
$totalGpax = ($subj1*$grade1)+($subj2*$grade2)+($subj3*$grade3);
$totlaCredit = $subj1+$subj2+$subj3;

echo "ชื่อ-นามสกุล: ".$name."<br>";
echo "เกรดเฉลี่ยรวม => ".round( ($totalGpax)/($totlaCredit) ,2 );
