<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" placeholder="Enter a Year">
        <input type="submit" name="submit" value="Check Leap Year">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num'];
            if ($num1 % 4 == 0){
                echo $num1," is a Leap year ";
            }
            else {
                echo $num1," is not a Leap year ";
            }
        }
    ?>
</body>
</html>