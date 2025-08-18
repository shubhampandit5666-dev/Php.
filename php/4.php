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
        <input type="submit" name="submit" value="Calculate Fibonacci">
    </form>
    <?php
        $first = 0;
        $second = 1;
        $fib = 1;
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num'];
            for ($i=1; $i <= $num1 ; $i++) { 
                if ($num1 == 0 ){
                    echo "Fibonacci is => ",$num1;
                    break;
                }
                else {
                    $second = $first;
                    $first = $fib;
                    $fib = $first + $second;
                }
            }
            echo "Fibonacci is => ",$first;
        }
    ?>
</body>
</html>