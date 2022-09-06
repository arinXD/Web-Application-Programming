<?php
date_default_timezone_set('Asia/Bangkok');
$t = time();
// echo "Function date: ".date("Y-m-d H:i:s", $t)."<br>";
$time = date("Y-m-d H:i:s", $t);

$productID = $_GET['id'];
$productName = $_GET['name'];

$host = "localhost";
$user = "root";
$password = "";
$db = "lab06";
$conn = mysqli_connect($host, $user, $password, $db);

if($conn){
    echo "connection sucess <br>";
    $sql = "UPDATE `products` SET timestamp_delete_at = '$time', timestamp_updated_at = '$time' WHERE product_id = '$productID'";
    $result = mysqli_query($conn, $sql);
?>
    <script>
        alert("delete success");
        window.location.replace("index.php");
    </script>
<?php
}else{
    echo "connection fail";
}





// echo $productID;
// echo $productName;
