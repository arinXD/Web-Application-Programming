<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $name=$_POST["name"];
        $tel=$_POST["tel"];
        $email=$_POST["email"];
        $product=$_POST["product"];
        $amount=$_POST["amount"];
        if($product=="iPhone 13 mini"){
            $price=25900;
        }
        if($product=="iPhone 13"){
            $price=29900;
        }
        if($product=="iPhone 13 Pro"){
            $price=38900;
        }
        if($product=="iPhone 13 Pro Max"){
            $price=42900;
        }
        $total=$amount*$price;
        $total.="฿";
        $price.="฿";
    ?>
</head>
<body>
    <fieldset>
        <legend>ข้อมูลการจองสินค้า</legend>
        <?php
            echo "ชื่อ-นามสกุล: $name<br>
            เบอร์โทรศัทพ์: $tel<br>
            Email: $email<br>
            <hr>
            โทรศัพท์มือถือ: $product<br>
            จำนวน: $amount<br>
            ราคาหน่อวยละ: $price<br>
            ราคาสุทธิ: $total<br>";
        ?>
    </fieldset>
</body>
</html>