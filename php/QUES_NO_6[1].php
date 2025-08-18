<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $string = "My name is ajay gupta!";
        $search = "ajay";
        $position = strpos($string, $search);
        if ($position !== FALSE) {
            echo "String '$search' found at position $position.";
        } else {
            echo "String '$search' not found.";
}
    ?>
</body>
</html>