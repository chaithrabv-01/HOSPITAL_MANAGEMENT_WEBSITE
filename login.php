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
    <a href="index.html">Home</a>
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
</nav>

<div class="login-box">
    <h2>Login</h2>

    <form>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <p>New user? <a href="register.html">Create an account</a></p>
</div>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>
