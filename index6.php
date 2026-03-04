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
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index6.css">
        <title>Array Concept</title>
    </head>
    <body>
        <nav>
            <h1>Shopping List</h1>
        </nav>
        <div class="section food">
            <h2>Food Section</h2>
            <div class="card-grid">

                <div class="card">
                    <h3>Fruits</h3>
                    <ul>
                        <?php foreach ($fruits as $fruit) echo "<li>$fruit</li>"; ?>
                    </ul>
                </div>

                <div class="card">
                    <h3>Vegetables</h3>
                    <ul>
                        <?php foreach ($vegetables as $vegetable) echo "<li>$vegetable</li>"; ?>
                    </ul>
                </div>

                <div class="card">
                    <h3>Rootcrops</h3>
                    <ul>
                        <?php foreach ($rootcrops as $rootcrop) echo "<li>$rootcrop</li>"; ?>
                    </ul>
                </div>

                <div class="card">
                    <h3>Peanuts</h3>
                    <ul>
                        <?php foreach ($peanuts as $peanut) echo "<li>$peanut</li>"; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section electronics">
            <h2>Electronics Section</h2>
            <div class="card-grid">

                <div class="card">
                    <h3>TV</h3>
                    <ul>
                        <?php foreach ($tv as $television) echo "<li>$television</li>"; ?>
                    </ul>
                </div>

                <div class="card">
                    <h3>Mobile Phones</h3>
                    <ul>
                        <?php foreach ($cellphones as $cellphone) echo "<li>$cellphone</li>"; ?>
                    </ul>
                </div>

                <div class="card">
                    <h3>Appliances</h3>
                    <ul>
                        <?php foreach ($appliances as $appliance) echo "<li>$appliance</li>"; ?>
                    </ul>
                </div>

                <div class="card">
                    <h3>Watches</h3>
                    <ul>
                        <?php foreach ($watches as $watch) echo "<li>$watch</li>"; ?>
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>