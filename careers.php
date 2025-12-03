<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Careers - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="appointments.php">Appointments</a>
    <a href="careers.php" class="active">Careers</a>
    <a href="contact.php">Contact</a>
</nav>

<main>
    <h1>Join Our Team</h1>
    <p>CityCare Hospital is always looking for talented professionals to join our team. Explore our current openings below.</p>

    <section class="job-listings">
        <h2>Current Openings</h2>
        <ul>
            <li>
                <strong>Registered Nurse</strong> - Full Time
                <p>Requirements: B.Sc Nursing, 1+ year experience in hospital settings.</p>
            </li>
            <li>
                <strong>Lab Technician</strong> - Full Time
                <p>Requirements: Diploma in Medical Lab Technology, 1+ year experience.</p>
            </li>
            <li>
                <strong>Receptionist</strong> - Part Time
                <p>Requirements: Good communication skills, basic computer knowledge.</p>
            </li>
        </ul>
    </section>

    <section class="apply-form">
        <h2>Apply Now</h2>
        <form action="submit_application.php" method="post" enctype="multipart/form-data">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="position">Position Applying For:</label>
            <select id="position" name="position" required>
                <option value="">--Select--</option>
                <option value="Registered Nurse">Registered Nurse</option>
                <option value="Lab Technician">Lab Technician</option>
                <option value="Receptionist">Receptionist</option>
            </select>

            <label for="resume">Upload Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

            <button type="submit">Submit Application</button>
        </form>
    </section>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> CityCare Hospital. All rights reserved.
</footer>

</body>
</html>
