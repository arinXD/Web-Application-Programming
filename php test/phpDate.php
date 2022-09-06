<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            // BASIC DATE TIME
            date_default_timezone_set('Asia/Bangkok');

            $t = time();
            echo "Timestamp: $t<br>";
            $now = strtotime("now");
            $birth = strtotime("2002/08/14");
            $diff = $now - $birth;
            $secs_in_year = 60 * 60 * 24 * 365;
            echo "<br> dif: $diff <br>" . "sec in year: $secs_in_year";
            $age = floor($diff / $secs_in_year);

            echo "Function date: <br>" . date("d/M/Y", $t) . "<br>" . date(" H:i a", $t) . "<br>";
            echo "<br> I am $age years old.";

            // $time1 = strtotime("5/8/2022");
            $time2 = strtotime("+9 days");
            echo "<br> my birth day is " . date("d/M/Y", $time2);
            echo "<br>" . $now . " / " . $t;
            ?> -->
            
    <p>กรอกวันหมดอายุของสินค้า</p>
    <form name="ch_name" method="post" action="checkExpired.php">
        <p>
            <input type="date" name="expired" value="">
        </p>
        <p>
            <input type="submit" name="submitBtn" value="ตรวจสอบข้อมูล">
        </p>
    </form>

</body>

</html>