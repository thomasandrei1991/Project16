<?php
    require_once 'index5_dbconnection.php';
    $username = 'babalu123';
    $plain_password = 'babalu123';
    $hash = password_hash($plain_password, PASSWORD_BCRYPT);
    $message = '';

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (?, ?)");
        $stmt->execute([$username, $hash]);
        $message = "User <strong>$username</strong> created successfully!";
    } 
    catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $message = "Username <strong>$username</strong> already exists.";
        } else {
            $message = "Insert error: " . $e->getMessage();
        }
    }
    $users = [];
    try {
        $stmt = $pdo->query("SELECT id, username FROM users ORDER BY id DESC");
        $users = $stmt->fetchAll();
    }
    catch (PDOException $e) {
        $message .= "<br>Select error: " . $e->getMessage();
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
        <form action=""></form>
    </body>
</html>