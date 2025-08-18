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
        <input type="submit" name="submit" value="Check Prime/Not Prime No">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num'];
            for ($i=2; $i < $num1; $i++) { 
                if ($num1 % $i == 0){
                    echo $num1," is Compositive Number ...";
                    break;
                }
                elseif ($i == $num1-1) {
                    echo $num1," is Prime Number ...";
                    break;
                }
            }
        }
?>
</body>
</html>