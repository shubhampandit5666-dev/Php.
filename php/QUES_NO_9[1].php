<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string  = "   Hey! How are you...  => I am Fine...";
        $result = trim($string);
        echo $result;
        echo "<br>";
        $using_par = trim($string ,".");
        echo $using_par;
    ?>
</body>
</html>