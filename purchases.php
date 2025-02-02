<?php
// Database connection
$servername = "localhost";
$username = "root"; // Use your database username
$password = ""; // Use your database password
$dbname = "bliss"; // Use your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get purchase records from the database
$sql = "SELECT * FROM purchases ORDER BY id DESC"; // Use 'id' or the correct column name for your primary key
$result = $conn->query($sql);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0c7d3;
            margin: 0;
            padding: 0;
        }
        .table-container {
            margin: 30px auto;
            padding: 15px;
            background-color: #fff;
            width: 80%; /* Adjust the width to 80% */
            max-width: 900px; /* Set a smaller max-width */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #7f2549;
            color: white;
        }
        td {
            background-color: #f9f9f9;
        }
        h1 {
            color: #600f3e;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h1>Purchase History</h1>
        
        <?php
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Order ID</th><th>Product Title</th><th>Price</th><th>Customer First Name</th><th>Customer Last Name</th><th>Customer Address</th></tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>"; // Display the order ID
                echo "<td>" . htmlspecialchars($row['product_title']) . "</td>"; // Display the product title
                echo "<td>$" . number_format($row['product_price'], 2) . "</td>"; // Display the price with 2 decimal places
                echo "<td>" . htmlspecialchars($row['customer_first_name']) . "</td>"; // Display the customer's first name
                echo "<td>" . htmlspecialchars($row['customer_last_name']) . "</td>"; // Display the customer's last name
                echo "<td>" . htmlspecialchars($row['customer_address']) . "</td>"; // Display the customer address
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "<p>No purchases found.</p>";
        }

        $conn->close();
        ?>

    </div>

</body>
</html>
