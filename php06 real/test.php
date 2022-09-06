<body>
    <form name="ed_name" method="post" action="test.html">
        <p>
            <?php
            $cname = $_POST["cname"];
            $count = 1;
            foreach ($cname as $name) {
                echo '<input type="text" name="name' . $count . '" value="' . $name . '"><br>';
                $count++;
            }
            ?></p>
        <p>
            <input type="submit" name="submitBtn" value="บันทึก">
        </p>
    </form>
</body>