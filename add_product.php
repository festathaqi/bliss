<?php

require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    
    $image_path = $_FILES["image_path"]["name"];
    $target_dir = "images/"; 
    $target_file = $target_dir . basename($image_path);
    
    $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    
    if (in_array($image_file_type, $allowed_types)) {
        if (move_uploaded_file($_FILES["image_path"]["tmp_name"], $target_file)) {
       
            $sql = "INSERT INTO products (name, price, description, image_path)
                    VALUES ('$name', '$price', '$description', '$image_path')";
            
            $conn->query($sql);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
    }
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
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #7f2549, #f0c7d3);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #7f2549;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
            color: #7f2549;
        }

        input, textarea, button {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="number"] {
            -moz-appearance: textfield; 
        }

        button {
            background: #7f2549;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #5e1c38;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Product</h1>
        <form method="POST" action="add_product.php" enctype="multipart/form-data">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required></textarea>

            <label for="image_path">Product Image:</label>
            <input type="file" id="image_path" name="image_path" accept="image/*">

            <button type="submit">Add Product</button>
        </form>
    </div>
</body>
</html>
