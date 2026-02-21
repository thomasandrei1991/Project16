<?php   
    // Food Section
    $fruits = array("Apple", "Banana", "Cherry", "Blueberry", "Pomegronate");
    $vegetables = array("Cabbage", "Brocolli", "lettuce", "Ladyfinger", "Speenach");
    $rootcrops = array("Carrot", "Turnip", "Fennel", "Radish", "Celeriac");
    $peanuts = array("Virginia", "Runner", "Spanish", "Valencia", "Tennessee Red");

    // Electronics Section
    $tv = array("Samsung", "Sony", "LG", "Toshiba", "Panasonic");
    $cellphones = array("Apple", "Samsung", "Huawei", "Xiaomi", "Oppo");
    $appliances = array("Refrigerator", "Washing Machine", "Microwave Oven", "Air Conditioner", "Vacuum Cleaner");
    $watches = array("Rolex", "Omega", "Tag Heuer", "Patek Philippe", "Audemars Piguet");
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
        <nav>
            <h1>Shopping List</h1>
        </nav>
        <div class="food-section">
            <div class="food-container">
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
                <div class="rootcrop-container">
                    <h3>List of Rootcrops</h3>
                    <ul>
                        <?php 
                            foreach ($rootcrops as $rootcrop) {
                                echo "<li>" . $rootcrop . "</li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="peanut-container">
                    <h3>List of Peanuts</h3>
                    <ul>
                        <?php 
                            foreach ($peanuts as $peanut) {
                                echo "<li>" . $peanut . "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="electronics-section">
            <div class="gadget-container">
                <div class="tv-container">
                    <h3>List of TV</h3>
                    <ul>
                        <?php 
                            foreach ($tv as $television) {
                                echo "<li>" . $television . "</li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="cellphone-container">
                    <h3>List of Mobile Phones</h3>
                    <ul>
                        <?php 
                            foreach ($cellphones as $cellphone){
                                echo "<li>" . $cellphone . "</li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="appliances-container">
                    <h3>List of Appliances</h3>
                    <ul>
                        <?php 
                            foreach ($appliances as $appliance) {
                                echo "<li>" . $appliance . "</li>";
                            }
                        ?>
                    </ul>
                </div>
                <div class="watch-container">
                    <h3>List of Peanuts</h3>
                    <ul>
                        <?php 
                            foreach ($watches as $watch) {
                                echo "<li>" . $watch . "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>