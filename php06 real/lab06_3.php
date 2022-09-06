<?php
date_default_timezone_set('Asia/Bangkok');
$time=time();
$date=date("Y-m-d G:i:s");
$productID=$_GET["productID"];
$conn=mysqli_connect("localhost", "root", "", "tuiwebapp");
if($conn){
    echo "connected";
    $sql="UPDATE `products` SET timestamp_updated_at='$date', timestamp_delete_at='$date' WHERE product_id='$productID' ";
    mysqli_query($conn, $sql);
    ?>
    <script>
        alert("ลบข้อมูลสำเร็จ");
        window.location.replace('lab06_3_main.php');
    </script>
    <?php
}else{
    echo "connected fail";
}