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
        <input type="submit" name="submit" value="Calculate Factorial">
    </form>
    <?php
        $fact = 1;
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num'];
            if ($num1 == 0){
            echo "Factorial of ",$num1," is => 1";
            }
            else {
                for ($i=$num1; $i > 0 ; $i--) { 
                $fact = $fact*$i;   
                }
            echo "Factorial of ",$num1," is => ",$fact;
            }
        }
    ?>
</body>
</html>