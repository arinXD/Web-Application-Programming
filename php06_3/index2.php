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
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "lab06";
    $conn = mysqli_connect($host, $user, $password, $db);
    if ($conn) {
        echo "connect success";
        $sql = "SELECT * FROM products";
        // $sql = "SELECT * FROM `products` WHERE `timestamp_delete_at` = 0";
        $sql = "SELECT * FROM `products` WHERE `timestamp_delete_at` is NULL";
        $result = mysqli_query($conn, $sql);
    }
    ?>
    <table border="1">
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาสินค้า</th>
        </tr>
        <?php
        while ($rs = mysqli_fetch_array($result)) {
            echo "<tr>
                        <td>" . $rs["product_id"] . "</td>
                        <td>" . $rs["product_name"] . "</td>
                        <td>" . $rs["product_price"] . "</td>
                        <td>
                            <a href=delete2.php?id=".$rs["product_id"]." >ลบข้อมูล</a>
                        </td>
                    </tr>";
        }
        ?>

    </table>

</body>

</html>