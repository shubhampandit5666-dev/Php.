<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "My Name is ajay gupta";
        $Change_md5 = md5($string);
        echo "Convert into md5 (Hash Value) =>",$Change_md5;
        echo "<br> <br>";
        $change_base64_encode = base64_encode($string);
        echo "Convert into base64_encode (Base64 Format) =>",$change_base64_encode;
        echo "<br> <br>";
        $change_base64_decode = base64_decode($change_base64_encode);
        echo "Convert into base64_decode (Original String) => ",$change_base64_decode;
    ?>
</body>
</html>