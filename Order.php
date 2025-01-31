<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0c7d3; 
            height: 100vh;
            margin: 0;
        }
        * {
            font-family: 'Ogg', sans-serif;
        }
        .signUpPart {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 500px;
            padding: 20px;
            text-align: center;
        }
        .signUpPart h1, .signUpPart p {
            color: #600f3e; 
            font-weight: bold;
        }
        .signUpPart p {
            font-size: 17px;
        }
        a {
            text-decoration: none;
            background-color: #600f3e; 
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }
        a:hover {
            background-color: #7f2549;
        }
    </style>
</head>
<body>
    <div class="signUpPart">
        <h1>Thank you for your order. We’re processing it now.</h1>
        <a href="index.php">Go Back to Home</a>
    </div>
</body>
</html>
