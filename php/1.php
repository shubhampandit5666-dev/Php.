<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="Check Even/Odd">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num'];
        if ($num1 % 2==0) {
            echo "Even Number";
        }
        else {
            echo "Odd Number";
        }
    }
?>
</body>
</html>