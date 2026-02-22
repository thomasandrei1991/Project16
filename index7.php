<?php
    function loginDetails($name, $age){
        echo "<br>Name: " . htmlspecialchars($name) . ", <br>Age: " . htmlspecialchars($age);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="index7.php" method="post">
            <input type="text" name="name" placeholder="Enter your name"><br>
            <input type="text" name="age" placeholder="Enter your age"><br>
            <input type="submit" value="Submit">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $age = $_POST["age"];
                loginDetails($name, $age);
            }
        ?>
    </body>
</html>