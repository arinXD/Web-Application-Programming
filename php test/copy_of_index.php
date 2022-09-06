<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <?php
            // rename
            include("func.php");
            echo "result 5: " . sum(5);
            $path = "c:/xampp/htdocs/php/";
            $filename = "func.php";
            if (rename($path . "rename_of_" . $filename, $path . "test_" . $filename)) {
                echo "rename file complete.";
            } else {
                echo "Cannot copy file";
            }
            // copy
            $path = "c:/xampp/htdocs/php/";
            $filename = "index.php";
            if (copy(
                $path . $filename,
                $path . "copy_of_" . $filename
            )) {
                echo "Copy file complete.";
            } else {
                echo "Cannot copy file";
            }
            ?> -->
    <?php
    // หาไฟล์
    // ถ้าหาเจอคืนค่าเป็น true
    if (file_exists("./func.php")) {
        echo "find it";
    }
    $path = "C:/xampp/htdocs/php/func.php";
    $base1 = basename($path);
    $base2 = basename($path, ".php");
    echo "<br>" . $base1; // คืนค่าทั้งชื่อไฟล์และนามสกุล
    echo "<br>" . $base2 . "<br>";  // คืนค่าเฉพาะชื่อไฟล์

    // path info (associative array)
    print_r(pathinfo($path));
    echo "<br>";
    print_r(pathinfo($path)["dirname"]);

    //size
    $size = filesize($path);
    $kb = $size / 1024;
    echo "<br>File size = " . number_format($kb, 2, ".", ",") . " KB";

    // file type
    echo filetype($path);

    // เงื่อนไง read
    $path = "C:/xampp/htdocs/php/input.txt";
    if (is_readable($path)) {
        $contents = "<br>" . file_get_contents($path);
    } else $contents = "<br> can't read file";
    echo $contents;

    // เงื่อนไข write
    if (is_writeable($path)) {
        // file_put_contents($path, "Hello PHP !!!!");
        $contents = "<br>" . file_get_contents($path);
        echo $contents;
    } else {
        echo "Cannot write file";
    }

    ?>

</body>

</html>