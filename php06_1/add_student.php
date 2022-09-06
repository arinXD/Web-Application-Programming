<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    date_default_timezone_set('Asia/Bangkok');
    $t = time();

    $stdID = $_POST["stdID"];
    $stdPrefix = $_POST["stdPrefix"];
    $stdFname = $_POST["stdFname"];
    $stdLname = $_POST["stdLname"];
    $stdBday = $_POST["stdBday"];

    $stdBdayToTime = strtotime($stdBday);
    $diff = $t - $stdBdayToTime;
    $secs_in_year = 60 * 60 * 24 * 365;

    $stdAge = floor($diff / $secs_in_year);

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "lab06";
    $conn = mysqli_connect($host, $user, $password, $dbname);

    if ($conn) {
        // echo "connecting success";
        $sql = "INSERT INTO `students` (`std_id`, `std_prefix`, `std_firstName`, `std_lastName`, `std_birthdat`, `std_age`) VALUES ('$stdID', '$stdPrefix', '$stdFname', '$stdLname', '$stdBday', '$stdAge')";
        // $result = mysqli_query($conn, $sql);
        try {
            if (mysqli_query($conn, $sql)) {
                $status = true;
            }
        } catch (Exception $e) {
            $status = false;
            echo "fail";
    ?>
            <script>
                alert("insert fail");
                window.location.replace("index.html");
            </script>
    <?php
        }

        if (mysqli_close($conn)) {
            exit;
        }
    } else {
        echo "connecting fail";
    }
    ?>
</head>

<body>
    <script>
        let success = <?php echo $status; ?>;
        console.log(success);
        if (success) {
            alert("insert success");
            window.location.replace("index.html");
        }
    </script>
</body>
<!-- ?>
            <script>
                alert("insert success");
                window.location.replace("index.html");
            </script>
    ?php -->


</html>