<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" placeholder="Enter a Number">
        <input type="submit" name="submit" value="Print table">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num'];
            for ($i=$num1; $i <= $num1*10; $i=$i + $num1) { 
                echo $i;
                echo "<br>";
            }
        }
    ?>
</body>
</html>