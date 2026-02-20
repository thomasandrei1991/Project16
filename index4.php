<?php
    require_once 'index4_dbconnection.php';  // your connection file

    // ────────────────────────────────────────────────
    // PART 1: Try to INSERT a new user
    // ────────────────────────────────────────────────

    $username = 'thomas123';
    $plain_password = 'secret123';
    $hash = password_hash($plain_password, PASSWORD_BCRYPT);
    $message = '';

    try {
        $stmt = $pdo->prepare("
            INSERT INTO users 
            (username, password_hash) 
            VALUES (?, ?)
        ");
        $stmt->execute([$username, $hash]);
        $message = "User <strong>$username</strong> created successfully!";
    } 
    catch (PDOException $e) {
        if ($e->getCode() == 23000) {  // duplicate entry
            $message = "Username <strong>$username</strong> already exists.";
        } else {
            $message = "Insert error: " . $e->getMessage();
        }
    }
    $users = [];
    try {
        // If table has created_at → use: SELECT id, username, created_at ...
        // If table does NOT have created_at → use: SELECT id, username ...
        
        $stmt = $pdo->query("SELECT id, username FROM users ORDER BY id DESC");
        // ↑ change to ↓ if you already added created_at column
        // $stmt = $pdo->query("SELECT id, username, created_at FROM users ORDER BY id DESC");
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
        <link rel="stylesheet" href="index4.css">
        <title>DB Connection Tutorial</title>
    </head>
    <body>
        <h1>Users</h1>
        <?php if ($message): ?>
            <div class="message"><?= $message ?></div>
        <?php endif; ?>
        <?php if ($users): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <!-- <th>Created</th>   ← uncomment if column exists -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <!-- <td><?= htmlspecialchars($row['created_at'] ?? '—') ?></td> -->
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p><em>No users found.</em></p>
        <?php endif; ?>
    </body>
</html>