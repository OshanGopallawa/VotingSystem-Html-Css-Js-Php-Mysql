<?php
 require_once('connect/Connect.php');
if(isset($_GET['deleteid']))
{
    $email=$_GET['deleteid'];
    $sql="DELETE  FROM user  WHERE Email='$email'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "deleted succes";
        header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>

