<?php 
 session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Verification</title>
	
 
</head>
<link rel="stylesheet" type="text/css" href="css/Userlogini.css">

<body >
         <?php 
        

                  

                  require 'PHPMailer.php';
                  require 'SMTP.php';
                  require 'Exception.php';
                  use PHPMailer\PHPMailer\PHPMailer;
                  use PHPMailer\PHPMailer\SMTP;
                  use PHPMailer\PHPMailer\Exception;
                
                 

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'getpcdatabase');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die("Data Base Connection Failed");

   if (isset($_POST['submit']))
    {
   	   
   	   $useremail = mysqli_real_escape_string($db,$_POST['email']);

   	   $selectquery = mysqli_query($db,"select * from register where email =  '$useremail'  ") or die(mysqli_error($db));
   	   $count = mysqli_num_rows($selectquery);
   	   $row = mysqli_fetch_array($selectquery);

   	   if ($count >0 && $row['email'] == $useremail)
   	    {
   	    	    $rr=rand(0,1000);

	           
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
                              $mail->setFrom('getpcshop@gmail.comm', 'Password' );
                              //Enable html
                              $mail->isHTML(true);
                              //Atachment
                              $mail->addAttachment('password_update_image.png');
                               //Email body
                              $msg="<p style='color:red'>Your New Password is :<p>";
                              $mail->Body = "Hi {$row['firstname']} $msg $rr ";
                               //Add recipient
                              $mail->addAddress($useremail);
                               //Finally send email

                              if ($mail->Send())
                               {
	                              echo "Email Sent";
	                              header("location:update_passowrd.php");

	                              $_SESSION['email']=$useremail;
	                               $_SESSION['otp']=$rr;

                              }else{

                              	echo "Error...!";
                                // header("location:updated_welcome_email_notsent_page.php");

                                header("location:update_passowrd.php");
                              }

                             //closing smtp connection
                             $mail->smtpClose();


   	   


   	    }else{
            echo "<script> alert('Invalid Email Address ! Please Enter Valid Email Address')</script>";


   	    }
   	  
    }else{
              echo "Error Getting data from form";
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
			<h1 id="h1">Email Verifiication</h1>

			<table id="table">
				
				<tr>
					
					<td class="ftext">Email Address:</td>
					<td><input type="email" name="email" required></td>
					
				</tr>
			
				
				<tr>
					<td></td>

					<td  class="ftext"><input id="suBtn"  type="submit" name="submit" value="SUBMIT" ></td>
					
				</tr>
				
				
			</table>
		</form>
			
		</div>
		
		
	    </div>
		
	</div>

	
     

</body>
</html>
