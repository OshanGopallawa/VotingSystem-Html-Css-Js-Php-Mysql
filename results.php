<?php require_once('connect/Connect.php');?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>view result</title>
    <link rel="stylesheet" href="css/results.css">
    <link rel="stylesheet" href="css/head.css">

<body>

<header>
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
    <section class="res">
    <div class="sing">
    <img src="images/singer1.jpg" alt="candidate 1" width="200px" height="200px">
    <center>
    <p>Carey rhodes</p>
    </center>
    <?php
 
    $candy="SELECT * from Candidate where Candidate_id=1";

    $quary=mysqli_query($conn,$candy);

    $vote=mysqli_fetch_assoc($quary);
    
    $result=$vote['VoteCount'];

    echo "<center> <p style=' font-size: 24px;'>$result</p> </center>";

    ?>
    </div>

    <div class="sing">
    <img src="images/singer2.webp" alt="candidate 2" width="200px" height="200px">
    <center>
    <p>Aron Benjamin</p>
    </center>
    <?php
 
    $candy="SELECT * from Candidate where Candidate_id=2";

    $quary=mysqli_query($conn,$candy);

    $vote=mysqli_fetch_assoc($quary);
    
    $result=$vote['VoteCount'];

    echo "<center> <p style=' font-size: 24px;'>$result</p> </center>";

    ?>
    </div>

    <div class="sing">
    <img src="images/singer3.jpeg" alt="candidate 3" width="200px" height="200px"> 
    <center>
    <p>Asher Bolt</p>
    </center>
    <?php
 
 $candy="SELECT * from Candidate where Candidate_id=3";

 $quary=mysqli_query($conn,$candy);

 $vote=mysqli_fetch_assoc($quary);
 
 $result=$vote['VoteCount'];

 echo "<center> <p style=' font-size: 24px;'>$result</p> </center>";

 ?>
    </div>

    <div class="sing">
    <img src="images/singer4.webp" alt="candidate 4" width="200px" height="200px">
    <center>
    <p>Georgia Stephanie</p>
    </center>
    <?php
 
 $candy="SELECT * from Candidate where Candidate_id=4";

 $quary=mysqli_query($conn,$candy);

 $vote=mysqli_fetch_assoc($quary);
 
 $result=$vote['VoteCount'];

 echo "<center> <p style=' font-size: 24px;'>$result</p> </center>";

 ?>
    </div>

    <div class="sing">
    <img src="images/singer5.jpg" alt="candidate 5" width="200px" height="200px">
    <center>
    <p>Justin Smith</p>
    </center>
    <?php
 
 $candy="SELECT * from Candidate where Candidate_id=5";

 $quary=mysqli_query($conn,$candy);

 $vote=mysqli_fetch_assoc($quary);
 
 $result=$vote['VoteCount'];

 echo "<center> <p style=' font-size: 24px;'>$result</p> </center>";

 ?>
    </div>

    <div class="sing">
    <img src="images/singer6.jpg" alt="candidate 6" width="200px" height="200px">
    <center>
    <p>Roddy Rich</p>
    </center>
    <?php
 
 $candy="SELECT * from Candidate where Candidate_id=6";

 $quary=mysqli_query($conn,$candy);

 $vote=mysqli_fetch_assoc($quary);
 
 $result=$vote['VoteCount'];

 echo "<center> <p style=' font-size: 24px;'>$result</p> </center>";

 ?>
    </div>
    </section>
    

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
</html>