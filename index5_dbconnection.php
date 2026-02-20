<?php
    $host = 'localhost';      
    $dbname = 'db_sample2';    // ← change to your database name
    $username = "root";    // default in XAMPP
    $password = "";    // usually 'localhost' in XAMPP
    try {
        $pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $username,
            $password
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        echo "Connected successfully!";
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
?>