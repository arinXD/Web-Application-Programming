<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab06_3</title>
    <!-- CSS -->
    <style>
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 300px;
        }
        div{
            margin: 50px auto;
            width: fit-content;
        }
        h1{
            text-align: center;
        }
    </style>

    <!-- PHP -->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "tuiwebapp");
    if ($conn) {
        echo "connected";
        $sql = "SELECT * FROM `products` WHERE timestamp_delete_at IS NULL";
        $result = mysqli_query($conn, $sql);
    } else {
        echo "connected fail";
    }
    ?>
</head>

<body>
    <div>
        <h1>รายการสินค้า</h1>
        <table>
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ราคา</th>
            </tr>
            <?php
            while ($rs = mysqli_fetch_array($result)) {
                echo
                " 
            <tr>
            <td>" . $rs[0] . "</td>
            <td>" . $rs[1] . "</td>
            <td>" . $rs[2] . "</td>
            <td><a href=lab06_3.php?productID=" . $rs[0] . ">ลบสินค้า</a></td>
            </tr> 
            ";
            }
            ?>
        </table>
    </div>
</body>

</html>