<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dermatology - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .appointment-btn {
    display: inline-block;
    padding: 12px 25px;
    background-color: #0056b3;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-decoration: none;
    transition: 0.3s ease-in-out;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
}

.appointment-btn:hover {
    background-color: #003f8a;
    transform: translateY(-3px);
    box-shadow: 0px 6px 12px rgba(0,0,0,0.3);
}

.appointment-btn:active {
    transform: translateY(0px);
    box-shadow: 0px 3px 6px rgba(0,0,0,0.2);
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
    <h2>Dermatology Department</h2>
    <img src="dermatology.png" class="floating-img" style="float:right;width:35%; margin-left:20px;">

    <p>
        Our <strong>Dermatology Department</strong> specializes in skin, hair, and nail treatments.
    </p>

    <h3>Treated Conditions:</h3>
    <ul>
        <li>Acne</li>
        <li>Psoriasis</li>
        <li>Eczema</li>
        <li>Skin Allergies</li>
        <li>Hair Loss</li>
    </ul>

    <h3>Services:</h3>
    <ul>
        <li>Laser Treatment</li>
        <li>Skin Biopsy</li>
        <li>Cosmetic Dermatology</li>
        <li>Anti-Aging Treatment</li>
    </ul>

    <a href="appointments.php" class="appointment-btn">Book an Appointment</a>
</div>

<footer>© 2025 CityCare Hospital</footer>
</body>
</html>

