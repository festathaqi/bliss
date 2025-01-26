<?php
// Lidhja me bazën e të dhënave
$servername = "localhost";
$username = "root"; // Ndrysho sipas konfigurimit të serverit
$password = "";
$dbname = "bliss";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Merr të dhënat nga forma
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Ruaj të dhënat në tabelë
    $sql = "INSERT INTO contact_us (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message sent successfully!";
        header("Location: thank_you.html"); // QITA SPEDI QYSH MI BO ?
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
