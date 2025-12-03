<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Verify OTP</title>
    <style>
        .box {
            width: 380px;
            margin: 70px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 12px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Enter OTP</h2>

    <form method="POST">
        <input type="number" name="otp" placeholder="Enter OTP" required>
        <button type="submit" name="verify">Verify</button>
    </form>
</div>

<?php
if (isset($_POST['verify'])) {

    if ($_POST['otp'] == $_SESSION['fp_otp']) {

        echo "<p style='color:green; text-align:center;'>OTP Verified!</p>";
        echo "<p style='text-align:center;'><a href='reset_password.php'>Reset Password</a></p>";

    } else {
        echo "<p style='color:red; text-align:center;'>Incorrect OTP!</p>";
    }
}
?>
</body>
</html>
