<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CityCare Hospital - Home</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="departments.php">Departments</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>

    <!-- If user NOT logged in -->
    <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>

    <!-- If user IS logged in -->
    <?php else: ?>
        <a href="doctors.php">Doctors</a>
        <a href="appointments.php">Appointments</a>
        <a href="careers.php">Careers</a>
        <a href="blood_bank.php">Blood Bank</a>
        <a href="organ_donor.php">Organ Donor</a>

        <!-- show user name and logout -->
        <span style="margin-left:20px; font-weight: bold;">
            Welcome, <?php echo $_SESSION['fullname']; ?>
        </span>

        <a href="logout.php" style="color:red;">Logout</a>
    <?php endif; ?>
</nav>

<section class="hero">
    <div class="hero-text">
        <h2>Your Health, Our Priority</h2>
        <p>World-class treatments and experienced doctors available 24/7.</p>
    </div>

    <img src="hospital.png" class="float-img" alt="Hospital">
</section>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html> 