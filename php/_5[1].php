<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Arrar = array("ajay","satyam","adarsh");
    array_push($Arrar,"Shubham");
    print_r ($Arrar);
    echo "<br>";
    array_pop($Arrar);
    print_r ($Arrar);
    ?>
</body>
</html>