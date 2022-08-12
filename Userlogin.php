<?php 

   session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<style>
      .error {color: #FF0000;}

    </style>
 
</head>
<link rel="stylesheet" type="text/css" href="css/Userlogini.css">

<body >
         <?php 
                
       $e_mail="";       

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'getpcdatabase');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE,"4306");
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
      // username and password sent from form 
          	

               $useremail = mysqli_real_escape_string($db,$_POST['email']);
               $mypassword = mysqli_real_escape_string($db,$_POST['pws']); 
              // $encrypt_pwd = md5($mypassword);
               
              // $sql = "SELECT * FROM register WHERE email = '$useremail' and password = '$mypassword'";

               $selectquery = mysqli_query($db,"select * from register where email = '$useremail' and password = '$mypassword' "  ) or die(mysqli_error($db));
               $count = mysqli_num_rows($selectquery);
               echo "cout is " , $count;

               $row = mysqli_fetch_array($selectquery);
               if ( $count >0)
                {   
                	// header("location: index.php");
               	     echo "successfully";
                     $e_mail=$useremail;
               	     echo $row['password'];

                     $_SESSION['user_name']=$row['firstname'];
                     header("location:index.php");
    
  


                }else{
                	echo "<script> alert('Wrong Email Addrees or Password!!!') </script>";
                }




              //  $result = mysqli_query($db,$sql);
              //  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


              //  if($row["email"]==$useremail && $row["password"]==$mypassword)
              //    {
              //      echo"You are a validated user.";
              //       header("location: index.php");

              //    }
    
              // else
              //     {
              //      echo"Sorry, your credentials are not valid, Please try again.";
     
              //     } 
           } 




              
                       
             	



             	
             
        
         ?>

   

	<div class="background">

		<img src="img/keybord.jpg" width="1535" height="600">
	   <div id="logo">
	   <a href="index.php"><img src="img/websitelogo.png" width="400" height="200" ></a>
	   	<h3 id="havent" class="ftext"> Haven't An Account?</h3>
	   	<input id="login" type="button" name="login" onClick="location.href='UserRegister.php' "  value="REGISTER">
	   	
	   	
	   </div>

		<div class="background2">
		<img src="img/370110.jpg " width="900" height="500">
		<div class="logform">
			<form method="POST" >
			<h1 id="h1">User Login</h1>

			<table id="table">
				
				<tr>
					
					<td class="ftext">Email Address:</td>
					<td><input type="email" name="email" required></td>
					
				</tr>
				<tr>
					<td class="ftext">Password:</td>
					<td><input type="text" name="pws" required></td>
					
				</tr>
				
				
				<tr>
					<td></td>

					<td  class="ftext"><input id="suBtn"  type="submit" name="submit" value="LOGIN" ></td>
					
				</tr>
				<tr>
					<td><a href="emai_verification.php  "  target="_blank" style="color: red"  >Fogot Password?</a></td>
				</tr>
				
			</table>
		</form>
			
		</div>
		
		
	    </div>
		
	</div>

	
     

</body>
</html>
