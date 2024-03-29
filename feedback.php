<?php require_once('connect/Connect.php');?>

<?php
    if(!empty($_POST['save']))
    {
        $name=$_POST['user'];
        $candi=$_POST['candi'];
        $dis=$_POST['dis'];
        $query = "INSERT INTO feedback (User_Name, Candidate_Name, Description) VALUES ('$name', '$candi', '$dis')";
        $result=mysqli_query($conn,$query);

        if ($conn->query($query) === true) {
          echo '<script language="javascript">';
          echo 'alert("Feedback uploaded successfully");';
          echo '</script>';
      }
}
$retrieveQuery = "SELECT User_Name, Description FROM feedback ORDER BY Feedback_ID DESC LIMIT 4";
$retrieveResult = mysqli_query($conn, $retrieveQuery);
// Close the database connection
$conn->close();
?>

        



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="css/feedback.css">
  
    
</head>
<body>
           <!--Header-->
  <header style="margin-top: 0px;">
    <div class="container">
      <nav>
        <div class="logo">
            <img src="images/logo3.png" style="height:140px;">
        </div>
            <ul>
              <li>
                <b><a href="home.html">HOME</a></b>
              </li>
              <li>
                <b><a href="viewcandidate.html">VIEW CANDIDATE</a></b>
              </li>
              <li>
                <b><a href="voting.php">VOTE</a></b>
              </li>
              <li>
                <b><a href="results.php">VIEW RESULT</a></b>
              </li>
              <li>
                <b><a href="feedback.php">FEEDBACK</a></b>
              </li>
              <li>
                <b><a href="aboutus.html">ABOUT US</a></b>
              </li>
              <li>
                <b><a href="privacypolicy.html">PRIVACY POLICY</a></b>
              </li>
              <li>
                <b><a href="contact.html">CONTACT US</a></b>
              </li>
             
            </ul>
      </nav>
    </div>
  </header>

    <div class="box" style="margin-top: 12%;">
    <section class="feed">
        <?php
        // Display the feedback
        while ($row = mysqli_fetch_assoc($retrieveResult)) {
            $userName = $row['User_Name'];
            $description = $row['Description'];
            echo '<div class="para">';
            echo '<img src="images/voter1.jpeg" alt="voter 1" width="200px" height="200px">';
            echo '<center>';
            echo '<p><b>' . $userName . '</b></p>';
            echo '<p><b>' . $description . '</b></p>';
            echo '</center>';
            echo '</div>';
        }
        ?>
    
    </section>
    <br><br><br>
   
    <div class="review">
        <div class="containt">
            <form method="post" name="save">
            <h1 style="text-align: center;"><b>Reviews</b></h1>
            <p>Name</p>
            <input type="text" name="user"><br><br>
            <p>Candidate Name</p>
            <input type="text" name="candi" ><br><br>
            <p>Description</p>
            <textarea name="dis"></textarea><br><br>
            <center>
                <input type="Submit" value="submit" name="save">
            </center>
</form>
        </div>
    </div>
    </div>

    <footer class="footer-distributed">
        
       
		    <div class="footer-left">
		    	<div class="fn">
      			<p>Telephone | +94 11 2199323:</p>
			   		<p>Email	 | info@votingE.com</p>
			   		<p>Address   | 2835 31st Ave W. Seattle, WA - USA 98199</p>
			   		<p>Copyright © 2020 Experts. |  .All Rights Reserved.</p>
				</div>
	        </div>
	        <div class="footer-center"></div>
			<div class="footer-right">
				<p class="footer-about">
					<span style="font-size: 16px;font-weight: bold;">About Us</span>
					<span>E"Final Talent" then kicks off six weeks of live shows at the Pasadena Civic Auditorium beginning Tuesday, August 22 (8-10 p.m. ET/PT) on NBC. Results shows will air Wednesday nights (8-9 p.m. ET/PT).</span>
				</p>
				<button style="margin-left: 300px; background-color: aqua;"><a href="display.php">Read</a></button>
			</div>
	  </footer>
   

    
</body>