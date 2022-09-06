<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab06_1</title>
    <?php
        function myErrorHandler($errno, $errstr, $errfile, $errline){
            // echo "<b>Custom error:</b> [$errno] $errstr<br>";
        }
        set_error_handler("myErrorHandler");

        $conn = mysqli_connect("localhost", "root", "", "tuiwebapp");
        $value = $_GET["id"];
        if ($conn) {
            echo "connected <br>";
            $sql = "SELECT * FROM `students` WHERE std_id='$value'";
            $result = mysqli_query($conn, $sql);
            $array = mysqli_fetch_array($result);
            $finally=$array[1].$array[2]." ".$array[3];
            echo $finally;
        } else {
            echo "connected fail";
        }

    ?>

</head>

<body>
    <h1>ข้อมูลนักศึกษา</h1>
    <form action="./lab06_1.php" method="post">
        <fieldset>
            <legend>ฟอร์มเพิ่มข้อมูลนักศึกษา</legend>
            รหัสนักศึกษา:
            <input type="text" name="stdID" value="" required> <br>
            คำนำหน้า:
            <select name="prefix" required>
                <option value="นาย" selected>นาย</option>
                <option value="นางสาว">นางสาว</option>
            </select>
            ชื่อ:
            <input type="text" name="fname" value="" pattern="[A-C]{2,}[0-9]{3,5}" required>
            นามสกุล:
            <input type="text" name="lname" value="" required> <br>
            วันเกิด:
            <input type="date" name="bday" placeholder="01/01/2022" required> <br> <br>
            <button type="submit">บันทึกข้อมูลนักศึกษา</button>
        </fieldset>
    </form>
    <fieldset>
        <legend>ค้นหานักศึกษา</legend>
        รหัสนักศึกษา:
        <input type="text" id="stdID" name="stdID" value="" required> <br>
        <button onclick="showStd()">ค้นหา</button>
        <div id="information">

        </div>
    </fieldset>
</body>
<script>
    let stdID;

    function showStd() {
        stdID = document.querySelector("#stdID").value;
        console.log(stdID);
        window.location.href = "lab06_1_main.php?id=" + stdID;
        console.log("hi");
    }
</script>

</html>