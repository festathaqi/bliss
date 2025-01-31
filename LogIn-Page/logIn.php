<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bliss</title>
    <link rel="stylesheet" href="./logIn.css">
</head>
<body>
    <div class="section">
        <div class="mainBox">
            <?php
            require_once "../database.php";

            if (isset($_POST["logIn"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $sql = "SELECT * FROM users WHERE email ='$email'";
                $result = mysqli_query($conn, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

                if ($user) {
                    if (password_verify($password, $user["password"])) {
                        session_start();

                        $_SESSION["user_id"] = $user["id"];
                        $_SESSION["full_name"] = $user["full_name"];
                        $_SESSION["user_email"] = $user["email"];
                        $_SESSION["user_role"] = $user["role"];

                        if($user['role'] == 'admin'){
                            header("Location: ../dashboard.php");
                        }else{
                            header("Location: ../index.php");
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Password does not match</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>Email does not match</div>";
                }
            }
            ?>
            <h1>Bliss</h1>
            <div class="logInPart">
                <p>Log in to your account:</p>
                <form class="logInForm" action="logIn.php" method="post">
                    <input placeholder="Enter Email" type="email" id="email" name="email" required minlength="8">
                    <input placeholder="Enter Password" type="password" id="password" name="password" required minlength="8">
                    <input type="submit" value="Log In" id="logIn" name="logIn">
                </form>
                <p>Don't have an account? <a href="./signUp.php">Register</a></p>
            </div>
        </div>
    </div>
</body>
<script src="formValidation.js"></script>
</html>
