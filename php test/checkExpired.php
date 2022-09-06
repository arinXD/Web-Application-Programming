<?php
date_default_timezone_set('Asia/Bangkok');

$now = time();
$expire = strtotime($_POST["expired"]);
$sec_in_day = 60 * 60 * 24;
$num_day = ceil(($expire - $now) / $sec_in_day);
// $num_day = ceil(($expired - $now) / $sec_in_day);

if ($expire < $now) {
    echo $num_day;
    if ($num_day == 0) echo "หมดอายุวันนี้";
    else echo "หมดอายุแล้ว";
} else {
    echo "หมดอายุอีก " . ceil(($expire - $now) / $sec_in_day) . " วัน";
}
