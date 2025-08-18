<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age" placeholder="Enter your age">
        <input type="submit" name="submit" value="Submit (GET)">
    </form>
    <form method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age" placeholder="Enter your age">
        <input type="submit" name="submit" value="Submit (POST)">
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $name = $_POST["name"];
            $age = $_POST["age"];
            echo "Hello, $name! You are $age years old.";
        }   
        elseif (isset($_GET["submit"])) {
            $name = $_GET["name"];
            $age = $_GET["age"];
            echo "Hello, $name! You are $age years old.";
        }
    ?>
</body>
</html>