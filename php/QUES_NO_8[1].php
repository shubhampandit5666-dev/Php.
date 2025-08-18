<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string1 = "Hello";
        $string2 = "Php";
        $result = strcmp($string1, $string2);
        if ($result == 0) {
            echo "Strings are equal.";
        } elseif ($result < 0) {
            echo "String 1 is less than String 2.";
        } else {
            echo "String 1 is greater than String 2.";
        }
    ?>
</body>
</html>