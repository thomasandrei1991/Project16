<?php   
    $fruits = array("Apple", "Banana", "Cherry", "Blueberry", "Pomegronate");
    $vegetables = array("Carrot", "Brocolli", "lettuce", "Ladyfinger", "Speenach");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index6.css">
        <title>Array Concept</title>
    </head>
    <body>
        <div class="body-container">
            <div class="fruit-container">
                <h3>List of Fruits</h3>
                <ul>
                    <?php 
                        foreach ($fruits as $fruit) {
                            echo "<li>" . $fruit . "</li>";
                        }
                    ?>
                </ul>
            </div>
            <div class="vegetable-container">
                <h3>List of Vegetables</h3>
                <ul>
                    <?php 
                        foreach ($vegetables as $vegetable) {
                            echo "<li>" . $vegetable . "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </body>
</html>