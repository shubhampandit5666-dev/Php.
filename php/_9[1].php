<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $avg_num = array(25,35,38,36,56);
    $sum = array_sum($avg_num);
    echo "Average of ",$sum/count($avg_num);
    ?>
</body>
</html>