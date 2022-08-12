<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>GetPc.com</title>
	<link rel="stylesheet" type="text/css" href="css/homecss.css">


</head>
<body>
<div class="homebg2">
	<img src="img/homelogo2.jpg" width="1250" height="600">
</div>
	<div id="homelogo">

		   <div id="hnavBar">
		   <ul>
			 <li> <a href="#">About </a><br></li>
			 <li><a href="#">Services</a></li>
			 <li><a href="#">Contact</a></li>
       <li><a href="#">Your Cart</a></li>
       <li><a href="#">View Orders</a></li>


			<div class="dropdown">
            <button class="dropbtn">User</button>
           <div class="dropdown-content">
           <a href="Userlogin.php">Login</a>
           <a href="UserRegister.php">Register</a>
           
           </div>


        </div>

            <div id="phone">
           	<img src="img/Phone.ico" width="25px" height="25px">
           	<h2>+94 777-002-003</h2>
            

            </div>
            <h3 id="u_name">
              <?php
                if (isset($_SESSION['user_name'])){
                      echo "Welcome ".$_SESSION['user_name'];

                     echo "<br><a href='logout.php'><button type='button' >logout</button></a> "; 
                     } 
              ?>


              
            </h3>
			 
		   </ul>
	       </div>

	   <div  id="sitelogo"  >
	   	<a href="index.php">	<img src="img/websitelogo.png"  width="200" height="100"  ></a> 
	   </div>

       
        


		<img src="img/homelogo.jpg" width="1500" height="600">
	</div>

	<div class="screen ">
	
   </div>

	<div class="slidecontainer">

      
         <div class="mySlides fade">

         	<img src="img/rog strix z390.png" style="width:80%">
              <div class="dis">
         	     <h1>ROG-STRIX-Z390-E-GAMING</h1>
               <h1>Intel Z390 LGA 1151 ATX gaming motherboard with Aura Sync RGB, 802.11ac Wi-Fi, DDR4 4266z+, dual M.2 with heatsinks, SATA 6Gbps, HDMI, and USB 3.1 Gen 2</h1>
              </div>
         </div>

         <div class="mySlides fade">	
         	<img src="img/Rogrtx.png" style="width:80%">
         	  <div class="dis">
         	     <h1>ROG-STRIX-RTX2080-O8G-GAMING</h1>
               <h1>ROG Strix GeForce RTX™ 2080 OC edition 8GB GDDR6 with enthusiast-level technology for extreme 4K and VR gamingG</h1>
              </div>
         </div>

         <div class="mySlides fade">	
         	<img src="img/rogthor 850w.png" style="width:80%">
         	 <div class="dis">
         	     <h1>ASUS ROG Thor 850 80+ Platinum 850W Fully Modular RGB Power Supply with LIVEDASH OLED Panel and 10 Year Warranty</h1>
              </div>
         </div>
         

	</div>
	<br>

<div style="text-align:center">
  <span  class="dot" ></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  </div>


</div>
    
</div>

<div id="foter1">
           <div class="ftlogo"><img src="img/assure.png" width="100" height="100"><h1>WARRANTY ASSURED</h1><p>In case of faulty products, we have an upstanding warranty and claim procedures to make sure that your requirements are met in minimum time loss as possible.</p></div>
</div>

<div id="foter2">
    <div class="ftlogo" ><img src="img/custom.png" width="100" height="100"><h1>CUSTOM ORDERS</h1><p>n case your requirements supersedes what the local market has to offer, we will provide you with assistance to meet these requirements.</p></div>
</div>

<div id="foter3">
    <div class="ftlogo"><img src="img/delivary.png" width="160" height="160"><div id="car"><h1 id="delivaryid">HOME DELIVERY</h1><p>To further facilitate your access to your needs, we offer to deliver to meet your requirements straight to where you live within Sri Lankan borders.</p></div></div>
</div>

