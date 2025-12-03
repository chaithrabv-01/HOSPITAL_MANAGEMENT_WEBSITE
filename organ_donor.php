<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organ Donor - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="appointments.php">Appointments</a>
    <a href="careers.php">Careers</a>
    <a href="blood_bank.php">Blood Bank</a>
    <a href="organ_donor.php" class="active">Organ Donor</a>
    <a href="contact.php">Contact</a>
</nav>

<main>
    <h1>Organ Donor Registration</h1>
    <p>Register as an organ donor to save lives. Fill in the form below to become a registered donor.</p>

    <section class="donor-form">
        <h2>Register as Organ Donor</h2>
        <form action="submit_organ_donor.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="phone" required>

            <label for="organ">Organ(s) willing to donate:</label>
            <select id="organ" name="organ" required>
                <option value="">--Select--</option>
                <option value="Kidney">Kidney</option>
                <option value="Liver">Liver</option>
                <option value="Heart">Heart</option>
                <option value="Lungs">Lungs</option>
                <option value="Pancreas">Pancreas</option>
                <option value="Cornea">Cornea</option>
                <option value="Other">Other</option>
            </select>

            <label for="blood_group">Blood Group:</label>
            <select id="blood_group" name="blood_group" required>
                <option value="">--Select--</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </section>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> CityCare Hospital. All rights reserved.
</footer>

</body>
</html>
