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
    <a href="index.html">Home</a>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
</nav>

<div class="register-box">
    <h2>Create Account</h2>

    <form action="regauth.php" method="POST">
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email" required>
        <input type="number" placeholder="Phone Number" required>
        <input type="password" placeholder="Password" required>
        <input type="password" placeholder="Confirm Password" required>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="login.html">Login</a></p>
</div>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>
