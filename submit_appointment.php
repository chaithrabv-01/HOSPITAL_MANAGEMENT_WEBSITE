<?php
include 'db.php'; 

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];
$date = $_POST['date'];

// Insert into database
$sql = "INSERT INTO appointments (fullname, email, phone, department, date)
          VALUES ('$fullname', '$email', '$phone', '$department', '$date')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Appointment Booked Successfully!</h2>";
    echo "<a href='appointments.php'>Go Back</a>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
