<?php
session_start();
require 'connect/connect.php';

if (isset($_POST["save"])) {
    $oldPassword = $_POST['op'];
    $newPassword = $_POST['np'];
    $confirmPassword = $_POST['cp'];

    // Retrieve the user's ID or username from the session or any other source
    $userId = $_SESSION['id'];

    // Check if the new password and confirm password match
    if ($newPassword != $confirmPassword) {
        echo "<script>alert('Passwords do not match. Please try again.');</script>";
        echo "<script>window.location.href = 'resetpass.php';</script>";
        exit;
    }

    // Retrieve the user's existing password from the database
    $sql = "SELECT Password FROM user WHERE ID = '$userId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $existingPassword = $row['Password'];

    // Check if the old password matches the existing password
    if ($oldPassword != $existingPassword) {
        echo "<script>alert('Old password is incorrect. Please try again.');</script>";
        echo "<script>window.location.href = 'resetpass.php';</script>";
        exit;
    }

    // Update the user's password in the database
    $updateSql = "UPDATE user SET Password = '$newPassword' WHERE ID = '$userId'";
    $updateResult = mysqli_query($conn, $updateSql);

    if ($updateResult) {
        header("Location: login.php");
        
    } else {
        header("Location: login.php");
        
    }
}
?>

<!-- Your HTML code for the password reset page -->
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- ... your HTML code here ... -->
</body>
</html>

<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="head">
        <h1>Online Voting<br> System</h1>   
    </div>

    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Reset Password</span>
                <header>Login</header>
            </div>

            <div class="input-details">
                <form method="post">
                    <input type="password" class="input" name="op" placeholder="Enter Old password" required>
                    <br>
                    <input type="password" class="input" name="np" placeholder="Enter new Password" required>
                    <br>
                    <input type="password" class="input" name="cp" placeholder="Confirm Password" required>
                    <br>
                    <input type="submit" class="submit" name="save" value="Submit">
                </form>
            </div>

            <div class="sign">
                <label>Not Registered?</label>
                <label><a id="sign" href="signup.php">Create an account</a></label>
            </div>

            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="check">
                    <label for="check">Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
