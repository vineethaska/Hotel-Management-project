<?php
session_start();
?>
<?php
$e=$_POST["gmail"];
$_SESSION["gmail"]=$e;
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
        $mail->AddAddress($e);
        $_SESSION["otp"]=$x;
	
 	if(!$mail->Send()) {
   	 echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else
	{
            header("location:details.php");
	}




?>

