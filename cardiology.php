<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cardiology - CityCare Hospital</title>
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
    <h2>Cardiology Department</h2>
    <img src="cardiology.png" class="floating-img" style="float:right;width:35%; margin-left:20px;">

    <p>
        The <strong>Cardiology Department</strong> offers world-class diagnosis and treatment
        for heart and blood vessel conditions.
    </p>

    <h3>We Treat Conditions Like:</h3>
    <ul>
        <li>Heart Attack</li>
        <li>Arrhythmia</li>
        <li>High Blood Pressure</li>
        <li>Heart Failure</li>
        <li>Valve Disorders</li>
    </ul>

    <h3>Services Offered:</h3>
    <ul>
        <li>ECG, ECHO & Treadmill Testing</li>
        <li>Angiography & Angioplasty</li>
        <li>Pacemaker Implantation</li>
        <li>Coronary Bypass Surgery</li>
    </ul>

    <a href="appointments.php" class="appointment-btn">Book an Appointment</a>
</div>

<footer>© 2025 CityCare Hospital</footer>
</body>
</html>
