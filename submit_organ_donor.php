<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $organ = mysqli_real_escape_string($conn, $_POST['organ']);
    $blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);

    $sql = "INSERT INTO organ_donors (name, email, phone, organ, blood_group) 
            VALUES ('$name', '$email', '$phone', '$organ', '$blood_group')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you for registering as an organ donor!'); window.location.href='organ_donor.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
