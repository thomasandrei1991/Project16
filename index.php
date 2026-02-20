<?php
    $name = "John";             
    $age = 30;
    $monthlysalary = 50000.00;
    function greetUser(): string{
        global $name, $age;
        return "Hello, $name! You are $age years old.";
    }  
    function calculateAnnualSalary($monthlysalary): float {
        global $monthlysalary;
        return $monthlysalary * 12;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Day 1 - PHP & MySQL</title>
    </head>
    <body>
        <h1>
            <?php
                echo greetUser();
                echo "<br> Monthly Salary : ".calculateAnnualSalary($monthlysalary);
                echo "Testing";
            ?>
        </h1>
    </body>
</html>
