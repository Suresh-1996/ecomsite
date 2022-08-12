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
<div id="page_name"> <h1 style="">ASUS ROG MAXIMUS XII HERO (WI-FI)</h1></div>
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

       
         

	</div>
	<br>




</div>
    
</div>

 <div class="product_details">
   <h1 style="color:white;">ASUS ROG MAXIMUS XII HERO (WI-FI)</h1>
   <p style="color: white;">
    3 years warranty<br>
    CPU<br>
Intel® Socket 1200 for 10th Gen Intel® Core™, Pentium® Gold and Celeron® Processors<br>
Supports Intel® 14 nm CPU<br>
Supports Intel® Turbo Boost Technology 2.0 and Intel® Turbo Boost Max Technology 3.0**<br>
* Refer to www.asus.com for CPU support list<br>
**Intel® Turbo Boost Max Technology 3.0 support depends on the CPU types.<br>
Chipset<br>
Intel® Z490<br>
Memory<br>
4 x DIMM, Max. 128GB, DDR4 4800(O.C.)/4700(O.C)/4600(O.C)/4500(O.C)/4400(O.C)/4266(O.C.)/4133(O.C.)/4000(O.C.)<br>/3866(O.C.)/3733(O.C.)/3600(O.C.)/3466(O.C.)/3400(O.C.)/3333(O.C.)/3200(O.C.)/3000(O.C.)/2933/2800/2666/2400/2133 MHz Non-ECC, Un-buffered Memory *<br>
Dual Channel Memory Architecture<br>
Supports Intel® Extreme Memory Profile (XMP)<br>
OptiMem III<br>
* 10th Gen Intel® Core™i9/i7 CPUs support 2933/2800/2666/2400/2133 natively, Refer to www.asus.com for the Memory QVL (Qualified Vendors Lists).<br>
Graphic<br>
Integrated Graphics Processor<br>
1 x HDMI 1.4b<br>
*Graphics specifications may vary between CPU types.<br>
Multi-GPU Support<br>
Supports NVIDIA® 2-Way SLI® Technology<br>
Supports AMD 3-Way CrossFireX™ Technology<br>
Supports AMD 2-Way CrossFireX Technology<br>
Expansion Slots<br>
Intel® 10th Gen Processors<br>
2 x PCIe 3.0 x16 (x16 or dual x8) *1<br>
Intel® Z490 Chipset<br>
1 x PCIe 3.0 x16 (x4 mode) *2<br>
3 x PCIe 3.0 x1<br>
Storage<br>
Total supports 3 x M.2 slots and 6 x SATA 6Gb/s ports<br>
Intel® Z490 Chipset :<br>
1 x M.2_1 socket 3, with M key, type 2242/2260/2280/22110 storage devices support (SATA & PCIE 3.0 x 4 mode)*3<br>
1 x M.2_2 socket 3, with M key, type 2242/2260/2280 storage devices support (PCIE 3.0 x 4 mode)*4<br>
1 x M.2_3 socket 3, with M key, type 2242/2260/2280/22110 storage devices support (SATA & PCIE 3.0 x 4 mode)<br>
6 x SATA 6Gb/s port(s),<br>
 <a href="cart.php" style="text-decoration: none;color: red"> <h2 style="color: red; border: 1px solid white;width: 150px;border-radius: 10px;text-align: center;background-color: yellow;">Add to cart</h2></a>

   </p>

 </div>

<div class="product_1">

 <div class="product_1_image" style="width:300px height 300px"><img src="img/asus_rog/Rog maximus xii hero.png" width="500" height="500"></div>
 
  
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