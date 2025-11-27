<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .register-box {
            width: 420px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
            text-align: center;
        }
        .register-box input, .register-box button {
            width: 90%;
            padding: 12px;
            margin: 12px 0;
            font-size: 16px;
            border: 1px solid #777;
            border-radius: 8px;
        }
        .register-box button {
            background: #0077b6;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .register-box button:hover {
            background: #023e8a;
        }
        .register-box a {
            color: #0077b6;
            text-decoration: none;
        }
        .register-box a:hover {
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

<div class="register-box">
    <h2>Create Account</h2>
    <form method="POST">
        <input type="text" name="fullname" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="number" name="phone" placeholder="Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>

        <button type="submit" name="register">Register</button>
    </form>
</div>

<?php
if (isset($_POST['register'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password !== $cpassword) {
        echo "<p style='color:red;'>Passwords do not match!</p>";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(fullname, email, phone, password)
                VALUES('$fullname', '$email', '$phone', '$hashed_password')";

        if (mysqli_query($conn, $sql)) {
            echo "<p style='color:green;'>Registration Successful!</p>";
        } else {
            echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
        }
    }
}
?>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>

    