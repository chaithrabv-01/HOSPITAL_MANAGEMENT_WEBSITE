<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
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
        input, button {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
        }
        button {
            background: #0077b6;
            color: white;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Forgot Password</h2>

    <form method="POST">
        <input type="email" name="email" placeholder="Enter Email" required>
        <input type="text" name="phone" placeholder="Enter Phone Number" required>
        <button type="submit" name="send_otp">Send OTP</button>
    </form>
</div>

<?php
if (isset($_POST['send_otp'])) {

    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Check if user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND phone='$phone'";
    $run = mysqli_query($conn, $sql);

    if (mysqli_num_rows($run) == 1) {

        // Generate OTP
        $otp = rand(100000, 999999);

        // Store info in session
        $_SESSION['fp_email'] = $email;
        $_SESSION['fp_phone'] = $phone;
        $_SESSION['fp_otp'] = $otp;

        echo "<p style='color:green; text-align:center;'>OTP Sent: <b>$otp</b> (for demo)</p>";

        echo "<p style='text-align:center;'><a href='otp_verify_fp.php'>Enter OTP</a></p>";

    } else {
        echo "<p style='color:red; text-align:center;'>Invalid Email or Phone Number!</p>";
    }
}
?>
</body>
</html>
