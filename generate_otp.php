<!DOCTYPE html>
<html>
<head>
	<title>Generate OTP</title>
	
	<?php 
                

                  require 'PHPMailer.php';
                  require 'SMTP.php';
                  require 'Exception.php';
                  use PHPMailer\PHPMailer\PHPMailer;
                  use PHPMailer\PHPMailer\SMTP;
                  use PHPMailer\PHPMailer\Exception;

	 ?>
 
</head>
<link rel="stylesheet" type="text/css" href="Userlogini.css">
<style>
      #error {color: #FF0000;}

    </style>

<body >
     <?php 
            $servername= "localhost";
            $username = "root";
            $password = ""; 
            $dbasename = "getpcdatabase";
            $email_error ="";
            $conn=new mysqli($servername, $username, $password, $dbasename);

             if ($conn->connect_error)
             {
            	die("Connection faild:".$conn->connect_error);
             }

             else
             {
             	echo "Connected successfully";
             }

             if (isset($_POST['submit']))
              {
             	
              $email = mysqli_escape_string($conn,$_POST['email']);

              $otp = rand(100,100000);
              echo $otp;

               $selectquery = mysqli_query($conn,"select * from register where email = '$email'  ") or die(mysqli_error($conn));
   	          $count = mysqli_num_rows($selectquery);
   	          $row = mysqli_fetch_array($selectquery);

              $remail=$row['email'];
              if ($count > 0 && $row['email'] == $email) {
              	
                  $sql = "UPDATE register SET otp='$otp' WHERE 	email= '$remail' ";
                  if (mysqli_query($conn, $sql)){
                            echo "successfully";


                            $mail = new PHPMailer();
                              //Set mailer to use smtp
                              $mail->isSMTP();
                              //define smtp host
                              $mail->Host = "smtp.gmail.com";
                              //enable smtp authentication
                              $mail->SMTPAuth = "true";
                              //set type of encryption (ssl/tls)
                              $mail->SMTPSecure = "tls";
                              //set port to connect smtp
                              $mail->Port = "587";
                              //set gmail username
                              $mail->Username = "getpcshop@gmail.com";
                               //set gmail password
                              $mail->Password = "getpc!@#$";
                               //set email subject
                              $mail->Subject = "Fogot Password";
                               //set sender email
                              $mail->setFrom('getpcshop@gmail.comm', 'OTP Generator' );
                              //Enable html
                              $mail->isHTML(true);
                              //Atachment
                              $mail->addAttachment('password_update_image.png');
                               //Email body
                              $msg="<p style='color:red'>Your OTP number is : :<p>";
                              $msg2="<h3 style='color:blue'><i>You Can Log In To Your Account Using This OTP Number<i></h3>";
                              $mail->Body = "$msg $otp $msg2";
                               //Add recipient
                              $mail->addAddress($email,'WELCOME');
                               //Finally send email

                              if ($mail->Send())
                               {
	                              echo "Email Sent";
	                            

                              }else{

                              	echo "<script>alert('please check internet connection or email!!! ');</script>";
                                 
                              }

                             //closing smtp connection
                             $mail->smtpClose();

                  }else{
                  	echo "not successfully";

                  } 
                
              }

              



             }
  
      ?>

   

	<div class="background">

		<img src="keybord.jpg" width="1535" height="600">
	   <div id="logo">
	   <a href="index.php"><img src="websitelogo.png" width="400" height="200" ></a>
	   	<h3 id="havent" class="ftext"> The Largest Computer Solution</h3>
	   
	   	
	   	
	   </div>

		<div class="background2">
		<img src="370110.jpg " width="900" height="500">
		<div class="logform">
	           
		<form method="POST" >
			<h2 id="h1">secure login OTP generator <br> <i>generate your opt now..</i></h2>

			<table id="table">
				
				<tr>
					
					<td class="ftext"></td>
					<td></td>
					
				</tr>
				<tr>
					<td class="ftext">Email Address:</td>
					<td><input type="email" name="email" required></td>
					
				</tr>
				
				
				<tr>
					<td></td>

					<td  class="ftext"><input id="suBtn"  type="submit" name="submit" value="GENERATE" ></td>
					
				</tr>
				
				
			</table>
		</form>
		</div>
		
		
	    </div>
		
	</div>

	
     

</body>
</html>
