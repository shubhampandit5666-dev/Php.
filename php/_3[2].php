<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Ascending Order";
        echo "<br>";
        echo "<br>";
        $Number = array(466,38,47,587,56,4773,4553,36,85,84,738);
        sort($Number);
        print_r ($Number);
        echo "<br>";
        echo "<br>";
        echo "Descending Order";
        echo "<br>";
        echo "<br>";
        rsort($Number);
        print_r ($Number);
    ?>
</body>
</html>