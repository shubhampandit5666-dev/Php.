<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $student = array("Ajay" => 83, "Shubham" => 86, "Anil" => 94, "Ravi" => 94, "Abhishek" => 99);
        foreach ($student as $student_marks => $marks) {
            echo "$student_marks: $marks";
            echo "<br>";
        }
    ?>
</body>
</html>
