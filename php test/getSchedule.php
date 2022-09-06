<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h2>ตารางการเดินรถโดยสาร</h2>

    <table>
        <tr>
            <th>เวลา</th>
            <th>สถานีปลายทาง</th>
        </tr>

        <?php
        $time = $_POST["time"];
        foreach($time as $value){
            echo "<tr><td>".$value."</td><td>".$_POST["sta"."$value"]."</td></tr>" ;
        }
        ?>
    </table>
</body>

</html>