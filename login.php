<?php require_once('connect/Connect.php'); ?>

<?php
    
    if(!empty($_POST['save']))
    {
        $email=$_POST['em'];
        $password=$_POST['pw'];
        $query="select * from user where Email='$email' and Password='$password' ";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);

        
        if($count==0)
        {

            echo '<script language="javascript">';
            echo 'alert("Username or Password is wrong do you want to try again");';
            echo '</script>';
            

            
         
        }
        else {
            header("Location: home.html");
           

            $userid="select id from user WHERE email='$email'";
            $quary=mysqli_query($conn,$userid);

            if ($quary && mysqli_num_rows($quary) > 0) {
                $row = mysqli_fetch_assoc($quary);
                $userID = $row["id"];
            
            session_start();

            $_SESSION["id"]=$userID;
            
        }
    }
}


    $conn->close();
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">

    </head>
    <body >
 
    <div class= " head" >
    <h1>Online Voting<br> System</h1>   
    
    </div>

        <div class="box">
            <div class="container">
                
             

               <div class="top-header">
                    <span>Have an account?</span>
                    <header>Login</header>
                </div>

                  <div class="input-details">
                        <form method="post">
                        <input type="email"  class="input" name="em" placeholder="Email">
                        <br>
                         <input type="password" id="pass" class="input" name="pw" placeholder="Password">
                         <br>
                       <input type="submit" class = "submit" name="save" value="Login">
                    </div>
                 </form>

                 <div class="sign">
                    <lable>Not Registed?</lable>
                    <label><a id="sign" href="signup.php">Create an account</a></label>
                </div>

                 <div class="bottom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check">Remember Me</label>
                    </div>
                    <div class="right">
                        <label><a href="resetpass.php">Forgot password?</a></label>
                    </div>
                </div>

            </div>

            

        </div>

        
    </body>

</html>