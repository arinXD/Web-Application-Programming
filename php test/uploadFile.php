<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Select image to upload:</p>
    <form method="post" action="upload.php" enctype="multipart/form-data">

        <p>
            <input type="file" name="imgUpload">
            <input type="submit" name="submitBtn" value="upload">
        </p>
    </form>

</body>

</html>