<?php
// date_default_timezone_set('Asia/Bangkok');
$productID = $_GET['id'];

$host = "localhost";
$user = "root";
$password = "";
$db = "lab06";
$conn = mysqli_connect($host, $user, $password, $db);

if($conn){
    $sql = "UPDATE `products` SET timestamp_delete_at = current_timestamp(), timestamp_updated_at = current_timestamp() WHERE product_id = $productID";
    $result = mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        alert("complete");
        // window.location.href = "index2.php";
        window.location.replace("index2.php");
    </script>
</head>
<body>
</body>
</html>