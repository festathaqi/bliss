<?php
// Database connection (adjust with your credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bliss";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the data (you can adjust based on your table structure)
$sql = "SELECT id, product_title, product_price, customer_first_name, customer_last_name, customer_address FROM products";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .purchase-item {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }
        .purchase-item:last-child {
            border-bottom: none;
        }
        .purchase-item p {
            margin: 5px 0;
        }
        .purchase-item .product-title {
            font-size: 18px;
            font-weight: bold;
            color: #007BFF;
        }
        .purchase-item .product-price {
            color: #28a745;
            font-size: 16px;
        }
        .purchase-item .customer-info {
            font-size: 14px;
            color: #555;
        }
        .purchase-item .address {
            font-style: italic;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Purchase Details</h1>
    
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='purchase-item'>";
            echo "<p class='product-title'>" . $row["product_title"] . "</p>";
            echo "<p class='product-price'>$" . $row["product_price"] . "</p>";
            echo "<p class='customer-info'>" . $row["customer_first_name"] . " " . $row["customer_last_name"] . "</p>";
            echo "<p class='address'>" . $row["customer_address"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No results found.</p>";
    }
    ?>

</div>

</body>
</html>

<?php
$conn->close();
?>
