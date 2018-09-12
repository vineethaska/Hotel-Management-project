<?php
$email=$_POST["email"];
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$mobileNo=$_POST["mbNo"];
$adult=$_POST["adults"];
$childs=$_POST["childs"];
$date=$_POST["date"];
     session_start();   
$_SESSION["gmail"]=$email;
$_SESSION["fn"]=$firstname;
$_SESSION["ln"]=$lastname;
$_SESSION["mn"]=$mobileNo;
$_SESSION["ad"]=$adult;
$_SESSION["ch"]=$childs;
$_SESSION["date"]=$date;

require'PHPMailer-5.2.25/PHPMailerAutoload.php'; 
$x=rand(10000,50000);
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
	$mail->Host ='smtp.gmail.com';
	$mail->Port = '587';
	$mail->isHTML(true);
	$mail->Username = 'hydblooddonar@gmail.com';
	$mail->Password = 'Imnagaom9101998';
	$mail->SetFrom('hydblooddonar@gmail.com');
	$mail->Subject = 'SWAGATH GRAND';
	$mail->Body = "YOUR REGISTRATION NO IS  "."$x";
        $mail->AddAddress($email);
        $_SESSION["otp"]=$x;
	
 	if(!$mail->Send()) {
   	 echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
            header("location:otp.html");
	}

    

/*echo "firstname is :".$firstname;
echo "<br>lastname is :".$lastname;
 echo "<br>mobile no:".$mobileNo;
echo "<br>email is :".$email;
echo "<br>adults is :".$adult;
echo "<br>childs is :".$childs;
*/
?>
