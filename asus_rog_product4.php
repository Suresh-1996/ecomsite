<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>GetPc.com</title>
	<link rel="stylesheet" type="text/css" href="css/homecss.css">
  <link rel="stylesheet" type="text/css" href="css/asus_rog_deatis_page.css">


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
<div id="page_name"> <h1 style="">ASUS ROG STRIX B460-H GAMING</h1></div>
	<div class="slidecontainer">

      
         <div class="mySlides fade">

         	<img src="img/ASUS STRIX GAMING GEFORCE RTX™ 3080 10GB.png" style="width:80%">
              <div class="dis">
         	     <h1>ROG-STRIX-Z390-E-GAMING</h1>
               <h1>Intel Z390 LGA 1151 ATX gaming motherboard with Aura Sync RGB, 802.11ac Wi-Fi, DDR4 4266z+, dual M.2 with heatsinks, SATA 6Gbps, HDMI, and USB 3.1 Gen 2</h1>
              </div>
         </div>

         <div class="mySlides fade">	
         	<img src="img/ASUS STRIX GAMING GEFORCE RTX™ 3080 10GB.png" style="width:80%">
         	  <div class="dis">
         	     <h1>ROG-STRIX-RTX2080-O8G-GAMING</h1>
               <h1>ROG Strix GeForce RTX™ 2080 OC edition 8GB GDDR6 with enthusiast-level technology for extreme 4K and VR gamingG</h1>
              </div>
         </div>

       
         

	</div>
	<br>




</div>
    
</div>

 <div class="product_details">
   <h1 style="color:white;">ASUS STRIX GAMING GEFORCE RTX™ 3080 10GB</h1>
   <p style="color: white;">
   3 Years Warranty<br>

Graphic Engine<br>

NVIDIA® GeForce RTX™ 3080<br>
Bus Standard<br>

PCI Express 4.0<br>
Video Memory<br>

10GB GDDR6X<br>
Engine Clock<br>

OC Mode - 1740 MHz (Boost Clock)<br>
Gaming Mode (Default) - GPU Boost Clock : 1710 MHz , GPU Base Clock : 1440 MHz<br>
CUDA Core<br>

8704<br>
Memory Speed<br>

19 Gbps<br>
Memory Interface<br>

320-bit<br>
Resolution<br>

Digital Max Resolution 7680 x 4320<br>
Interface<br>

Yes x 2 (Native HDMI2.1)<br>
Yes x 3 (Native DisplatPort 1.4a)<br>
Yes (2.3)<br>
Maximum Display Support<br>

4<br>
Accessories<br>

1 x ROG Velcro Hook & Loop<br>
1 x ROG ruler<br>
1 x Collection card<br>
1 x Speedsetup manual<br>
Software<br>

ASUS GPU Tweak II & Drivers: please download all software from the support site.
Dimensions<br>

12.53 " x 5.51 " x 2.27 " Inch<br>
31.85 x 14.01 x 5.78 Centimeter<br>
Recommended PSU<br>

 <a href="#" style="text-decoration: none;color: red"> <h2 style="color: red; border: 1px solid white;width: 150px;border-radius: 10px;text-align: center;background-color: yellow;">Add to cart</h2></a>

   </p>

 </div>

<div class="product_2">

 <div class="product_image" style="width:300px height 300px"><img src="img/asus_rog/ASUS STRIX GAMING GEFORCE RTX™ 3080 10GB.png" width="400" height="400"></div>
 
  
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
		

	












</body>
</html>