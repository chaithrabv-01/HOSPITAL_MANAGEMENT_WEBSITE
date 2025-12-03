<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Specialties - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .spec-item {
    display: block;
    background: #c9f2ff;
    padding: 18px;
    margin: 15px 0;
    border-radius: 12px;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
    color: #000;
    transition: 0.3s;
}

.spec-item:hover {
    background: #b2ebff;
    transform: translateX(8px);
}

    </style>
</head>

<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="departments.php">Specialties</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact Us</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</nav>

<div class="container">
    <h2>Our Specialties</h2>

    <!-- Make each specialty clickable -->
    <a href="cardiology.php" class="spec-item">Cardiology</a>
    <a href="neurology.php" class="spec-item">Neurology</a>
    <a href="orthopedics.php" class="spec-item">Orthopedics</a>
    <a href="pediatrics.php" class="spec-item">Pediatrics</a>
    <a href="dermatology.php" class="spec-item">Dermatology</a>
    <a href="oncology.php" class="spec-item">Oncology</a>
</div>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>
