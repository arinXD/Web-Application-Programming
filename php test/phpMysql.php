<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";
$conn = mysqli_connect($host, $user, $password, $dbname);

// connect to data base
if ($conn) {
    echo "Connect to database successfully. <br>";

    // $sql = "SELECT * FROM student";
    // $sql = "SELECT std_id, std_name FROM student";
    $sql = "SELECT std_name, LENGTH(std_name) FROM student";
    $result = mysqli_query($conn, $sql);

    // fetch from data
    while ($rs = mysqli_fetch_array($result)) {
        // echo $rs[0] . " | " . $rs[1] . " | " . $rs["std_dept"] . " | " . $rs["std_gpa"]. "<br>";
        echo $rs[0] . " | " . $rs[1] . "<br>";
    }

    // tabel tuple
    $n_rows = mysqli_num_rows($result);
    // table attribute
    $n_fields = mysqli_num_fields($result);

    echo "There are $n_rows tuples, $n_fields attributes.";
    // close data connection
    if (mysqli_close($conn)) {
        echo "<br> Close connection.";
    }
} else {
    echo "Error! Cannot connect to database.";
    exit;
}
