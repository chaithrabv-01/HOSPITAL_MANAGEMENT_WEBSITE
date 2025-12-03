<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        .box {
            width: 380px;
            margin: 70px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
            text-align: center;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Reset Password</h2>

    <form method="POST">
        <input type="password" name="newpass" placeholder="New Password" required>
        <input type="password" name="confpass" placeholder="Confirm Password" required>
        <button type="submit" name="reset">Update Password</button>
    </form>
</div>

<?php
if (isset($_POST['reset'])) {

    $new = $_POST['newpass'];
    $conf = $_POST['confpass'];

    if ($new != $conf) {
        echo "<p style='color:red; text-align:center;'>Passwords do not match!</p>";
        exit;
    }

    $email = $_SESSION['fp_email'];

    $hashed = password_hash($new, PASSWORD_DEFAULT);

    mysqli_query($conn, "UPDATE users SET password='$hashed' WHERE email='$email'");

    echo "<p style='color:green; text-align:center;'>Password Updated Successfully!</p>";
    echo "<p style='text-align:center;'><a href='login.php'>Login</a></p>";
}
?>
</body>
</html>
