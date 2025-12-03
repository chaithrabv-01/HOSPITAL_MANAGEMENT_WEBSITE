<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
    $units = (int)$_POST['units'];

    $sql = "INSERT INTO blood_requests (name, email, blood_group, units) 
            VALUES ('$name', '$email', '$blood_group', '$units')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Blood request submitted successfully!'); window.location.href='blood_bank.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
