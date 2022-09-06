<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $stdID = $_POST["stdID"];
    $stdPrefix = $_POST["stdPrefix"];
    $stdFname = $_POST["stdFname"];
    $stdLname = $_POST["stdLname"];
    $stdHeight = $_POST["stdHeight"];
    $stdWeight = $_POST["stdWeight"];
    // number_format(($stdWeight / (($stdHeight/100)*2)), 2, '.', '');
    // ($stdWeight / (($stdHeight/100)*2));
    $stdBMI = number_format(($stdWeight / (($stdHeight / 100) * 2)), 2, '.', '');

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "lab06";
    $conn = mysqli_connect($host, $user, $password, $dbname);

    if ($conn) {
        $dup = "SELECT * FROM students WHERE std_id = '$stdID' ";
        $duprow = mysqli_query($conn, $dup);

        if (mysqli_num_rows($duprow) > 0) {
    ?>
            <script>
                alert("“มีนักศึกษาคนนี้แล้ว”");
                window.location.replace("index.html");
            </script>
        <?php
        }
        // INSERT INTO `students` (`std_id`, `std_prefix`, `std_firstName`, `std_lastName`, `std_high`, `std_weight`, `std_BMI`) VALUES ('643020001-2', 'นางสาว', 'ดารารัตน์', 'ทาสาจันทร์', '165', '50', '18.37');
        $sql = "INSERT INTO ` students` (`std_id`, `std_prefix`, `std_firstName`, `std_lastName`, `std_high`, `std_weight`, `std_BMI`) VALUES ('$stdID', '$stdPrefix', '$stdFname', '$stdLname', '$stdHeight', '$stdWeight', '$stdBMI')";
        if (mysqli_query($conn, $sql)) {
        ?>
            <script>
                alert("“บันทึกข้อมูลสำเร็จ”");
                window.location.replace("index.html");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("“มีนักศึกษาคนนี้แล้ว”");
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

</body>



</html>