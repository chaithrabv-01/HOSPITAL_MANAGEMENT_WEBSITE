<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pediatrics - CityCare Hospital</title>
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
    <a href="doctors.php">Doctors</a>
    <a href="services.php">Services</a>
    <a href="appointments.php">Appointments</a>
    <a href="contact.php">Contact Us</a>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
</nav>

<div class="container">
    <h2>Pediatrics Department</h2>
    <img src="pediatrician.png" class="floating-img" style="float:right; width:35%;margin-left:20px;">

    <p>
        The <strong>Pediatrics Department</strong> provides comprehensive care
        for newborns, infants, children, and adolescents.
    </p>

    <h3>Common Treatments:</h3>
    <ul>
        <li>Childhood Fever & Infections</li>
        <li>Asthma Care</li>
        <li>Growth Monitoring</li>
        <li>Vaccinations</li>
        <li>Neonatal Care</li>
    </ul>

    <h3>Services:</h3>
    <ul>
        <li>24/7 Emergency Pediatric Care</li>
        <li>NICU & PICU</li>
        <li>Child Nutrition Guidance</li>
        <li>Developmental Screening</li>
    </ul>

    <a href="appointments.php" class="appointment-btn">Book an Appointment</a>
</div>

<footer>© 2025 CityCare Hospital</footer>
</body>
</html>

