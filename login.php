<?php
session_start(); 
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .login-box {
            width: 380px;
            margin: 70px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
            text-align: center;
        }
        .login-box input, .login-box button {
            width: 90%;
            padding: 12px;
            margin: 12px 0;
            font-size: 16px;
            border: 1px solid #777;
            border-radius: 8px;
        }
        .login-box button {
            background: #0077b6;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .login-box button:hover {
            background: #023e8a;
        }
        .login-box a {
            color: #0077b6;
            text-decoration: none;
        }
        .login-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</nav>

<div class="login-box">
    <h2>Login</h2>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>
    </form>

    <!-- Forgot Password link -->
    <p><a href="forgot_password.php">Forgot Password?</a></p>
</div>

<?php
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND phone='$phone'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {

            // Store session data
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['fullname'] = $row['fullname'];

            // Redirect to homepage
            header("Location: index.php");
            exit();
        } 
        else {
            echo "<p style='color:red; text-align:center;'>Incorrect Password!</p>";
        }
    } 
    else {
        echo "<p style='color:red; text-align:center;'>Email or Phone number not found!</p>";
    }
}
?>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>
