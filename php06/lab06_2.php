<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $stdID=$_POST["stdID"];
        $prefix=$_POST["prefix"];
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $height=$_POST["height"]/100;
        $weight=$_POST["weight"];
        $BMI=round($weight/($height*$height),2);

        $conn=mysqli_connect("localhost","root","","tuiwebapp");
        if($conn){
            echo "connected";
            $sql="INSERT INTO `students2` (`std_id`, `std_prefix`, `std_firstName`, `std_lastName`, `std_high`, `std_weight`, `std_BMI`) 
            VALUES ('$stdID', '$prefix', '$fname', '$lname', '$height', '$weight', '$BMI');";
            try{
                mysqli_query($conn, $sql);
                $status=true;
            }catch(Exception $e){
        ?>
            <script>
                alert("“นักศึกษาคนนี้ถูกเพิ่มข้อมูลแล้ว”");
            // window.location.replace("lab06_2.html");
            window.location.href = "lab06_2.html"
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
        let status=<?php echo $status;?>;
        if(status){
            alert("“บันทึกข้อมูลสําเร็จ”");
            window.location.replace("lab06_2.html");
        }
    </script>
</body>
</html>