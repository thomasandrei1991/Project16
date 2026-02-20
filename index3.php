<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
        switch ($op) {
            case "+":
                $total = $num1 + $num2;
                break;
            case "-":
                $total = $num1 - $num2;
                break;
            case "*":
                $total = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $total = $num1 / $num2;
                } else {
                    $total = "Error: Division by zero";
                }
                break;
            default:
                $total = "Invalid operator";
        }
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
        <form action="index3.php" method="post">
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <select name="op">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <button type="submit">Calculate</button>
            <h2>
                <?php
                    echo "<br>Result: " . $total;
                ?>
            </h2>
        </form>
    </body>
</html>