<?php
include 'db.php';  // Your existing database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);

    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $resume_name = time() . '_' . $_FILES['resume']['name'];
        $target_dir = "uploads/";

        // Create uploads folder if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($resume_name);

        if (move_uploaded_file($_FILES['resume']['tmp_name'], $target_file)) {
            // Insert into database
            $sql = "INSERT INTO job_applications (name, email, position, resume) 
                    VALUES ('$name', '$email', '$position', '$resume_name')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Application submitted successfully!'); window.location.href='careers.php';</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Error uploading resume.";
        }
    } else {
        echo "Please upload your resume.";
    }

    mysqli_close($conn);
} else {
    echo "Invalid request.";
}
?>
