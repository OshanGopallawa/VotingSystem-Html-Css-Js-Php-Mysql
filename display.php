

<?php

require_once('connect/Connect.php');


$sql = "SELECT * FROM user";
$result=mysqli_query($conn,$sql);
echo '<div class="container">';

echo ("<table border='1' cellspacing='0' class='table'>");
echo ("<th>"."Firstname"."</th>");
echo ("<th>"."Lastname"."</th>");
echo ("<th>"."Email"."</th>");
echo ("<th>"."Mobile"."</th>");
echo ("<th>"."Password"."</th>");
echo ("<th>"."Option"."</th>");

if ($result) 
{
    
    while($row = $result->fetch_assoc()) 

    {
        $firstname=$row['FirstName'];
        $lastname=$row['LastName'];
        $email=$row['Email'];
        $mobile=$row['Mobile'];
        $password=$row['Password'];

       
        
        echo ("<tr>");

        echo ("<td>".$firstname."</td>");
        echo ("<td>" . $lastname ."</td>");
        echo ("<td>" . $email."</td>");
        echo ("<td>" . $mobile."</td>");
        echo ("<td>" . $password."</td>");

        echo("<td>". '<button><a href="delete.php?deleteid='.$email.'">Delete</a></button>' . "</td>");
        echo ("</tr>");

    }
    echo ("</table>");
    echo '</div>';
   

}
else
{ 
    echo "no results"; 
}


$conn->close();

?>

<html>
    <head>
        <style>
    .container 
    {
    
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh; /* Adjust the height as needed */
    
    
    }
    .table{
        background-color:blue;
    }


        </style>


    </head>
</html>







