<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <form name="ed_name" method="post" action="updateName.php">
        <p>
            /*<?php
                $cname = $_POST["cname"];
                foreach ($cname as $name) {
                    echo '<input type="text" name="name[]" value="' . $name . '"><br>';
                }
                ?>*/
        </p>
        <p>
            <input type="submit" name="submitBtn" value="บันทึก">
        </p>
    </form> -->

    <?php
    $selected = null;
    // echo $_POST["cname"];
    if ($_POST["cname"]!="") {
        $selected = $_POST["cname"];
    }else { 
        echo "empty <br>";
        $selected = "Null" ;
    }
    ?>
    <input type="checkbox" name="name[]" value="John" <?php if ($selected == "John") echo "checked"; ?>> John <br>
    <input type="checkbox" name="name[]" value="Jenny" <?php if ($selected == "Jenny") echo "checked"; ?>> Jenny <br>
    <input type="checkbox" name="name[]" value="Mary" <?php if ($selected == "Mary") echo "checked"; ?>> Mary <br>
    <input type="checkbox" name="name[]" value="null" <?php if ($selected == "Null") echo "checked"; ?>> Null <br>

</body>

</html>