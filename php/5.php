<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h4>Enter a 1 For Additon ...</h4>
        <h4>Enter a 2 For subtraction ...</h4>
        <h4>Enter a 3 For Multiply ...</h4>
        <h4>Enter a 4 For Divison ...</h4>
        <h4>Enter a 5 For Exit ...</h4>
        <input type="number" name="num" placeholder="Choose">
        <br>
        <input type="number" name="num1" placeholder="Enter 1st number">
        <input type="number" name="num2" placeholder="Enter 2nd number">
        <input type="submit" name="submit" value="Click">
    </form>
    <?php
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num'];
            $first = $_POST['num1'];
            $second = $_POST['num2'];
            switch ($num1) {
                case 1:  
                    echo "Answer is => ",$first+$second; 
                    break;
                case 2:
                    echo "Answer is => ",$first-$second;
                    break;
                case 3:
                    echo "Answer is => ",$first*$second;
                    break;
                case 4:
                    echo "Answer is => ",$first/$second;
                    break;
                case 5:
                    exit;
                default :
                    echo "Enter a Valid choose";
            }
        }
    ?>
</body>
</html>