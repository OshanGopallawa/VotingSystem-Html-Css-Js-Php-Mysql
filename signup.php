<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="signup.css">

    <style>
        body{
            background-image: url("images/login1.jpg");
        }
    </style>
   
</head>
<body>
    
    <div class="form">
    <p>Sign Up</p>
    <form onsubmit="checkpassword()" method="post" action="signup.php">
        <input type="text" name="Firstname" placeholder="First Name" required >

        <input type="text" name="Lastname" placeholder="Last Name" required>

        <input type="email" name="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9]+\.[a-z]{2,3}" required>

        <input type="number" name="mobile"placeholder="Contact Number"pattern="[0-9]{10}" required>

        <input type="password" id="password" placeholder="Enter password" pattern="[a-zA-Z0-9]{5,10}"required>

        <input type="password" id="confirmpassword" placeholder="Confirm password" required name="password">

        <input type="submit" id="but" value="sign up" name="btn" >

        <p class="message">Registered? <a href="login.php">Login</a></p>
    </form>
    <script>
       function checkpassword() 
        {

            var password = document.getElementById("password").value;
            var confirmpassword = document.getElementById("confirmpassword").value;

            if (password == "") {
                alert("Field cannot be empty.");
            }
            else if (password != confirmPassword) {
                alert("Password didn't match try again.");
                return false
            }
            else if (password == confirmPassword) {
                alert("Password match.");
                return true
            }
            
        }
    </script>
    </div>
</body>
</html>
<?php
require 'connect/connect.php';

if(isset($_POST["btn"]))
{

  $firstname=$_POST['Firstname'];
  $lastname=$_POST['Lastname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];


  $_SESSION['name']=$firstname; //session

  $sql="INSERT INTO user (FirstName,LastName,Email,Mobile,Password) Values('$firstname','$lastname','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
  if($result)
   {
    header('location:home.php');
    echo "Inserted successfully";
    
    }
    else
    {
        die(mysqli_error($con));
    }
    $con->close();
}

?>