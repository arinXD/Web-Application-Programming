<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 35px;
        }

        .displayPHP,
        .form,
        .javascript,
        #displayName {
            padding: 10px 35px;
        }

        form input {
            margin-right: 10px;
            height: 20px;
        }
    </style>
</head>

<body>
    <h1>Welcome to Arinswagy</h1>
    <div class="form">
        <!-- Name -->
        <label for="">ชื่อ</label>
        <input id="firstName" type="text" name="firstName">
        <label for="">นามสกุล</label>
        <input id="lastName" type="text" name="lastName">
        <button id="sendName">sent</button><br><br>
        <label for="">Number</label>
        <input id="number" type="text">
        <button id="btnRun">run</button>
    </div>

    <div class="javascript" >
        result will show here
    </div>

    <div id="displayName">
        <h3 style="display: inline;">Your name is</h3>
    </div>

    <div class="displayPHP">

        <?php
        $firstName = "Arinchawut";
        $lastName = "Kanlayanam";
        echo "<h2>Hello form PHP</h2><br>"; //print without ()
        echo ("My name is $firstName <br>");
        echo ('My name is $name');
        print("<br>" . $firstName . " " . $lastName . "<br><br>");

        for ($i = 0; $i < 10; $i++) {
            echo $i . "<br>";
        }
        ?>
    </div>
</body>
<script src="index.js"></script>

</html>