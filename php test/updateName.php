<?php
$name = $_POST["name"];
echo "Update name <br>";
foreach($name as $value){
    echo "$value <br>";
}