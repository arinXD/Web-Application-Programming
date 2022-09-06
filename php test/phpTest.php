<?php

$arr = array(50, 4, 38, 90, 21, 70, 51);
$sum = 0;

$values = "";

for ($i = 0; $i < sizeof($arr); $i++) {

    $values .= $arr[$i] . " + ";
    $sum += $arr[$i];
}
echo "<br>value = " . $values . "<br>";
echo "Sum = " . $sum;
echo "<br><br><hr><br>";
?>

<?php

$country = array("TH" => "Thailand", "JP" => "Japan", "KR" => "Korea");

echo "Code 'TH' refers to " . $country["TH"] . "<br>";

$countryKey = array_keys($country);

echo "key index 0 : " . $countryKey[0];

?>

<?php
echo "<br><hr><br>";
echo "<center>"; 
for ($i = 0; $i <= 5; $i++) {
    // echo "i:".$i." ";
    for ($j = 0; $j <= 5; $j++) {
        // echo "j:".$j." ";
        if ($j == 0 || $j == 5) echo " | ";
        elseif ($i == 0 || $i == 5) echo "=";

        else echo "*";
    }

    echo "<br>";
}
echo "</center>"; 
?>

<?php
echo "<br><hr><br>";
$width = 10;
$height = 10;

// $x = 1>3 ? 5 : 10;
$x = $width>$height ? 1 : 0;
echo "x = ".$x."<br>";

$bool_val = true;
if($bool_val!=true) echo "true ";
echo "bool_val = ".$bool_val;
?>