<?php
session_start();
$welcome=$_SESSION['name'];
$alert="<script>alert('Welcome  $welcome');</script>";
echo $alert;
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
      <title>Easy voting</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>

	<!--Scroll Header Js code-->
<script type="text/javascript">

    window.addEventListener('scroll', function () 
    {
      let header = document.querySelector('header');
      let windowPosition = window.scrollY > 0;
    header.classList.toggle('scrollh', windowPosition);
    })
    

</script>

<!--Header-->
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
    <!--Video Background text -->  
    <div class="htxt">
      <h1>Online Voting System</h>
      <p>Easy and Better Voting!</p>
    </div>

    <!--Video Background -->
    <section class="videocontainer">
      <video autoplay loop  muted>         
          <source src="images/trailer.mp4" type="video/mp4">
      </video>
    </section>
      
    <!--grid and image box 1st 3 box -->
    <div class="www">

      
    <div class="des">
    <h4>Online Voting System</h4>
    <p>Easy and Better Voting!!</p>
    </div>

	  <main class="grid">
          <article>
            <img src="images/singer1.jpg" alt="Sample photo"  style="height:200px; width:300px">
            <div class="text">
              <a href="viewcandidate.html"><b>Carey rhodes</b></a>
              <p>Carey rhodes is 18 year old,participating from Los Alamos,New mexico.Voting number is"1".</p>
            </div>
          </article>
          <article>
            <img src="images/singer2.webp" alt="Sample photo"  style="height:200px; width:300px">
            <div class="text">
              <a href="viewcandidate.html"><b>Aron Benjamin</b></a>
              <p> Aron Benjamin is 18 year old,participating from Great Neck Plaza, New York. Voting number is"2".</p>
            </div>
          </article>
          <article>
            <img src="images/singer3.jpeg" alt="Sample photo"  style="height:200px; width:300px">
            <div class="text">
              <a href="viewcandidate.html"><b>Asher Bolt</b></a>
              <p>Asher Bolt is 23 year old,participating from Holly Hills, Colorado. Voting number is"3" </p>
            </div>
          </article>

          <article>
            <img src="images/singer4.webp" alt="Sample photo"  style="height:200px; width:300px">
            <div class="text">
              <a href="viewcandidate.html"><b>Georgia Stephanie</b></a>
              <p>Georgia Stephanie is 22 year old,participating from Great Neck Gardens, New York. Voting number is"4"</p>
            </div>
          </article>
          <article>
            <img src="images/singer5.jpg" alt="Sample photo"  style="height:200px; width:300px">
            <div class="text">
              <a href="viewcandidate.html"><b>Justin Smith</b></a>
              <p>Justin Smith is 25 year old,participating from  Brighton, New York. Voting number is"5"</p>
            </div>
          </article>
          <article>
            <img src="images/singer6.jpg" alt="Sample photo"  style="height:200px; width:300px">
            <div class="text">
              <a href="viewcandidate.html"><b>Roddy Rich</b></a>
              <p>Roddy Rich is 27 year old,participating from North Potomac, Maryland. Voting number is"6"</p>
            </div>
          </article>
        </main>
        
        </div>

    <div class="i">
      <div class="content">
        <h1><b>Online Voting System?</b></h1>
            <p>
              An online voting system is a digital platform that enables individuals to cast their votes remotely through the internet, typically using electronic devices such as computers, smartphones, or tablets. It provides an alternative to traditional paper-based voting methods and allows voters to participate in elections or decision-making processes from any location with internet access.
            </p>
            <p>
              Online voting systems aim to streamline the voting process, increase voter participation, and reduce logistical challenges associated with traditional voting methods. However, it is crucial for these systems to be designed and implemented with stringent security measures to ensure the integrity and trustworthiness of the elections or decision-making processes they support.
            </p>
           
      </div>
    </div>  
 
     <!--Footer-->

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
				<button style="margin-left: 300px; background-color: aqua;"><a href="display.php">User Details</a></button>
			</div>
	  </footer>
	  <!--Close Footer-->
</body>
</html>
