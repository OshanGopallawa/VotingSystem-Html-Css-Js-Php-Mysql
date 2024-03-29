<?php require_once('connect/Connect.php'); ?>
<?php

	session_start();
	$ID=$_SESSION['id'];

	$quary="SELECT Status from user where id= $ID";

	$result=mysqli_query($conn,$quary);

	$status= mysqli_fetch_assoc($result);

	$statusValue = $status ['Status'];




	if($statusValue>0)
	{
		$userstatus = "<b style='color: red;'>Voted</b>";



		echo'<div class="user"><div class="Userprofile"><center><img src="images/user.png" style="width: 100px; height: 100px;" ></center><br>';
		$profile="SELECT FirstName,LastName,Email,Mobile from user where id=$ID";
		$res=mysqli_query($conn,$profile);
		$recode=mysqli_fetch_assoc($res);

		echo "<b>Name : " . $recode['FirstName']." ".$recode['LastName']."</b><br>";
		echo "<b>E-Mail : " . $recode['Email']."</b><br>";
		echo "<b>Mobile  : " . $recode['Mobile']."</b><br>";
		echo "<b>Status : ". $userstatus ."</b>";


		echo'</div></div>';
		


		echo '<script>
        window.addEventListener("DOMContentLoaded", function() {
            var buttons = document.getElementsByClassName("vote");
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].disabled = true;
            }
        });
  		  </script>';
		
	}
	else{
		$userstatus = "<b style='color: green;'>Vote</b>";



		echo'<div class="user"><div class="Userprofile"><center><img src="images/user.png" style="width: 100px; height: 100px;" ></center><br>';
		$profile="SELECT FirstName,LastName,Email,Mobile from user where id=$ID";
		$res=mysqli_query($conn,$profile);
		$recode=mysqli_fetch_assoc($res);

		echo "<b>Name : " . $recode['FirstName']." ".$recode['LastName']."</b><br>";
		echo "<b>E-Mail : " . $recode['Email']."</b><br>";
		echo "<b>Mobile  : " . $recode['Mobile']."</b><br>";
		echo "<b>Status : ". $userstatus ."</b>";


		echo'</div></div>';

		
		
					
		


		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $candidateQuery = "SELECT COUNT(*) as count FROM candidate";
            $candidateResult = mysqli_query($conn, $candidateQuery);
            $candidateCount = mysqli_fetch_assoc($candidateResult)['count'];

            for ($i = 1; $i <= $candidateCount; $i++) {
                $buttonName = "button" . $i;
                if (isset($_POST[$buttonName])) {
                    $statusQuery = "UPDATE user SET Status = 1 WHERE id = $ID";
                    $candiQuery = "UPDATE candidate SET VoteCount = VoteCount + 1 WHERE Candidate_id = $i";
                    mysqli_query($conn, $statusQuery);
                    mysqli_query($conn, $candiQuery);
                }
			}
		}
		

		

	}

								

    $conn->close();

?>
  

<html>
	<head>
		<title>Voting</title>
		<link rel="stylesheet" href="css/votingstyle.css">

		

        
        
	</head>

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
    </div>

        <form method="post">
		<div class="all">
		<div class="box">
			<div class="candy">
				<h1>Carey Rhodes<</h1>
				<img src="images/singer1.jpg" alt="candi1">
				<div class="button"></div>
				<input type="submit" name="button1" onclick="clickbutton(this)" class="vote" value="Vote">
				<p>I am  <b style="color:orange">Carey Rhodes</b> <br>if you like my song<br> you can vote me</p>
			</div>
			<div class="candy">
				<h1>Aron Benjamin</h1>
				<img src="images/singer2.webp" alt="candi1">
				<input type="submit" name="button2" onclick="clickbutton(this)"  class="vote" value="Vote">
				<p>I am  <b style="color:orange">Aron Benjamin</b> <br>if you like my song<br> you can vote me</p>
			</div>
			<div class="candy">
				<h1>Asher Bolt</h1>
				<img src="images/singer3.jpeg" alt="candi1">
				<input type="submit" name="button3" onclick="clickbutton(this)"  class="vote" value="Vote">
				<p>I am  <b style="color:orange">Asher Bolt</b> <br>if you like my song<br> you can vote me</p>
			</div>
</div>

<div class="box">
			<div class="candy">
				<h1>Georgia Stephanie</h1>
				<img src="images/singer4.webp" alt="candi1">
				<input type="submit" name="button4" onclick="clickbutton(this)"  class="vote" value="Vote">
				<p>I am  <b style="color:orange">Georgia Stephanie</b> <br>if you like my song<br> you can vote me</p>
			</div>
			<div class="candy">
				<h1>Justin Smith</h1>
				<img src="images/singer5.jpg" alt="candi1">
				<input type="submit" name="button5" onclick="clickbutton(this)"  class="vote" value="Vote">
				<p>I am <b style="color:orange">Justin Smith</b> <br>if you like my song<br> you can vote me</p>
			</div>
			<div class="candy">
				<h1>Roddy Rich</h1>
				<img src="images/singer6.jpg" alt="candi1">
				<input type="submit" name="button6" onclick="clickbutton(this)"  class="vote" value="Vote">
				<p>I am <b style="color:orange">Roddy Rich</b> <br>if you like my song<br> you can vote me</p>
			</div>



		</div>
		</div>
        </form>

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




