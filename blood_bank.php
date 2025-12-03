<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Bank - CityCare Hospital</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>CityCare Multi-Specialty Hospital</header>

<nav>
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="appointments.php">Appointments</a>
    <a href="careers.php">Careers</a>
    <a href="blood_bank.php" class="active">Blood Bank</a>
    <a href="contact.php">Contact</a>
</nav>

<main>
    <h1>Blood Bank</h1>
    <p>CityCare Hospital maintains a well-stocked blood bank for patients in need. Check availability and request blood below.</p>

    <section class="blood-availability">
        <h2>Available Blood Groups</h2>
        <table border="1" cellpadding="10">
            <tr>
                <th>Blood Group</th>
                <th>Units Available</th>
            </tr>
            <tr>
                <td>A+</td>
                <td>12</td>
            </tr>
            <tr>
                <td>A-</td>
                <td>5</td>
            </tr>
            <tr>
                <td>B+</td>
                <td>8</td>
            </tr>
            <tr>
                <td>B-</td>
                <td>3</td>
            </tr>
            <tr>
                <td>O+</td>
                <td>15</td>
            </tr>
            <tr>
                <td>O-</td>
                <td>6</td>
            </tr>
            <tr>
                <td>AB+</td>
                <td>4</td>
            </tr>
            <tr>
                <td>AB-</td>
                <td>2</td>
            </tr>
        </table>
    </section>

    <section class="blood-request">
        <h2>Request Blood</h2>
        <form action="submit_blood_request.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

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

            <label for="units">Units Required:</label>
            <input type="number" id="units" name="units" min="1" required>

            <button type="submit">Submit Request</button>
        </form>
    </section>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> CityCare Hospital. All rights reserved.
</footer>

</body>
</html>
