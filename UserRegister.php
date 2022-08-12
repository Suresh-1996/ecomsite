<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<style>
      .error {color: #FF0000;}
    </style>
</head>
<link rel="stylesheet" type="text/css" href="css/UserRegistry.css">

<body >
          <?php 
               
             $servername= "localhost";
             $username = "root";
             $password = ""; 
             $dbasename = "getpcdatabase";
             $email_error ="";
            $contact_error ="";
           
           
         
           $conn=new mysqli($servername, $username, $password, $dbasename,"4306");

           if ($conn->connect_error)
            {
           	die("Connection faild tstr:".$conn->connect_error);}
               else
            {
            	echo "Connected successfully";
             }
         
              	if (isset($_POST['submit']))
          	 {
                       $fname = mysqli_real_escape_string($conn,$_POST['fname']);
                       $lastname = mysqli_real_escape_string($conn,$_POST['lname']);
                       $email = mysqli_real_escape_string($conn,$_POST['email']);
                       $contact = mysqli_real_escape_string($conn,$_POST['cnum']);
                       $password=mysqli_real_escape_string($conn,$_POST['pwd']);
                      
                   //  $encrypt_pwd = md5($password);
                     

                     $user_check_query = "SELECT * FROM  register WHERE email = '$email' or $contact = 'contact' LIMIT 1";
                     $result = mysqli_query($conn,$user_check_query);
                     $user = mysqli_fetch_assoc($result);


                     
                if ($user) 
                {
                       	
                       if ($user['email'] === $email  ) {
                         	  $email_error ="*email already exists";
                        	
                       }
                       if ($user['contact'] === $contact) {
                       	$contact_error ="*contact number already exists";
                       }
                       echo "<script> alert('please again open registration form!!error.. ');</script>";


                }else{
                	 $sql= "INSERT INTO register (firstname, lastname, password, email, contact) VALUES ('$fname','$lastname','$password','$email','$contact')";

                         if($conn->query($sql) === TRUE)
                         {
                         echo "New record created successfully ";
                           header("location:Userlogin.php");
                          } else
                              {
            	               echo "Error" .$sql . "<br>" . $conn->error;
                               }

                }
            }
             
        
        ?>

     	

	<div class="background">

    
		<img src="img/keybord.jpg" width="1535" height="600">
	   <div id="logo">
	   	<a href="index.php"><img src="img/websitelogo.png" width="400" height="200"></a>
	   	
	   	<h3 id="Allready" class="ftext">Allready Have An Account?</h3>
	   	<input id="login" type="button" name="login" onClick="location.href='Userlogin.php' "  value="LOGIN">
	   	
	   	
	   </div>
        
		<div class="background2"> 
			 <div class="openRegisterbtn"><button  class="bropdwnbutton"  onclick="openform()">Open  Form</button></div>
			 

		<img src="img/370110.jpg " width="900" height="500">
		<div  id="closebtn" class="openRegisterbtn"><button class="bropdwnbutton" onclick="closeform()">Close  Form</button></div>
		<div class="regform">
			<form id="myregform"  class="regf"  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<h1 id="h1">Registration Form</h1>

			<table id="table">
				<tr>
					<td class="ftext">First Name:</td>
					<td><input type="text" name="fname" required autofocus=""></td>
					
				</tr>
				<tr>
					<td class="ftext">Last Name:</td>
					<td><input type="text" name="lname" required ></td>
					
				</tr>
				<tr>
					<td class="ftext">Password:</td>
					<td><input type="text" name="pwd" required ></td>
					<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" -->
					
				</tr>
				<tr>
					<td class="ftext">Email Address:</td>
					<td><input type="email" name="email" required></td>
					<td class="err"><?php echo $email_error; ?></td>
					
				</tr>
				<tr>
					<td class="ftext">Contact Number:</td>
					<td><input type="number" name="cnum" required ></td>
					<td class="err"><?php echo $contact_error; ?></td>
					
				</tr>
				
				<tr>
					<td></td>

					<td  class="ftext"><input id="suBtn"  type="submit" name="submit" value="SUBMIT" ></td>

					<!-- <button id="suBtn" onclick="">REGISTER</button> -->

				</tr>
				
			</table>
		</form>
			
		</div>
	
		
	    </div>

		
	</div>

	
     <script type="text/javascript">
     	
     	function openform()
     	{
     		document.getElementById("myregform").style.display="block";
     	}

     	function closeform()
     	{
     		document.getElementById("myregform").style.display="none";
     	}
     </script>

</body>
</html>
