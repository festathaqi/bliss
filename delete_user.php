<?php
require_once 'database.php';
session_start();

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("User ID is missing.");
}

$id = (int) $_GET['id'];

$delete_sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $delete_sql)) {
    header("Location: view_users.php");
    exit();
} else {
    echo "Error deleting user: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
