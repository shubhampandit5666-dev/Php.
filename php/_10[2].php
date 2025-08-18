<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $Student_information= [[1," Ajay ",95],[2," Satyam ",98],[3," Shubham ",92]];
        for ($i=0; $i < 3; $i++) { 
           for ($j=0; $j < 3 ; $j++) { 
            echo $Student_information[$i][$j]."";
           }
           echo "<br>";
        }
    ?>
</body>
</html>