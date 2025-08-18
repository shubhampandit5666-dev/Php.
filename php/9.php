<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" required>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            echo "Hello, $name! Welcome to our website.";
        }
    ?>
</body>
</html>