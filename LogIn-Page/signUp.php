<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliss</title>
    <link rel="stylesheet" href="./signUp.css">
</head>
<body>
    <div class="signUpPart">
        <?php
        if (isset($_POST["submit"] )) {
            $fullName = $_POST["fullname"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $errors = array();

            if (empty($fullName) OR empty($email) OR empty($username) OR empty($password) OR empty($confirm_password)) {
                array_push($errors,"All fields are required");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($errors, "Email is not valid");
            }
            if (strlen($password)<8) {
                array_push($errors,"Password must be at least 8 characters long");
            }
            if ($password!==$confirm_password) {
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
            array_push($errors, "Email already exists!");
            }
            if (count($errors)>0) {
            foreach($errors as $error){
                echo "<div class='alert alert-danger'>$error</div>";
            }
            }else{
            

                $sql = "INSERT INTO users (full_name, email, password, role) VALUES ('$fullName', '$email', '$passwordHash', '$role')";

                if (mysqli_query($conn, $sql)) {
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                } else {
                    die("Something went wrong: " . mysqli_error($conn));
                }
            }
        }
        ?>

        <h1>Bliss</h1>
        <form action="signUp.php" method="post">
            <p>Sign Up:</p>

            <input type="text" placeholder="Enter fullname" id="fullname" name="fullname" maxlength="50">
            
            <input type="email" placeholder="Enter email" id="email" name="email">

            <input type="text" placeholder="Enter username" id="username" name="username" maxlength="30">
            
            <input type="password" placeholder="Enter password" id="password" name="password" minlength="8">

            <input type="password" placeholder="Confirm password" id="confirm_password" name="confirm_password" minlength="8">

            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            <input type="submit" value="Sign Up" id="signUp" name="submit">
        </form>
    </div> 
</body>
<script src="formValidation.js"></script>

</html>