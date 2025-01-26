<?php
// Lidhja me bazën e të dhënave
$conn = new mysqli("localhost", "root", "", "bliss");

// Kontrollo lidhjen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Përpunimi i formularit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $imagePath = "";

    // Ngarko imazhin
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        $imagePath = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }

    // Fut të dhënat në bazë
    $sql = "INSERT INTO products (name, price, description, image_path, created_at) 
            VALUES ('$name', '$price', '$description', '$imagePath', NOW())";

    echo $conn->query($sql) === TRUE 
        ? "Product added successfully!" 
        : "Error: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #7f2549, #f0c7d3);
            color: #fff;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: 0 auto;
            color: #000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        form button {
            background: #7f2549;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        form button:hover {
            background: #5e1c38;
        }

        .success-message {
            text-align: center;
            color: #00c851;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-message {
            text-align: center;
            color: #ff4444;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Add Product</h1>
    <form method="POST" action="add_product.php" enctype="multipart/form-data">
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea>

        <label for="image">Product Image:</label>
        <input type="file" id="image" name="image" accept="image/*">

        <button type="submit">Add Product</button>
    </form>
</body>
</html>
