<?php
    // db.php - Database connection using PDO (best practice)

    $host     = 'localhost';          // usually 'localhost' in XAMPP
    $dbname   = 'db_sample1';           // ← change to your database name
    $username = 'root';               // default in XAMPP
    $password = '';                   // default is empty in XAMPP

    try {
        // Create PDO connection
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );

        // Set error mode to throw exceptions (very helpful for debugging)
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Optional but good: make fetched data associative by default
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // If you see this message → connection works!
        // echo "Connected successfully!";

    } catch (PDOException $e) {
        // If connection fails, show the error (only during development!)
        die("Connection failed: " . $e->getMessage());
    }
?>