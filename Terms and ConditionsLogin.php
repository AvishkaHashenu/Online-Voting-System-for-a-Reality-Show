<?php
session_start();
?>

<html>

<head>


<link rel ="stylesheet" href = "css/ranshikacss1/home.css">

<style>
 .mySlides {
        display: none
		
		
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 800px;
        position: relative;
        margin: auto;
		align :center;
		top: 0px;
		left :40%;
      }
</style>

<title> Teens Got Talent </title>



</head>

<body>

<div class="topic">

  <img src="web images/star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT</h1>
  <button class = "rbutto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="rbutto2"> </a>
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php"class="active">Terms and conditions</a>
</div>





		
<div  align="center" class="vertical-menu" style="height:147.7%;">
		
  <video width="90%" height="50%" controls autoplay>
  
  <source src="web images/final.mp4" type="video/mp4">
  
  <source src="final.ogg" type="video/ogg">
  
</video>

</br> </br>

</br></br>
  <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery loged.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
</div>

<div>
<table border="0.1" width="88%" height="60%" background="..\images\sgotb.jpg">
<h1 align="center">Terms and Condtions</h1>
	<p><li type="square">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.You have to register and become a member to Vote for the perfomers</li>
    <li type="square">You cannot use our trademark for your own publications and marketing</li>
	<li type="square">You are only given this membership to vote for your favourute performer only</li>
	<li type="square">By becoming a member you can share your ideas about our system to our communnity to improve our standards</li>
	<li type="square">You will be granted our user policy that you can modify your user details</li>
	<li type="square">By becoming a member you are agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</li>
    <li type="square">You may not use our services for any illegal or unauthorized purposes, nor to violate any laws in your jurisdiction (including but not limited to copyright laws).</li>
	<li type="square">You must not transmit any worms or viruses or any code of a destructive nature.</li>
	<li type="square">A breach or violation of any of the Terms will result in an immediate termination of your Services.</li>
	<li type="square">We reserve the right to refuse service to anyone for any reason at any time.</li>
	<li type="square">You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks.</li>
	<li type="square">The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.</li>
	<li type="square">Certain content, products and services available via our Service may include materials from third-parties.</li>
	<li type="square">Your submission of personal information through the website is governed by our Privacy Policy.</li>
	<li type="square">We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free.</li>
	<li type="square">You agree that from time to time we may remove the service for indefinite periods of time or cancel the account at any time, without notice to you.</li>
	<li type="square">These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of 57</li>
	<li type="square">Questions about the Terms of Service should be sent to us at info@realitytalent.net.</li>
	<li type="square">You can review the most current version of the Terms of Service at any time at this page.</li>
	</p>
	<center><input type="checkbox" id="terms" name="agree" value="terms"><label for="agree"> I have read and agreed the terms and conditions</label><br></center>
	
	
	
			
				<td align="center" style="color:white;font-size:30px;font-family:spumoni;"><center><a href="#"><img src="web images\sponsor1.png" height=200px width=400px><img src="web images\sponsor2.jpg" height=200px width=200px><img src="web images\sponsor3.png" height=200px width=200px><img src="web images\sponsor4.jpg" height=200px width=200px></a></center></td>
		
	
	

</table>
</div>


<footer  height = "50">
	<a href="www.facebook.com"> <img src = "web images\facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="www.twitter.com"><img src = "web images\twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="www.instagram.com"><img src = "web images\instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
  
        <img src="web images\coke.jpg" width = "272" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="web images\mac.jpg"width = "272" height = "80">
        
      </div>
</footer>
	  
 <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>

</body>
