<?php
session_start();

// Check if user is logged in
$logged_in = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointments - CityCare Hospital</title>
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
    <h2>Smart Appointment System</h2>

    <!-- Appointment Form -->
    <form class="appointment-form" action="submit_appointment.php" method="POST">

        <input type="text" name="fullname" placeholder="Full Name" 
               value="<?php echo $logged_in ? $_SESSION['fullname'] : ''; ?>" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="number" name="phone" placeholder="Phone Number" required>

        <select name="department" required>
            <option value="">Select Department</option>
            <option>Cardiology</option>
            <option>Neurology</option>
            <option>Orthopedics</option>
            <option>Pediatrics</option>
        </select>

        <input type="date" name="date" required>

        <button type="submit">Book Appointment</button>
    </form>
</div>

<footer>© 2025 CityCare Hospital. All Rights Reserved.</footer>

</body>
</html>