<div id="footer"><h2>
Designed & developed by GetPc.com</h2>
<h2 id="footerfindus">|Find us on </h2>


</div>

<div id="sidediv"> 
  <img class="bottom" src="img/sidedivads_1.png">
  <img class="top" src="img/sidedivads_2.png">
</div>

<div id="rightsidediv"> 
  <img class="bottom" src="img/sidedivads_1.png">
  <img class="top" src="img/sidedivads_2.png">
</div>

  <div id="offerontainer">
   	
	<h1 id="spoff">SPECIAL OFFER </h1>
	<h1 id="pesent">%</h1>
	<h1 id="nwa">NEW ARRIVALS</h1>

  </div>
  

<div class="w3-content" style="max-width:800px">
  <h1 id="oftext">3 Available items</h1>
  <a href="https://www.google.com"><img class="mySlide"  src="img/specil offer1.png" width="760" height="500"></a>
  <a href="#"><img class="mySlide" src="img/specil offer_2.png" width="760" height="500"></a>
  <a href="#"><img class="mySlide" src="img/specil offer_3.png" width="760" height="500"></a>
</div>

<div class="w3-center">
  <div class="w3-section">
    <button class="w3-button w3-light-grey" onclick="plusDivs(-1)">< Prev</button>
    <button class="w3-button w3-light-grey" onclick="plusDivs(1)">Next ❯</button>
  </div>
  <div id="bt">
  <button class="w3-button demo" onclick="currentDiv(1)" >1</button> 
  <button class="w3-button demo" onclick="currentDiv(2)">2</button> 
  <button class="w3-button demo" onclick="currentDiv(3)">3</button>
  </div> 
</div>


<div class="sidemenu">
	<div class="section"><a href="asus_rog.php"><img  class="s1" src="img/selection_1.jpg" width="250" height="60" ></a></div>
	<div class="section"><a href="powered_by_asus.php"><img  class="s1" src="img/sections2.jpg" width="250" height="60" ></a></div>
	<div class="section"><a href="laptops.php"><img  class="s1" src="img/sections_3.jpg" width="250" height="60" ></div>
	<div class="section"><a href="desktop_workstation.php"><img  class="s1" src="img/sections_4.jpg" width="250" height="60" ></div>
	<div class="section"><a href="gaming_desktop.php"><img  class="s1" src="img/sections_5.jpg" width="250" height="60" ></div>
	<div class="section"><a href="processors.php"><img  class="s1" src="img/sections_6.jpg" width="250" height="60" ></div>
	<div class="section"><a href="motherbords.php"><img  class="s1" src="img/sections_7.jpg" width="250" height="60" ></div>
	<div class="section"><a href="rams.php"><img  class="s1" src="img/sections_8.jpg" width="250" height="60" ></div>
	<div class="section"><a href="graphics_cards.php"><img  class="s1" src="img/sections_9.jpg" width="250" height="60" ></div>
	<div class="section"><a href="powersuplers.php"><img  class="s1" src="img/sections_10.jpg" width="250" height="60" ></div>
	<div class="section"><a href="cooling_lights.php"><img  class="s1" src="img/sections_11.jpg" width="250" height="60" ></div>
	<div class="section"><a href="storage.php"><img  class="s1" src="img/sections_12.jpg" width="250" height="60" ></div>
  <div class="section"><a href="casing.php"><img  class="s1" src="img/sections_13.jpg" width="250" height="60" ></div>
  <div class="section"><a href="monitors.php"><img  class="s1" src="img/sections_14.jpg" width="250" height="60" ></div>
  <div class="section"><a href="speakers_&_headphones.php"><img  class="s1" src="img/sections_15.jpg" width="250" height="60" ></div>
  <div class="section"><a href="keybord_mice&_gamepad.php"><img  class="s1" src="img/sections_16.jpg" width="250" height="60" ></div>
		

	



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlide");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>








</body>
</html>