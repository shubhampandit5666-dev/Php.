<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter a first number">
        <input type="number" name="num2" placeholder="Enter a second number">
        <input type="number" name="num3" placeholder="Enter a third number">
        <input type="submit" name="submit" value="Check Largest Number">
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        if ($num1 > $num2 && $num1 > $num3) {
            echo "$num1 is Large Number";
        }
        elseif ($num2 > $num3) {
            echo "$num2 is Large Number";
        }
        else {
            echo "$num3 is Large Number";
        }
    }
?>
</body>
</html>