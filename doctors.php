<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctors - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="departments.php">Departments</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>

    <!-- If NOT logged in -->
    <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>

    <!-- If logged in -->
    <?php else: ?>
        <a href="doctors.php">Doctors</a>
        <a href="appointments.php">Appointments</a>
        <a href="careers.php">Careers</a>
        <a href="blood_bank.php">Blood Bank</a>
        <a href="organ_donor.php">Organ Donor</a>

        <span style="margin-left:20px; font-weight:bold;">
            Welcome, <?php echo $_SESSION['fullname']; ?>
        </span>

        <a href="logout.php" style="color:red;">Logout</a>
    <?php endif; ?>
</nav>


<div class="container">
    <h2>Our Doctors</h2>

    <a href="doctor-asha.php" class="doctor-link">
    <div class="doctor-card">
        <img src="asha.png">
        <div>
            <h3>Dr. Asha Rao</h3>
            <p>Cardiologist</p>
        </div>
    </div>
    </a>

    <a href="doctor-rohan.php" class="doctor-link">
    <div class="doctor-card">
        <img src="rohan.png">
        <div>
            <h3>Dr. Rohan Kumar</h3>
            <p>Neurologist</p>
        </div>
    </div>
    </a>

    <a href="doctor-priya.php" class="doctor-link">
    <div class="doctor-card">
        <img src="priya.png">
        <div>
            <h3>Dr. Priya Sharma</h3>
            <p>Pediatric Specialist</p>
        </div>
    </div>
    </a>
</div>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>
