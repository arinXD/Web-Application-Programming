<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,
        th {
            border: 1px solid;
        }

        table {
            border-collapse: collapse;
            margin: 60px auto;
        }
    </style>
</head>

<body>
    <?php
    // session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "lab06";
    $conn = mysqli_connect($host, $user, $password, $db);
    $i = 1;

    // $sql = "SELECT * FROM products";
    $sql = "SELECT * FROM `products` WHERE `timestamp_delete_at` = 0";
    $result = mysqli_query($conn, $sql);
    if ($conn) {
    ?>
        <script>
            console.log("connection seccess");
        </script>
    <?php
        echo
        "
        <form method = 'get' action = 'delete.php'>
            <table>
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>ราคาสินค้า</th>
                </tr>
    ";
        while ($rs = mysqli_fetch_array($result)) {
            echo "<tr>
                        <td id='product$i' name='product$i' value='$i'>" . $rs["product_id"] . "</td>
                        <td>" . $rs["product_name"] . "</td>
                        <td>" . $rs["product_price"] . "</td>
                        <td>
                            <a href='delete.php?id=".$rs["product_id"]."& name=".$rs["product_name"]."' >ลบข้อมูล</a>
                        </td>
                    </tr>";
            $i++;
        }

        echo"
            </table>
        </form>";
    } else {
    ?>
        <script>
            console.log("connection fail");
        </script>
    <?php
    }
    ?>

</body>

</html>