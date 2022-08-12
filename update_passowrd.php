<?php 
session_start()
 ?>

 <?php 
   if (!isset($_SESSION['email'])) {
           header("location:email_verification.php");
   }else{

        $oldemail=$_SESSION['email'];
        echo $oldemail;
        $sotp=$_SESSION['otp'];
        echo $sotp;

   }

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Update User Password</title>
	
 
</head>
<link rel="stylesheet" type="text/css" href="css/Userlogini.css">
<style>
      #error {color: #FF0000;}

    </style>

<body >
         <?php 
                  
                
          $error="";
          $otperror="";       

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'getpcdatabase');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("DataBase Connection Failed");

   if ($db->connect_error)
             {
            	die("Connection faild:".$conn->connect_error);
             }

             else
             {
             	echo "Connected successfully";
             }

   

   	
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
          {
          	
          	$password_1 = mysqli_real_escape_string($db,$_POST['password']); 
          	$password_2 = mysqli_real_escape_string($db,$_POST['co_password']);
          		$notp  = mysqli_real_escape_string($db,$_POST['otp']);


            if ($sotp != $notp) {

             echo "not matched";
               
            }else{

               $selectquery = mysqli_query($db,"select * from register where email =  '$oldemail'  ") or die(mysqli_error($db));
               $count = mysqli_num_rows($selectquery);
               $row = mysqli_fetch_array($selectquery);

       if ($count >0 && $row['email'] == $oldemail)
        {
           $id=$row['ID'];
          if ($password_1 == $password_2)
           {
                $sql = "UPDATE register SET password='$password_2' WHERE ID= '$id' ";

                 if (mysqli_query($db, $sql))
                  {
                 echo "Record updated successfully";
                  header("location:updated_welcome_page.php");
                 
                    
                 } else {
                      echo "Error updating record: " . mysqli_error($db);
                        } 
           }
           else
            {
              $error="* password is not match";
              }
           

        }else{
            echo "<script> alert('Invalid Email Address ! Please Enter Valid Email Address')</script>";


        }
            }
          
    
          
      

          }

          

   


?>

   

	<div class="background">

		<img src="img/keybord.jpg" width="1535" height="600">
	   <div id="logo">
	   <a href="index.php"><img src="img/websitelogo.png" width="400" height="200" ></a>
	   	<h3 id="havent" class="ftext"> The Largest Computer Solution</h3>
	   
	   	
	   	
	   </div>

		<div class="background2">
		<img src="img/370110.jpg " width="900" height="500">
		<div class="logform">
			<form method="POST" >
			<h1 id="h1">Update Passowrd</h1>

			<table id="table">
				
				<tr>
					
					<td class="ftext">Enter Otp :</td>
					<td><input type="text" name="otp" required><span><?php echo $otperror ?></span></td>
					
				</tr>
				<tr>
					
					<td class="ftext">Enter New Password:</td>
					<td><input type="text" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"></td>
					
				</tr>
				<tr>
					
					<td class="ftext">Confirm Password:</td>
					<td><input type="text" name="co_password" required></td>
					
					
				</tr>
			
				
				<tr>
					<td id="error"><?php echo $error ?></td>

					<td  class="ftext"><input id="suBtn"  type="submit" name="submit" value="UPDATE" ></td>
					
				</tr>
				
				
			</table>
		</form>
			
		</div>
		
		
	    </div>
		
	</div>

	
     

</body>
</html>
