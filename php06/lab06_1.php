<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        date_default_timezone_set("Asia/Bangkok");
        $now=strtotime("now");

        $conn=mysqli_connect("localhost","root","","tuiwebapp");
        $stdID=$_POST["stdID"];
        $prefix=$_POST["prefix"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $bday=$_POST["bday"];
        $age=floor(($now-strtotime($bday))/(60*60*24*365));
        if($conn){
            echo "connected";
            $sql="INSERT INTO `students` (`std_id`, `std_prefix`, `std_firstName`, `std_lastName`, `std_birthdat`, `std_age`) 
            VALUES ('$stdID', '$prefix', '$fname', '$lname', '$bday', '$age');";
            try{
                mysqli_query($conn,$sql);
                $status=true;
            }catch(Exception $e){
            ?>
            <script>
                alert("“บันทึกข้อมูลไม่สําเร็จ (รหัสนักศึกษานี้ถูกเพิ่มแล้ว)”");
                window.location.replace("lab06_1_main.php");
            </script>
            <?php
            }
        }else{
            echo "connected fail"; 
        }
    ?>
</head>
<body>
    <script>
        let status = <?php echo $status;?>;
        if(status){
            alert("“บันทึกข้อมูลสําเร็จ”");
            window.location.replace("lab06_1_main.php");
        }
    </script>
</body>
</html>