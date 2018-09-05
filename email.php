


<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require('vendor/phpmailer/phpmailer/src/Exception.php');
require('vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('vendor/phpmailer/phpmailer/src/SMTP.php');
require 'vendor/autoload.php';

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$commentary = $_POST['commentary']; 

$body = '<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
</head>
<body style="font-family: "Open Sans", sans-serif;">

	<div class="container-fluid p-0 m-0">
		<div class="row">
			<div style="background-image: url(http://corporativo-rh.com/img/fondo-correo.jpg); background-repeat: no-repeat; height: 400px; width: 100%; text-align: center;">
				<div style="width: 500px; margin: auto; padding: 40px 0px;">
					<img src="http://corporativo-rh.com/img/logo.png" style="width: 115px;">
					<h5 style="color: #5D50B1; padding: 0; margin: 0; font-size: 1.4em;"><b>Formulario de Servicios</b></h5>
					<p  style="color: #666; font-size: 1.2em; padding: 0; margin-top: 10px; ">Hola Pablo.</p>
					<p  style="color: #666; font-size: .9em; padding: 0; margin: 0;">Hemos recibido tu mensaje desde el Formulario de Servicios de Corporativo RH. En breve nos pondremos en contacto contigo para resolver tus dudas y sugerencias.</p>

					<br>
					<p class="p-0 m-0" style="color: #666;">Gracias</p>
					<p class="p-0 m-0" style="color: #666;">Desarrollo Web | Corporativo RH</p>
				</div>
			</div>
			<div style="background-color: #27517c; text-align: center; width: 100%;">
				<div style="width: 400px; margin: auto; padding: 20px 0;">
					<img src="http://corporativo-rh.com/img/ico-facebook.png">
					<img src="http://corporativo-rh.com/img/ico-tw.png">
					<img width="32px" src="http://corporativo-rh.com/img/ico-linkn.png">
					
					<p style="color: #fff; font-size: .6em;">Esta es una notificación generada automáticamente. No responda este mensaje. Está recibiendo este correo electrónico pues ha enviado un mensaje previamente en <a href="http://corporativo-rh.com/" target="_blanck">corporativo-rh.com</a> o mediante una de nuestras aplicaciones móviles.</p>
					<p style="color: #fff; font-size: .6em;">© Corporativo RH 2017. Todos los derechos reservados.</p>
				</div>

				
			</div>
		</div>
	</div>

</body>
</html>';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		
		header('Content-type: text/html; charset=utf-8');
		echo "<pre>";
		print_r($_POST);
		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'mail.corporativo-rh.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = false;                               // Enable SMTP authentication
		    $mail->Username = 'ventas@corporativo-rh.com';                 // SMTP username
			$mail->Password = 'crh.gina20186';                          // SMTP password
		    $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                                    // TCP port to connect to
		    $mail->CharSet = 'UTF-8';
		    //Recipients
		    $mail->setFrom('ventas@corporativo-rh.com', 'Ventas Corporativo RH');
			$mail->addAddress($email,'');
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Notificación';
		    $mail->Body    = $body;
		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    $mail->IsHTML(true);
		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}


		/*Gina*/
		include('email-corporativo.php');
		$mail2 = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail2->SMTPDebug = 0;                                 // Enable verbose debug output
		    $mail2->isSMTP();                                      // Set mailer to use SMTP
		    $mail2->Host = 'mail.corporativo-rh.com';  // Specify main and backup SMTP servers
		    $mail2->SMTPAuth = false;                               // Enable SMTP authentication
		    $mail2->Username = 'ventas@corporativo-rh.com';                 // SMTP username
			$mail2->Password = 'crh.gina20186';                          // SMTP password
		    $mail2->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
		    $mail2->Port = 587;                                    // TCP port to connect to
		    $mail2->CharSet = 'UTF-8';
		    //Recipients
		    $mail2->setFrom('ventas@corporativo-rh.com', 'Ventas Corporativo RH');
			$mail2->addAddress('ventas@corporativo-rh.com','');
		    $mail2->isHTML(true);                                  // Set email format to HTML
		    $mail2->Subject = 'Notificación';
		    $mail2->Body    = $bodyG;
		    $mail2->AltBody = 'This is the body in plain text for non-HTML mail clients';
		    $mail2->IsHTML(true);
		    $mail2->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo 'Message could not be sent. Mailer Error: ', $mail2->ErrorInfo;
		}

	?>

</body>
</html>
