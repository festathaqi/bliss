<?php

require_once 'database.php';

$sql = "SELECT full_name, email, role FROM users";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
    <link rel="stylesheet" href="view_users.css">
</head>
<body>
    <div class="container">
        <h1>Users</h1>
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['full_name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['role']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>
